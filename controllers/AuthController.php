<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class AuthController
{
    public static function login(Router $router)
    {

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario = new Usuario($_POST);

            $alertas = $usuario->validarLogin();

            if (empty($alertas)) {
                // Verificar quel el usuario exista
                $usuario = Usuario::where('email', $usuario->email);
                if (!$usuario || !$usuario->confirmado) {
                    Usuario::setAlerta('error', 'El Usuario No Existe o no esta confirmado');
                } else {
                    // El Usuario existe
                    if (password_verify($_POST['password'], $usuario->password)) {

                        // Iniciar la sesión
                        session_start();
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['apellido'] = $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['admin'] = $usuario->admin ?? null;
                    } else {
                        Usuario::setAlerta('error', 'Password Incorrecto');
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function logout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION = [];
            header('Location: /');
        }
    }

    public static function registro(Router $router)
    {
        $alertas = [];
        $usuario = new Usuario;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Leer Imagen $_File['image] : 'imagen' Viene Del Name Del Formulario En Su Campo De Imagen
            if (!empty($_FILES['imagen']['tmp_name'])) {
                //Pasos Para Procesar Y Generar Versiones De Imagenes
                //Crear Carpeta Para Las Imagenes Y Revisar Si Existe O No
                $carpeta_imagenes = '../public/img/users';
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }
                //Generar Versiones PNG O WebP (1ero Instanciar Intervetion Image)
                //La Imagen Será De 800 x 800, Formato png y Webp y Calidad 80
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800, 800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800, 800)->encode('webp', 80);
                //Creamos Nombre Aleatorio Para La Imagen
                $nombre_imagen = md5(uniqid(rand(), true));
                //Pasamos El Nombre De La Imagen Al Post Que Es Lo Que Enviaremos A La BD
                $_POST['imagen'] = $nombre_imagen;
                //EN ESTE MOMENTO TENEMOS LA IMAGEN EN MEMORIA PERO NO LA HEMOS GUARDADO
            }

            $usuario->sincronizar($_POST);

            $alertas = $usuario->validar_cuenta();

            if (empty($alertas)) {
                $existeUsuario = Usuario::where('email', $usuario->email);
                //GUARDAR LAS IMAGENES
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . 'png');
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . 'webp');

                if ($existeUsuario) {
                    Usuario::setAlerta('error', 'El Usuario ya esta registrado');
                    $alertas = Usuario::getAlertas();
                } else {
                    // Hashear el password
                    $usuario->hashPassword();

                    // Eliminar password2
                    unset($usuario->password2);

                    // Generar el Token
                    $usuario->crearToken();

                    // Crear un nuevo usuario
                    $resultado =  $usuario->guardar();

                    // Enviar email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarConfirmacion();


                    if ($resultado) {
                        header('Location: /mensaje');
                    }
                }
            }
        }

        // Render a la vista
        $router->render('auth/registro', [
            'titulo' => 'Crea tu cuenta en Refranes',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function olvide(Router $router)
    {
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarEmail();

            if (empty($alertas)) {
                // Buscar el usuario
                $usuario = Usuario::where('email', $usuario->email);

                if ($usuario && $usuario->confirmado) {

                    // Generar un nuevo token
                    $usuario->crearToken();
                    unset($usuario->password2);

                    // Actualizar el usuario
                    $usuario->guardar();

                    // Enviar el email
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);
                    $email->enviarInstrucciones();


                    // Imprimir la alerta
                    // Usuario::setAlerta('exito', 'Hemos enviado las instrucciones a tu email');

                    $alertas['exito'][] = 'Hemos enviado las instrucciones a tu email';
                } else {

                    // Usuario::setAlerta('error', 'El Usuario no existe o no esta confirmado');

                    $alertas['error'][] = 'El Usuario no existe o no esta confirmado';
                }
            }
        }

        // Muestra la vista
        $router->render('auth/olvide', [
            'titulo' => 'Olvide mi Password',
            'alertas' => $alertas
        ]);
    }

    public static function reestablecer(Router $router)
    {

        $token = s($_GET['token']);

        $token_valido = true;

        if (!$token) header('Location: /');

        // Identificar el usuario con este token
        $usuario = Usuario::where('token', $token);

        if (empty($usuario)) {
            Usuario::setAlerta('error', 'Token No Válido, intenta de nuevo');
            $token_valido = false;
        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Añadir el nuevo password
            $usuario->sincronizar($_POST);

            // Validar el password
            $alertas = $usuario->validarPasswords();

            if (empty($alertas)) {
                // Hashear el nuevo password
                $usuario->hashPassword();

                // Eliminar el Token
                $usuario->token = null;

                // Guardar el usuario en la BD
                $resultado = $usuario->guardar();

                // Redireccionar
                if ($resultado) {
                    header('Location: /login');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Muestra la vista
        $router->render('auth/reestablecer', [
            'titulo' => 'Reestablecer Contraseña',
            'alertas' => $alertas,
            'token_valido' => $token_valido
        ]);
    }

    public static function mensaje(Router $router)
    {

        $router->render('auth/mensaje', [
            'titulo' => 'Cuenta Creada Exitosamente'
        ]);
    }

    public static function confirmar(Router $router)
    {

        $token = s($_GET['token']);

        if (!$token) header('Location: /');

        // Encontrar al usuario con este token
        $usuario = Usuario::where('token', $token);

        if (empty($usuario)) {
            // No se encontró un usuario con ese token
            Usuario::setAlerta('error', 'Token No Válido, La Cuenta No Se Confirmó');
        } else {
            // Confirmar la cuenta
            $usuario->confirmado = 1;
            $usuario->token = '';
            unset($usuario->password2);

            // Guardar en la BD
            $usuario->guardar();

            Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
        }



        $router->render('auth/confirmar', [
            'titulo' => 'Confirma tu cuenta de Refranes',
            'alertas' => Usuario::getAlertas()
        ]);
    }
}

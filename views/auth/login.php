<div class="login">

    <div class="login__flex-arriba">
        <picture>
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.webp'; ?>" type="image/webp">
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" type="image/png">
            <img class="login__logo" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" alt="Logo Refranes">
        </picture>

        <h3 class="login__titulo">Refránes Colombianos</h3>
    </div>

    <form action="" class="formulario">
        <div class="formulario__barra"></div>

        <?php include_once __DIR__ . '/../templates/formularioLogin.php'; ?>
        <div class="formulario__centro">
            <div class="formulario__campo">
                <input type="checkbox" id="recuerdame">
                <label for="recuerdame" class="formulario__check">Recuerdame</label>
            </div>

            <a href="/olvide" class="formulario__enlace">Olvidé Mi Contraseña</a>
        </div>


        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="login__acciones">
        <p class="login__parrafo">¿No Tienes Cuenta?</p>
        <a href="/registro" class="login__enlace">Registrarse</a>
    </div>


</div>
<div class="login login--mantener">

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

        <?php include_once __DIR__ . '/../templates/formularioOlvide.php'; ?>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="login__acciones login__acciones--mantener">
        <a href="/login" class="login__enlace">¿Ya Tienes Cuenta? Inicia Sesión</a>
        <a href="/registro" class="login__enlace">Registrarse</a>
    </div>


</div>
<div class="login">
    <?php  
        require_once __DIR__ . '/../templates/alertas.php';
    ?>
    <div class="login__flex-arriba">
        <picture>
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.webp'; ?>" type="image/webp">
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" type="image/png">
            <img class="login__logo" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" alt="Logo Refranes">
        </picture>

        <h3 class="login__titulo">Refránes Colombianos</h3>
    </div>

    <form method="post" action="/registro" class="formulario">
        <div class="formulario__barra formulario__barra--registro"></div>

        <?php include_once __DIR__ . '/../templates/formularioRegistro.php'; ?>


        <input type="submit" class="formulario__submit" value="Registrarse">
    </form>

    <div class="login__acciones login__acciones--registro">
        <a href="/login" class="login__enlace">¿Ya Tienes Cuenta? Inicia Sesión</a>
    </div>


</div>
<div class="login login--mantener">

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

    <?php if($token_valido) { ?>
    <form method="post" class="formulario">
        <div class="formulario__barra"></div>
        <p class="formulario__parrafo">Escribe Tu Nueva Contraseña</p>

        <?php include_once __DIR__ . '/../templates/formularioReestablecer.php'; ?>

        <input type="submit" class="formulario__submit" value="Guardar Contraseña">
    </form>
    <?php } ?>
    
    <div class="login__acciones login__acciones--mantener">
        <a href="/login" class="login__enlace">¿Ya Tienes Cuenta? Inicia Sesión</a>
        <a href="/registro" class="login__enlace">Registrarse</a>
    </div>


</div>
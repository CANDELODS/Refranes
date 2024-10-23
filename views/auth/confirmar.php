<div class="login login--mantener">

    <div class="login__flex-arriba">
        <picture>
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.webp'; ?>" type="image/webp">
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" type="image/png">
            <img class="login__logo" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" alt="Logo Refranes">
        </picture>

        <h3 class="login__titulo">Refránes Colombianos</h3>
    </div>

    <div class="login__barra"></div>
    <h1 class="login__login-mensaje">Cuenta Confirmada Exitosamente</h1>
    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if(isset($alertas['exito'])){ ?>
    <div class="login__acciones login__acciones--registro">
        <a href="/login" class="login__enlace">Inicia Sesión</a>
    </div>
    <?php }?>

</div>
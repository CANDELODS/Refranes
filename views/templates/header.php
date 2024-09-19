<header class="header">

    <nav class="navegacion">

        <div class="navegacion__izquierda">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.webp'; ?>" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" type="image/png">
                <img class="navegacion__logo" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" alt="Logo Refranes">
            </picture>

            <a href="#" class="navegacion__menu">
                <img class="navegacion__enlace-logosvg" src="/build/img/svgMenu.svg" alt="Logo Menu">
                <p class="navegacion__enlace-texto-enlace">Menú</p>
            </a>
        </div> <!--.navegacion__izquierda-->

        <div class="navegacion__medio">
            <div class="navegacion__busqueda">
                <input type="text" class="navegacion__medio navegacion__medio-buscar" placeholder="Busca Un Refrán">
                <img class="navegacion__enlace-logosvg navegacion__enlace-logosvg--lupa" src="/build/img/svgLupa.svg" alt="Logo Menu">
            </div>
        </div> <!--.navegacion__medio-->

        <div class="navegacion__derecha">
            <a href="#" class="navegacion__enlace">
                <p class="navegacion__enlace-texto">Sobre Nosotros</p>
                <img class="navegacion__enlace-logosvg" src="/build/img/svgNosotros.svg" alt="Logo Menu">
            </a>
            <a href="#" class="navegacion__enlace">
                <p class="navegacion__enlace-texto">Mi Cuenta</p>
                <img class="navegacion__enlace-logosvg" src="/build/img/svgUsuario.svg" alt="Logo Menu">
            </a>
        </div> <!--.navegacion__derecha-->

    </nav> <!--.navegacion-->

</header> <!--.header-->
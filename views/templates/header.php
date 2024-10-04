<header class="header">

    <nav class="navegacion">

        <div class="navegacion__izquierda">
            <a href="/">
                <picture>
                    <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.webp'; ?>" type="image/webp">
                    <source srcset="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" type="image/png">
                    <img class="navegacion__logo" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/logo.png'; ?>" alt="Logo Refranes">
                </picture>
            </a>

            <a href="#" class="navegacion__menu">
                <img class="navegacion__enlace-logosvg" src="/build/img/svgMenu.svg" alt="Logo Menu">
                <p class="navegacion__enlace-texto-menu">Menú</p>
            </a>
        </div> <!--.navegacion__izquierda-->

        <div class="navegacion__medio">
            <div class="navegacion__busqueda">
                <input type="text" class="navegacion__medio navegacion__medio-buscar" placeholder="Busca Un Refrán">
            </div>
        </div> <!--.navegacion__medio-->

        <div class="navegacion__derecha">
            <a href="/nosotros" class="navegacion__enlace">
                <p class="navegacion__enlace-texto">Nosotros</p>
                <img class="navegacion__enlace-logosvg" src="/build/img/svgNosotros.svg" alt="Logo Menu">
            </a>
            <a href="/login" class="navegacion__enlace navegacion__enlace--cuenta">
                <p class="navegacion__enlace-texto">Cuenta</p>
                <img class="navegacion__enlace-logosvg navegacion__enlace-logosvg--user" src="/build/img/svgUsuario.svg" alt="Logo Menu">
            </a>
        </div> <!--.navegacion__derecha-->

    </nav> <!--.navegacion-->

</header> <!--.header-->
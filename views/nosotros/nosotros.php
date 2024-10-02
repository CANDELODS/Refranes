<main class="nosotros">
    <h1 class="nosotros__titulo">Sobre Nosotros</h1>

    <div class="nosotros__grid">
        <picture>
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/nosotrosImg.webp'; ?>" type="image/webp">
            <source srcset="<?php echo $_ENV['HOST'] . '/build/img/nosotrosImg.png'; ?>" type="image/png">
            <img class="nosotros__img" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/nosotrosImg.webp'; ?>" alt="Imagen Refran">
        </picture>

        <p class="nosotros__parrafo nosotros__parrafo-uno">
            Somos un equipo apasionado por preservar y compartir la riqueza cultural de Colombia a través de nuestro sitio web dedicado a los refranes colombianos. Nuestro objetivo es celebrar la sabiduría popular, la creatividad lingüística y la conexión con nuestras raíces.
        </p>
        <p class="nosotros__parrafo nosotros__parrafo-dos">
            Cada refrán que presentamos es una ventana a la historia, las tradiciones y la forma de pensar de nuestro pueblo. Nos enorgullece poder compartir esta herencia con el mundo y fomentar una mayor apreciación por la diversidad y la riqueza de la cultura colombiana.
        </p>

    </div>

    <div class="nosotros__frase">
        <p class="nosotros__parrafo-frase">"Los refranes son la sabiduría de las naciones, condensadas en una frase." - Miguel de Cervantes</p>
    </div>
</main>
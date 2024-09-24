<div class="card">
    <picture>
        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.webp'; ?>" type="image/webp">
        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.png'; ?>" type="image/png">
        <img class="card__img" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.webp'; ?>" alt="Imagen Refran">
    </picture>

    <h4 class="card__titulo">No Hay Peor Ciego Que Aquel Que No Quiere Ver</h4>
    <p class="card__descripcion">Hace referencia a cuando sabemos que está ocurriendo algo, pero aún así hacemos como que no está pasando nada así esto nos afecte.</p>

    <div class="acciones">
        <div class="acciones__flex">
            <form action="" class="acciones__formulario acciones__formulario--like">
                <input alt="Boton Me Gusta" src="<?php echo $_ENV['HOST'] . '/build/img/likeSvg.svg'; ?>" type="image">
            </form>
            <form action="" class="acciones__formulario acciones__formulario--dislike">
                <input alt="Boton Me Gusta" src="<?php echo $_ENV['HOST'] . '/build/img/dislikeSvg.svg'; ?>" type="image">
            </form>
            <a href="#" class="acciones__mensaje">
                <img class="acciones__mensaje acciones__mensaje--svg" src="<?php echo $_ENV['HOST'] . '/build/img/mensajeSvg.svg'; ?>" alt="">
            </a>
        </div>


    </div>

</div>
<div class="card">
    <picture>
        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.webp'; ?>" type="image/webp">
        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.png'; ?>" type="image/png">
        <img class="card__img" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/build/img/refranes/pruebaRefran.webp'; ?>" alt="Imagen Refran">
    </picture>

    <h4 class="card__titulo-card">No Hay Peor Ciego Que Aquel Que No Quiere Ver</h4>
    <p class="card__descripcion-card">Hace referencia a cuando sabemos que está ocurriendo algo, pero aún así hacemos como que no está pasando nada así esto nos afecte.</p>

    <div class="acciones">
        <div class="acciones__flex">
            <form action="" class="acciones__formulario acciones__formulario--like">
                <input class="acciones__input" alt="Boton Me Gusta" src="<?php echo $_ENV['HOST'] . '/build/img/likeSvg.svg'; ?>" type="image">
                <p class="acciones__cantidad-reacciones acciones__cantidad-reacciones--like">1000</p>
            </form>
            <form action="" class="acciones__formulario acciones__formulario--dislike">
                <input class="acciones__input" alt="Boton Me Gusta" src="<?php echo $_ENV['HOST'] . '/build/img/dislikeSvg.svg'; ?>" type="image">
                <p class="acciones__cantidad-reacciones">1000</p>
            </form>
            <a href="#" class="acciones__mensaje">
                <img class="acciones__mensaje acciones__mensaje--svg" src="<?php echo $_ENV['HOST'] . '/build/img/mensajeSvg.svg'; ?>" alt="">
            </a>

            <p class="acciones__comentarios"><span class="acciones__span">1000</span> Comentarios</p>
        </div>


    </div>

</div>
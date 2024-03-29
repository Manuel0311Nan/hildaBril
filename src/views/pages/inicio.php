<?php require_once APP . '/views/inc/header.php' ?>
<section>
    <article  style="position: relative;">
    <div class="fotoBackground" id="fotoPortada">
        <div class="textoFotoPortada w-100" id="textoFotoPortada">
            <p class="text-center">Hilda Bril</p>
            <p class="text-center">Diseños de alta costura a tu medida</p>
        </div>
    </div>
    </article>
    <article class="mt-5">
           
        <div class="row mx-auto">
            <div class="col-md-6 d-flex flex-column align-items-end ">
                <a href="reciclaje" class="elemSeccion" id="imagenInicioUno">
                    <div class="imagenOptions">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/reciclaje.jpg' ?>" alt="reciclaje">
                        <h2 class="nomSeccion text-center">Reciclaje de Vestidos</h2>
                    </div>
                </a>
                <a href="novia" class="elemSeccion"  id="imagenInicioDos">
                    <div class="imagenOptions">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/fotoPortada2.jpg' ?>" alt="reciclaje">
                        <h2 class="nomSeccion text-center">Vestidos de novia de alta costura</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-6 ">
                <a href="square" class="elemSeccion"  id="imagenInicioTres">
                    <div class="imagenOptions">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/square.jpg' ?>" alt="square">
                        <h2 class="nomSeccion text-center">Vestidos de Square de Noche</h2>
                    </div>
                </a>
            </div>
        </div>
    </article>
    <article class="d-flex flex-column flex-md-row justify-content-center align-items-center mt-2 tercerArticle">
        <div class="col-md-7 d-flex flex-column justify-content-center">
            <div class="mx-md-4 d-flex flex-column flex-md-row align-items-center">
                <h4 class="titleRrss">Follow our Instagram for exclusive content </h4>
                <a href="#" class="btnInstagram ml-3 "> <span class="px-2 textButton p-1 p-lg-0">@HildaBril</span> </a>
            </div>
            <div class="d-flex flex-column flex-md-row">
                <h4 class="titleRrss">Send us a message</h4>
                <a href="contacto" class="btnInstagram w-25 ml-3  m-auto"> <span class="textButton p-1 p-lg-0">Contact</span> </a>
            </div>
        </div>
        <div class="col-md-5">
            <img class="col-11 h-75 m-5 font-xl d-none d-md-block" src="<?= URL . '/public/assets/images/teñido.jpg' ?>"alt="teñido">
        </div>
    </article>
</section>
<?php require_once APP . '/views/inc/footer.php' ?>
<?php require_once APP . '/views/inc/header.php' ?>
<section>
    <article  style="position: relative;">
    <div class="fotoBackgroundReciclaje" id="fotoPortada">
        <div class="textoFotoPortada w-100" id="textoFotoPortada" >
            <p class="text-center titleSection" id="titleSection">Vestidos de Noche</p>
        </div>
    </div>
    <!-- <h1 class="text-center titleSection" style=" font-size: 100px">Reciclaje de vestidos</h1> -->
    </article>
    <article class="mt-5">
        <div class="row mx-auto">
            <div class="col-xl-6 d-flex flex-column align-items-end">
                <p class="textDescription">
                Siempre pensados en destacar la figura, de acuerdo al lugar donde se celebre el evento. 
                </p>
                <p class="textDescription">
                Nuestros vestidos son el resultado de una meticulosa selección de tejidos, colores y detalles, todos elegidos para asegurar que cada cliente brille con luz propia.
                </p>
                <a href="contacto" class="btnInstagram w-75 m-auto my-4"> <span class="textButton p-1 p-lg-0">Transmítenos tu idea</span> </a>
            </div>
            <div class="col-md-6 d-xl-block d-none">
                    <div class="imagenOptions">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/reciclaje.jpg' ?>" alt="square">
                    </div>
            </div>
        </div>
    </article>
    <article class="my-2">
        <h3 class="text-center p-3"style=" font-size: 50px">Galería</h3>
        <div class="d-flex flex-column imgGalleryDiv">
            <div class="imgGallery img1 col-12" id="img1">
            </div>
            <div class="imgGallery img2 col-12" id="img2">
            </div>
            <div class="imgGallery img3 col-12" id="img3">
            </div>
            <div class="imgGallery img4 col-12" id="img4">
            </div>
        </div>
    </article>
</section>
<?php require_once APP . '/views/inc/footer.php' ?>
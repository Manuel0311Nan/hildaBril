<?php require_once APP . '/views/inc/header.php' ?>
<section>
    <article  style="position: relative;">
    <div class="fotoBackgroundReciclaje" id="fotoPortada">
        <div class="textoFotoPortada w-100" id="textoFotoPortada" >
            <p class="text-center titleSection" id="titleSection">Reciclaje de vestidos</p>
        </div>
    </div>
    <!-- <h1 class="text-center titleSection" style=" font-size: 100px">Reciclaje de vestidos</h1> -->
    </article>
    <article class="mt-5">
        <div class="row mx-auto">
            <div class="col-md-6 d-flex flex-column align-items-end">
                <p class="textDescription" style=" font-size: 20px">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur nobis beatae ab accusamus explicabo ratione deleniti minima obcaecati esse ipsam. Iste omnis ullam, adipisci debitis rerum quae nihil id aperiam?
                </p>
                <p class="textDescription" style=" font-size: 20px">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur nobis beatae ab accusamus explicabo ratione deleniti minima obcaecati esse ipsam. Iste omnis ullam, adipisci debitis rerum quae nihil id aperiam?
                </p>
            </div>
            <div class="col-md-6">
                    <div class="imagenOptions">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/reciclaje.jpg' ?>" alt="square">
                    </div>
            </div>
        </div>
    </article>
    <article class="my-2">
        <h3 class="text-center"style=" font-size: 50px">Galeria</h3>
        <div class="d-flex flex-column imgGalleryDiv">
            <div class="imgGallery img1" id="img1">
            </div>
            <div class="imgGallery img2" id="img2">
            </div>
            <div class="imgGallery img3" id="img3">
            </div>
            <div class="imgGallery img4" id="img4">
            </div>
        </div>
    </article>
</section>
<?php require_once APP . '/views/inc/footer.php' ?>
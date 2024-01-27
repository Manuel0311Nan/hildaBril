<?php require_once APP . '/views/inc/header.php' ?>
<section>
    <article>
        <img class="fotoPortada" src="<?= URL . '/public/assets/images/fotoPortada2.jpg' ?>" alt="fotoPortada">
    </article>
    <article class="mt-5">
        <div class="row mx-auto">
            <div class="col-md-6 d-flex flex-column align-items-end">
                <a href="reciclaje" class="elemSeccion">
                    <div class="animate__animated animate__backInUp">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/reciclaje.jpg' ?>" alt="reciclaje">
                        <h2 class="nomSeccion text-center" style="font-size: 80px;">Reciclaje de Vestidos</h2>
                    </div>
                </a>
                <a href="tenido" class="elemSeccion">
                    <div class="mt-md-5 mt-0 animate__animated animate__backInUp">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/teñido.jpg' ?>"alt="teñido">
                        <h2 class="nomSeccion text-center" style="font-size: 80px;"> Teñido de Telas</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="square" class="elemSeccion">
                    <div class="animate__animated animate__backInUp">
                        <img class="fotosHome" src="<?= URL . '/public/assets/images/square.jpg' ?>" alt="square">
                        <h2 class="nomSeccion text-center" style="font-size: 80px;">Vestidos de Square de Noche</h2>
                    </div>
                </a>
            </div>
        </div>
    </article>
    <article class="row mt-2 tercerArticle">
        <div class="col-6 d-flex flex-column justify-content-center">
            <div class="mx-4">
                <h4 class="titleRrss" style="font-size: 50px;">Follow our Instagram for exclusive content <a href="#" class="btnInstagram ml-3 "> <span class="px-2"  style="font-size: 30px;">@HildaBril</span> </a></h4>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <h4 class="titleRrss" style="font-size: 50px;">Send us a message</h4>
                <a href="contacto" class="btnInstagram w-25"> <span style="font-size: 30px;">Contact</span> </a>
            </div>
        </div>
        <div class="col-6">
            <img class="col-11 h-75 mt-5 font-xl" src="<?= URL . '/public/assets/images/teñido.jpg' ?>"alt="teñido">
        </div>
    </article>
</section>
<?php require_once APP . '/views/inc/footer.php' ?>

</main>
<footer class=" footerArticle">
    <div class=" d-flex flex-column flex-lg-row justify-content-center align-items-center">
        <div class="col-lg-4 ">
            <h4 class="text-center" style="font-size: 50px;">Redes Sociales</h4>
           <a href="#"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Instagram</h4></a>
           <a href="#"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Facebook</h4></a>
           <a href="#"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Pinterest</h4></a>
           <a href="#"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Twitter</h4></a>
        </div>
        <div class="col-lg-3 ">
        <a href="inicio"><h1 class="navFont text-center font-size-xl">Hilda Bril</h1></a>
        </div>
        <div class="col-lg-4 ">
        <h4 class="text-center" style="font-size: 50px;">Servicios</h4>
           <a href="novia"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Vestidos de novia</h4></a>
           <a href="reciclaje"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Reciclaje de vestidos</h4></a>
           <a href="square"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Vestidos de Square</h4></a>
           <a href="tenido"> <h4 class="apartadosFooter text-center" style="font-size: 20px;">Teñido de Telas</h4></a>
        </div>
    </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script>
	$(function () {
		var controller = new ScrollMagic.Controller({
			globalSceneOptions: {
				triggerHook: 'onLeave',
				duration: "100%" 
			}
		});

		var slides = document.querySelectorAll("div.imgGallery");

        for (var i = 0; i < slides.length; i++) {
            new ScrollMagic.Scene({
                triggerElement: slides[i]
            })
            .setPin(slides[i], { pushFollowers: (i === slides.length - 1) }) // pushFollowers será true solo para el último slide
            .addTo(controller);
}
	});
</script>
<script src="<?= URL . '/public/assets/js/bootstrap.min.js' ?>"></script>
<script src="<?= URL . '/public/assets/js/functions.js' ?>"></script>
</body>
</html>
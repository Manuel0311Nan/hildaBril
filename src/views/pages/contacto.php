<?php require_once APP . '/views/inc/header.php' ?>
<section class="my-5 ">
    <article class="col-12 mt-md-0 mt-2">
        <h2 class="text-center titleContact">Quién soy</h2>
        <div class="d-flex flex-column flex-lg-row justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center col-11 col-lg-8">
                <p class="textPerfil">
                    Diseñadora de alta moda, Uruguayo Lituana, radicada en Madrid desde hace 3 años con 35 años de experiencia.
                </p>
                <p class="textPerfil">
                    Mi especialidad son las novias y los vestidos de noche, desde el estilo romántico al ultramoderno.
                </p>
                <p class="textPerfil">
                    Prendas únicas, artesanales, con materiales naturales, incluso piedras y gemas.
                </p>
            </div>
            <div class="col-11 col-lg-3 divImagenPerfil" >
                <img class="imagenPerfil" src="<?= URL . '/public/assets/images/hildaPerfil.jpeg' ?>"alt="fotoPerfil" >
            </div>
        </div>
       
    </article>
    <article class="d-flex flex-column-reverse flex-lg-row">
         <div class="d-flex flex-column col-11 col-lg-2">
         <h2 class="text-center titleContact mt-3">Our Info</h2>
            <h3 class="infoContact">Hilda Bril</h3>
            <h3 class="infoContact">600 000 000</h3>
            <h3 class="infoContact">hildabril@gmail.com</h3>
            <h3 class="infoContact">Madrid / 28047</h3>
        </div>
        <form action="/contacto/send" method="POST" class="d-flex flex-column col-11 col-lg-9 m-auto">
            <h2 class="text-center titleContact mt-3">Contact Us</h2>
            <input class="inputContact" type="text" placeholder="Name" name="name" required>
            <input class="inputContact" pattern="[0-9]{9}" type="tel" name="phone" placeholder="XXXXXXXXX" required>
            <input class="inputContact" type="email" placeholder="Email" name="email" required>
            <select class="mt-2" name="option" id="opcionConsulta">
                <option selected disabled>Escoja el tipo de consulta</option>
                <option value="general" >Consulta General</option>
                <option value="novia">Vestidos de novia</option>
                <option value="square">Vestidos de Square de noche</option>
                <option value="reciclaje">Reciclaje de telas</option>
            </select>
            <textarea class="textareaContact px-2" id="message" name="message" placeholder="Message" cols="30" rows="5"></textarea>
            <button class=" btn w-50 buttonContact mt-2">Send Message</button>
        </form>
    </article>
</section>

<?php require_once APP . '/views/inc/footer.php' ?>
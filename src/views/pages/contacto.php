<?php require_once APP . '/views/inc/header.php' ?>
<h1 class="text-center">Envíanos tu idea</h1>
<section class="row mb-5 ">
    <article class="col-md-6">
        <form action="/contacto/send" method="POST" class="d-flex flex-column w-75 m-auto">
            <h2 class="text-center">Contact Us</h2>
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
            <button class=" btn w-50 buttonContact">Send Message</button>
        </form>
    </article>
    <article class="col-md-6 mt-md-0 mt-2 d-flex flex-column align-content-center">
        <h2 class="text-center">Our Info</h2>
        <div class="d-flex flex-column">
            <h3 class="infoContact">Hilda Bril</h3>
            <h3 class="infoContact">600 000 000</h3>
            <h3 class="infoContact">hildabril@gmail.com</h3>
            <h3 class="infoContact">Madrid / 28047</h3>
        </div>
    </article>
</section>

<?php require_once APP . '/views/inc/footer.php' ?>
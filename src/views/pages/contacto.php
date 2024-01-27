<?php require_once APP . '/views/inc/header.php' ?>
<h1 class="text-center">Envíanos tu idea</h1>
<section class="row mb-5">
    <article class="col-6">
        <form action="#" method="POST" class="d-flex flex-column w-50 m-auto">
            <h2 class="text-center">Contact Us</h2>
            <input class="inputContact" type="text" placeholder="Name" required>
            <input class="inputContact" pattern="\[0-9]{9}" type="tel" placeholder="+00 600 000 000" required>
            <input class="inputContact" type="email" placeholder="Email" required>
            <textarea class="textareaContact px-2" name="Message" id="message" placeholder="Message" cols="30" rows="5"></textarea>
            <button class=" btn w-50 buttonContact">Send Message</button>
        </form>
    </article>
    <article class="col-6 d-flex flex-column align-content-center">
        <h2 class="text-center">Our Info</h2>
        <div class="d-flex flex-column">
            <h3 class="infoContact">Hilda Bril</h3>
            <h3 class="infoContact">600 000 000</h3>
            <h3 class="infoContact">hildabril@gmail.com</h3>
            <h3 class="infoContact">Calle ...</h3>
            <h3 class="infoContact">Madrid / 28047</h3>
            <h3 class="infoContact">España</h3>
        </div>
    </article>
</section>

<?php require_once APP . '/views/inc/footer.php' ?>
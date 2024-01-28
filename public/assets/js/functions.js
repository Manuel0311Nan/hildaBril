window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var texto = document.getElementById('textoFotoPortada');
    var efectsImagen = document.getElementById('fotoPortada');
    if (scrollPosition > 150) { // Cambia 50 a la cantidad de scroll que desees
        texto.classList.add('animate__animated');
        texto.classList.add('animate__fadeInUp');
        texto.classList.add('texto-visible');

        efectsImagen.classList.add('imagen-scroll');
    } else {
        texto.classList.remove('texto-visible');
        efectsImagen.classList.remove('imagen-scroll');
    }
});
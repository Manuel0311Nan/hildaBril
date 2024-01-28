window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var texto = document.getElementById('textoFotoPortada');

    if (scrollPosition > 50) { // Cambia 50 a la cantidad de scroll que desees
        texto.style.display = 'block';
    } else {
        texto.style.display = 'none';
    }
});
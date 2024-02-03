window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var texto = document.getElementById('textoFotoPortada');
    var efectsImagen = document.getElementById('fotoPortada');
    var titleSectionSt = document.getElementById('titleSection');

    if (scrollPosition > 150) { // Cambia 50 a la cantidad de scroll que desees
        texto.classList.add('animate__animated');
        texto.classList.add('animate__fadeInUp');
        texto.classList.add('texto-visible');

        titleSectionSt.classList.add('titleSectionSticky');

        efectsImagen.classList.add('imagen-scroll');
    } else {
        texto.classList.remove('texto-visible');
        efectsImagen.classList.remove('imagen-scroll');
        titleSectionSt.classList.remove('titleSectionSticky');
    }
});

window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    var imagenUno = document.getElementById('imagenInicioUno');
    var imagenDos = document.getElementById('imagenInicioDos');
    var imagenTres = document.getElementById('imagenInicioTres');
    var imagenNovias = document.getElementById('imagenInicioNovia');

    if (scrollPosition > 750) { 
        imagenDos.classList.add('animate__animated');
        imagenDos.classList.add('animate__fadeInUp');
        imagenDos.classList.add('elemSeccionAppear');

    } else if(scrollPosition > 350) {
        imagenUno.classList.add('animate__animated');
        imagenUno.classList.add('animate__fadeInUp');
        imagenUno.classList.add('elemSeccionAppear');

        imagenTres.classList.add('animate__animated');
        imagenTres.classList.add('animate__fadeInUp');
        imagenTres.classList.add('elemSeccionAppear');
    }else if(scrollPosition > 150) {
        imagenNovias.classList.add('animate__animated');
        imagenNovias.classList.add('animate__fadeInUp');
        imagenNovias.classList.add('elemSeccionAppear');

    }else{
        imagenUno.classList.remove('elemSeccionAppear');
        imagenNovias.classList.remove('elemSeccionAppear');
        imagenTres.classList.remove('elemSeccionAppear');
        imagenDos.classList.remove('elemSeccionAppear');
    }
});

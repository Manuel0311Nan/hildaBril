<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hilda Bril, diseño de alta costura a tu medida"/>
    <meta name="keywords" content="diseño, moda, vestidos"/>
    <link rel="stylesheet" href="<?= URL . '/public/assets/css/bootstrap/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . '/public/assets/css/styles.css' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=The+Nautigal:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet"> 
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title><?= $datos['title'] ?></title>
</head>
<body>
<header class="pos-f-t">
  <nav class="navbar navbar-light bg-light navColor p-2">
    <div class="navDisposition">
        <a href="#" class=""><img src="<?= URL . '/public/assets/images/instagram.png' ?>" alt="instagramLogo" width="75"></a>
        <a href="inicio"><h1 class="navFont text-center font-size-xl mt-3">Hilda Bril</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="menuDesplegable">
      <ul class="d-flex flex-column justify-content-end align-items-end">
        <li><a href="novia"> Vestidos de novia</a></li>
        <li><a href="square"> Vestidos de noche exclusivos</a></li>
        <li><a href="reciclaje"> Reciclaje de prendas</a></li>
        <li><a href="contacto"> Contacto</a></li>
      </ul>
    </div>
  </div>
</header>
<main>

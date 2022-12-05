<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-sacalble=no,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <header class="main-header">
        <div class="container container--flex">
          <div class="main-header__container">
            <h1 class="main-header__title">S2M</h1>
            <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
            <nav class="main-nav" id="main-nav">
              <ul class="menu">

                <li class="menu__item"><a href="customerpage.php" class="menu__link">TIENDA</a></li>

              </ul>
            </nav>
          </div>
          <div class="main-header__container">
            <span class="main-header__txt">NECESITAS AYUDA?</span>
            <p class="main-header__txt"><i class="fas fa-phone"></i> TELEFONO:323 7014438</p>
          </div>
          <div class="main-header__container" >
          <button type="button"  onclick="cuenta()" class="btn btn-danger">Editar cuenta</button>
          <button type="button" onclick="salir()" class="btn btn-danger">Cerrar Sesion</button>


          </div>
        </div>
      </header>
      <div class="container-slider">
        <div class="slider" id="slider">
          <div class="slider__section">
            <img src="./images/niña nike.jpg" alt="" class="slider__img">

          </div>
          <div class="slider__section">
            <img src="./images/pexels-daian-gan-102129.jpg" alt="" class="slider__img">

          </div>
          <div class="slider__section">
            <img src="./images/pexels-the-happiest-face-)-1261422.jpg" alt="" class="slider__img">

          </div>
          <div class="slider__section">
            <img src="./images/pexels-mohammed-abubakr-11757389.jpg" alt="" class="slider__img">

          </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
      </div>
      <footer class="main-footer">
        <div class="footer__section">
          <h2 class="footer__title">Nosotros</h2>
          <p class="footer__txt">La pagina mas agogo de Medellin-Belen </p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Ubicacion:</h2>
          <p class="footer__txt">Medellin-Belen rosales</p>
          <h2 class="footer__title">Contacto</h2>
          <p class="footer__txt">Celular: +57 323 7014438</p>
          <p class="footer__txt">Email : op7naranjo@gmail.com</p>
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Links Rapidos</h2>
       
          <a href="customerpage.php" class="footer__link">Tienda</a>
      
        </div>
        <div class="footer__section">
          <h2 class="footer__title">Suscribase para recibir ofertas</h2>
          <p class="footer__txt">Suscribase mi papacho.</p>
          <input type="email" class="footer__input" placeholder="Introduzca su  email">
        </div>
        <p class="copy">© 2022 Goggles. All Rights Reserved | Design by W3Layouts</p>
      </footer>
  <script src="./slider.js">

    function cuenta(){
        window.location.href = "editarcontrasena.php"

    }


    function salir(){
      window.location.href = "logout.php"
    }

  </script>
</body>
</html>
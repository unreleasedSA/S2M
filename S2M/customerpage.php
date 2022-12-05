<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>TIENDA</title>
</head>
<body>
  <header class="main-header">
    <div class="container container--flex">
      <div class="main-header__container">
        <h1 class="main-header__title">S2M</h1>
        <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
        <nav class="main-nav" id="main-nav">
          <ul class="menu">

            <li class="menu__item"><a href="iniciocustomer.php" class="menu__link">INICIO</a></li>
          </ul>
        </nav>
      </div>
      <div class="main-header__container">
        <span class="main-header__txt">NECESITAS AYUDA?</span>
        <p class="main-header__txt"><i class="fas fa-phone"></i> TELEFONO:323 7014438</p>
      </div>
      <div class="main-header__container">
        <button type="button"  onclick="cuenta()" class="btn btn-danger">Editar cuenta</button>
          <button type="button"  onclick="salir()" class="btn btn-danger">Cerrar Sesion</button>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <h2 class="main-title">Lo Mas Vendido</h2>
      <section class="container-products" >
        <div class="producto">
          <img src="./images/deportiva.jpeg" alt="" onclick= "observar1()" width="500px" class="producto__img">
          <div class="producto__description">
            <h3 class="producto__titulo">Camiseta(Deportiva)</h3>
            <span class="producto__precio">$30.000</span>
          </div>
          <i class="producto__icon fas fa-cart-plus"></i>
        </div>
        <div class="producto">
          <img src="./images/clasica.jpeg" alt=""  onclick= "observar2()" class="producto__img">
          <div class="producto__description">
            <h3 class="producto__titulo">Camiseta(Clasica)</h3>
            <span class="producto__precio">$35.000</span>
          </div>
          <i class="producto__icon fas fa-cart-plus"></i>
        </div>
        <div class="producto">
          <img src="./images/vintage.jpeg" alt="" onclick= "observar3()" class="producto__img">
          <div class="producto__description">
            <h3 class="producto__titulo">Camieta(Vintage)</h3>
            <span class="producto__precio">$60.000</span>
          </div>
          <i class="producto__icon fas fa-cart-plus"></i>
        </div>
        <div class="producto">
          <img src="./images/polo.jpeg" alt="" onclick= "observar4()" class="producto__img">
          <div class="producto__description">
            <h3 class="producto__titulo">Camiseta(Tipo Polo)</h3>
            <span class="producto__precio">$50.000</span>
          </div>
          <i class="producto__icon fas fa-cart-plus"></i>
        </div>
      </section> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  

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
      <a href="index.html" class="footer__link">Inicio</a>
      <a href="nosotros.html" class="footer__link">Nosotros</a>
      <a href="tienda.html" class="footer__link">Tienda</a>
      <a href="contacto.html" class="footer__link">Contacto</a>
    </div>
    <div class="footer__section">
      <h2 class="footer__title">Suscribase para recibir ofertas</h2>
      <p class="footer__txt">Suscribase mi papacho.</p>
      <input type="email" class="footer__input" placeholder="Introduzca su  email">
    </div>
    <p class="copy">© 2022 Goggles. All Rights Reserved | Design by W3Layouts</p>
  </footer>

    <script> 
    function observar1 (){

        window.location.href = "imagen1.html"
    }

    function observar2 (){

        window.location.href = "imagen2.html"
    }

    function observar3(){
        window.location.href = "imagen3.html"
    }

    function observar4(){
        window.location.href = "imagen4.html"
    }

    function cuenta(){
        window.location.href = "editarcontrasena.php"

    }


    function salir(){
      window.location.href = "logout.php"
    }

    </script>

</body>
</html>
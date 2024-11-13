<?php
require_once '../classes/Peliculas.php';
require_once '../classes/Titulo.php';

$id_titulo = $_GET['id'] ?? false; // Cambiado para obtener el ID correctamente  

$miObjetoPeliculas = new Peliculas();
$peliculas = $miObjetoPeliculas->catalogo_x_titulo($id_titulo);

$titulo = (new Titulo())->get_x_id($id_titulo);
?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peliculas</title>



  <!-- vincular estilos -->
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/peliculas.css">

  <!-- Animated -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- FontAwesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Favicon-->
  <link rel="icon" href="../img/ico/icono.ico">

  <!-- font -->
  <link href="https://fonts.cdnfonts.com/css/starjedi-special-edition" rel="stylesheet">



</head>

<body class="jjj">

  <div class="grid-contenedor">
    <div class="articulo1">

    </div>
    <div class="articulo2">

      <nav>

        <ul class="nav">


          <li><a href="inicio.php" target="_self">inicio</a></li>
          <li><a href="personajes.php" target="_self">Personajes</a></li>
          <li><a href="naves.php" target="_self">Naves</a></li>
          <li><a href="sables.php" target="_self">Sables de Luz</a></li>
          <li><a href="peliculas.php" target="_self">Peliculas</a></li>
          <li><a href="../index.php" target="_self">Presentación</a></li>
          <li><a href="creditos.php" target="_self">Créditos</a></li>


        </ul>
      </nav>
    </div>
    <div class="articulo3">
      <aside>

      </aside>
    </div>

    <div class="articulo4">
      <header>
        <h1>Peliculas</h1>
      </header>
    </div>
    <div class="articulo5">
      <main>
       
        <p>¡Bienvenidos a nuestro rincón dedicado a las películas de Star Wars! Aquí exploramos la épica saga que ha
          cautivado a generaciones, desde la lucha entre Jedi y Sith hasta las aventuras en galaxias muy, muy lejanas.
          Descubre análisis de cada episodio, personajes icónicos y momentos inolvidables que han dejado huella en la
          cultura pop. Sumérgete en el universo de Star Wars con nosotros y revive la magia de una historia que continúa
          inspirando a millones de fans alrededor del mundo.!
        </p>

        <!-- SLIDER  TIMELINE-->

        <div class="slider">
          <!-- list Items -->
          <div id="slider" class="list">
            <div class="item active">
              <img class="myImage" src="../img/peliculas/epi1.webp" alt="episodio1">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi2.webp" alt="episodio2">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi3.webp" alt="episodio3">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi4.webp" alt="episodio4">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi5.webp" alt="episodio5">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi6.webp" alt="episodio6">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi7.webp" alt="episodio7">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi8.webp" alt="episodio8">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/epi9.webp" alt="episodio9">

            </div>
            <div class="item">
              <img class="myImage" src="../img/peliculas/rouge.webp" alt="rogue-one">

            </div>

          </div>
          <!-- button arrows -->
          <div class="arrows2">
            <button id="prev"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="15"
                viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
              </svg></button>
          </div>
          <div class="arrows">
            <button id="next"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="15"
                viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff"
                  d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
              </svg></button>
          </div>
          <!-- thumbnail -->
          <div class="thumbnail">
            <div>
              <div class="item active">
                <h3 class="titulotumba">1999</h3>
                <img src="../img/peliculas/epi1.webp" alt="episodio1">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=FZU43AoEhxQ" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2002</h3>
                <img src="../img/peliculas/epi2.webp" alt="episodio2">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=vl32e0_NlqM" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2005</h3>
                <img src="../img/peliculas/epi3.webp" alt="episodio3">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=d3XN49jmmGM" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">1977</h3>
                <img src="../img/peliculas/epi4.webp" alt="episodio4">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=J7pPf0gx77U" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">1980</h3>
                <img src="../img/peliculas/epi5.webp" alt="episodio5">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=d8es2mzjdFc" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">1983</h3>
                <img src="../img/peliculas/epi6.webp" alt="episodio6">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=Q4xMJxTaToQ" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2015</h3>
                <img src="../img/peliculas/epi7.webp" alt="episodio7">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=Y1BKJSgnQuA" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2017</h3>
                <img src="../img/peliculas/epi8.webp" alt="episodio8">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=iuf8Z_vpuPM" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2019</h3>
                <img src="../img/peliculas/epi9.webp" alt="episodio9">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=Ej-xfKqlleM" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
            <div>
              <div class="item">
                <h3 class="titulotumba">2016</h3>
                <img src="../img/peliculas/rouge.webp" alt="rogue-one">
              </div>
              <div class="content">
                <button class="fullscreen-btn">FullScreen</button>
                <a href="https://www.youtube.com/watch?v=fZEbOMW_PNs" target="_blank"><button class="trailer-btn">Ver
                    Tráiler</button></a>
              </div>
            </div>
          </div>
        </div>


        <div class="container-card">
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi11.jpg" alt="imagen1">
                <h3>Episodio I</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
              
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi12.webp" alt="imagen2">
                <h3>Episodio II</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi13.webp" alt="imagen3">
                <h3>Episodio III</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi14.jpg" alt="imagen4">
                <h3>Episodio IV</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi15.webp" alt="imagen5">
                <h3>Episodio V</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi16.webp" alt="imagen6">
                <h3>Episodio VI</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi17.jpg" alt="imagen7">
                <h3>Episodio VII</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi18.webp" alt="imagen8">
                <h3>Episodio VIII</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi19.jpg" alt="imagen9">
                <h3>Episodio IX</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
          <div class="card">
            <a href="episodio.php">
              <div class="face front">
                <img src="../img/peliculas/epi20.jpg" alt="imagen5">
                <h3>Episodio X</h3>
                <h3 class="dosh3">Ver Más</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="ordenpelis">
          <br>
          <br>
          <p class="orden-pelis">El orden en que se pueden ver las películas de Star Wars puede variar según la preferencia personal, ya que
            hay varias formas de disfrutarlas. Aquí tienes algunos de los métodos más populares:</p>

          <p class="republica2"><strong> Orden de lanzamiento: </strong> Este es el orden en que se estrenaron las
            películas:
            <br>

            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio IV: Una nueva esperanza
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio V: El Imperio contraataca
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VI: El regreso del Jedi
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio I: La amenaza fantasma
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio II: El ataque de los clones
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio III: La venganza de los Sith
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VII: El despertar de la Fuerza
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VIII: Los últimos Jedi
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio IX: El ascenso de Skywalker
            <br>
            <br>
            <strong>Orden Machete: </strong> Este es un orden alternativo que omite el Episodio I y presenta la historia
            de manera que se mantiene el misterio sobre ciertos personajes. El orden es:
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg>Episodio IV: Una nueva esperanza
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio II: El ataque de los clones

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio III: La venganza de los Sith

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VI: El regreso del Jedi

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Luego se pueden ver los episodios VII, VIII y IX.
            <br>

            <br>
            <strong>Orden cronológico: </strong> Este es el orden según la cronología de la historia dentro del universo
            de Star Wars:
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg>Episodio I: La amenaza fantasma
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio II: El ataque de los clones


            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio III: La venganza de los Sith


            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio IV: Una nueva esperanza


            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio V: El Imperio contraataca

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VI: El regreso del Jedi

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VII: El despertar de la Fuerza

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio VIII: Los últimos Jedi

            <br>
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="19.375"
              viewBox="0 0 496 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#f7f7f7"
                d="M248 504C111.3 504 0 392.8 0 256S111.3 8 248 8s248 111.3 248 248-111.3 248-248 248zm0-479.5C120.4 24.5 16.5 128.4 16.5 256S120.4 487.5 248 487.5 479.5 383.6 479.5 256 375.6 24.5 248 24.5zm27.6 21.8v24.6a185.9 185.9 0 0 1 83.6 34.5l17.4-17.4c-28.8-22.1-63.3-36.9-101-41.8zm-55.4 .1c-37.6 4.9-72.2 19.8-100.9 41.9l17.3 17.4h.1c24.1-17.8 52.6-30.1 83.5-34.7V46.4zm12.3 50.2v82.9c-10 2-19.4 5.9-27.7 11.4l-58.6-58.6-21.9 21.9 58.7 58.7c-5.5 8.2-9.5 17.6-11.5 27.6h-82.9v31h82.9c2 10 6 19.3 11.5 27.5l-58.7 58.7 21.9 21.9 58.6-58.6a77.9 77.9 0 0 0 27.7 11.5v82.9h31v-82.9c10.1-2 19.4-6.1 27.6-11.6l58.7 58.7 21.9-21.9-58.7-58.7c5.5-8.2 9.5-17.5 11.5-27.5h82.9v-31h-82.9c-2-10-6-19.4-11.5-27.6l58.7-58.7-21.9-21.9-58.7 58.7c-8.3-5.5-17.6-9.5-27.6-11.5V96.6h-31zm183.2 30.7l-17.4 17.4a186.3 186.3 0 0 1 34.7 83.7h24.6c-5-37.7-19.8-72.3-41.9-101zm-335.6 .1c-22.1 28.7-36.9 63.3-41.9 100.9h24.7c4.6-31 16.8-59.5 34.6-83.5l-17.4-17.4zM38.3 283.7c4.9 37.6 19.8 72.2 41.8 100.9l17.4-17.4c-17.8-24.1-29.9-52.6-34.5-83.5H38.3zm394.7 0c-4.6 31-16.8 59.5-34.7 83.6l17.4 17.4c22.1-28.7 37-63.3 41.9-101h-24.6zM136.7 406.4l-17.4 17.4c28.7 22.1 63.3 37 101 41.9v-24.6c-31-4.6-59.5-16.8-83.6-34.7zm222.5 .1c-24.1 17.8-52.6 30.1-83.6 34.7v24.6c37.7-4.9 72.2-19.8 101-41.9l-17.3-17.4h-.1z" />
            </svg> Episodio IX: El ascenso de Skywalker
            <br>
            <br>
          </p>
        </div>


        


        <div class="containerquiz">

          <h2 class="tituloquiz">Quiz de Star Wars</h2>
          <div id="quiz"></div>
          <button class="quizbtn" id="submit">Enviar Respuestas</button>
          <div id="result" class="hidden"></div>
          <button id="restart" class="hidden quizbtn">Reiniciar Quiz</button>
          <div class="quizbtn2" id="questionCounter"></div>
        </div>


      </main>
    </div>

    <div class="articulo6">
      <div class="botones-fin">
        <!-- Inicio de Pagina -->
        <div class="icono-container">

          <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFFFFF"
                d="M249.9 33.5v26.1C236.3 80.2 226 168.1 225.4 274.9c11.7-15.6 19.1-33.3 19.1-48.2v-16.9c0-5.3 .8-10.5 2.2-15.7 .7-2.1 1.4-4.1 2.6-5.8 1.2-1.8 3.4-3.8 6.7-3.8 3.2 0 5.5 2.1 6.7 3.8 1.2 1.8 2 3.7 2.6 5.8 1.4 5.1 2.2 10.3 2.2 15.7v16.9c0 14.9 7.4 32.6 19.1 48.2-.6-106.8-10.9-194.7-24.5-215.4V33.5h-12.3zm-26.3 147.8c-9.5 2.2-18.7 5.2-27.5 9.1 8.9 16.1 9.8 32.6 1.7 37.3-8 4.6-21.9-4.2-31.4-19.8-11.6 8.8-21.9 19.3-30.6 31.1 14.7 9.6 22.9 22.9 18.3 30.7-4.5 7.7-20 7.1-35.5-1-5.8 13.3-9.8 27.5-11.7 42.4 9.7 .2 18.7 2.4 26.2 6 17.8-.3 32.8-2 40.5-4.2 5.6-26.4 23-48.2 46.3-59.5 .7-25.6 1.9-49.7 3.5-72.1zm65 0c1.6 22.4 2.8 46.5 3.5 72.1 23.3 11.3 40.8 33.2 46.3 59.5 7.7 2.3 22.7 3.9 40.5 4.2 7.5-3.7 16.5-5.9 26.2-6-1.9-14.9-5.9-29.2-11.7-42.4-15.4 8.1-30.9 8.7-35.5 1-4.6-7.7 3.6-21.1 18.3-30.7-8.7-11.8-19-22.3-30.6-31.1-9.5 15.6-23.4 24.4-31.4 19.8-8.1-4.7-7.2-21.2 1.7-37.3a147.5 147.5 0 0 0 -27.5-9.1zm-32.5 8.6c-3.2 0-5.9 8.8-6.1 19.9h-.1v16.9c0 41.4-49 95-93.5 95-52 0-122.8-1.5-156.4 29.2v2.5c9.4 17.1 20.6 33.2 33.2 48C45.7 380.3 84.8 360.4 141.2 360c45.7 1 79 20.3 90.8 40.9 0 0 0 0 0 .1 7.7 2.1 15.9 3.2 24 3.2 8.2 0 16.4-1.1 24-3.2 0 0 0 0 0-.1 11.7-20.5 45.1-39.9 90.8-40.9 56.4 .4 95.5 20.3 108 41.4 12.6-14.8 23.8-30.9 33.2-48v-2.5c-33.6-30.6-104.4-29.2-156.4-29.2-44.5 0-93.5-53.6-93.5-95v-16.9h-.1c-.2-11.1-2.9-19.9-6.1-19.9zm0 96.6c22.4 0 40.6 18.2 40.6 40.6s-18.2 40.7-40.6 40.7-40.6-18.2-40.6-40.7c0-22.4 18.2-40.6 40.6-40.6zm0 7.6c-18.2 0-33 14.8-33 33S237.8 360 256 360s33-14.8 33-33-14.8-33-33-33zm0 6.1c14.8 0 26.8 12 26.8 26.8s-12 26.8-26.8 26.8-26.8-12-26.8-26.8 12-26.8 26.8-26.8zm-114.8 66.7c-10.2 .1-21.6 .4-30.5 1.7 .4 4.4 1.5 18.6 7.1 29.8 9.1-2.6 18.4-3.9 27.6-3.9 41.3 .9 71.5 34.4 78.3 74.5l.1 4.7c10.4 1.9 21.2 2.9 32.2 2.9 11 0 21.8-1 32.2-2.9l.1-4.7c6.8-40.1 37-73.5 78.3-74.5 9.3 0 18.5 1.3 27.6 3.9 5.6-11.1 6.7-25.3 7.1-29.8-8.9-1.3-20.3-1.6-30.5-1.7-18.8 .4-35.2 4.2-48.6 9.7-12.5 16-29.2 30-49.6 33.1-.1 0-.2 0-.3 .1-.1 0-.1 0-.2 .1-5.2 1.1-10.6 1.6-16.2 1.6-5.6 0-11-.5-16.2-1.6-.1 0-.1 0-.2-.1-.1 0-.2 0-.3-.1-20.4-3-37-17-49.6-33.1-13.4-5.5-29.9-9.3-48.6-9.7z" />
            </svg></a>
          <div class="icono-texto3">Inicio</div>

        </div>
        <!--Home -->
        <div class="icono-container">

          <a href="inicio.php"><svg xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFFFFF"
                d="M0 96C0 43 43 0 96 0L384 0l32 0c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0L96 512c-53 0-96-43-96-96L0 96zM64 416c0 17.7 14.3 32 32 32l256 0 0-64L96 384c-17.7 0-32 14.3-32 32zm90.4-234.4l-21.2-21.2c-3 10.1-5.1 20.6-5.1 31.6c0 .2 0 .5 .1 .8s.1 .5 .1 .8L165.2 226c2.5 2.1 3.4 5.8 2.3 8.9c-1.3 3-4.1 5.1-7.5 5.1c-1.9-.1-3.8-.8-5.2-2l-23.6-20.6C142.8 267 186.9 304 240 304s97.3-37 108.9-86.6L325.3 238c-1.4 1.2-3.3 2-5.3 2c-2.2-.1-4.4-1.1-6-2.8c-1.2-1.5-1.9-3.4-2-5.2c.1-2.2 1.1-4.4 2.8-6l37.1-32.5c0-.3 0-.5 .1-.8s.1-.5 .1-.8c0-11-2.1-21.5-5.1-31.6l-21.2 21.2c-3.1 3.1-8.1 3.1-11.3 0s-3.1-8.1 0-11.2l26.4-26.5c-8.2-17-20.5-31.7-35.9-42.6c-2.7-1.9-6.2 1.4-5 4.5c8.5 22.4 3.6 48-13 65.6c-3.2 3.4-3.6 8.9-.9 12.7c9.8 14 12.7 31.9 7.5 48.5c-5.9 19.4-22 34.1-41.9 38.3l-1.4-34.3 12.6 8.6c.6 .4 1.5 .6 2.3 .6c1.5 0 2.7-.8 3.5-2s.6-2.8-.1-4L260 225.4l18-3.6c1.8-.4 3.1-2.1 3.1-4s-1.4-3.5-3.1-3.9l-18-3.7 8.5-14.3c.8-1.2 .9-2.9 .1-4.1s-2-2-3.5-2l-.1 0c-.7 .1-1.5 .3-2.1 .7l-14.1 9.6L244 87.9c-.1-2.2-1.9-3.9-4-3.9s-3.9 1.6-4 3.9l-4.6 110.8-12-8.1c-1.5-1.1-3.6-.9-5 .4s-1.6 3.4-.8 5l8.6 14.3-18 3.7c-1.8 .4-3.1 2-3.1 3.9s1.4 3.6 3.1 4l18 3.8-8.6 14.2c-.2 .6-.5 1.4-.5 2c0 1.1 .5 2.1 1.2 3c.8 .6 1.8 1 2.8 1c.7 0 1.6-.2 2.2-.6l10.4-7.1-1.4 32.8c-19.9-4.1-36-18.9-41.9-38.3c-5.1-16.6-2.2-34.4 7.6-48.5c2.7-3.9 2.3-9.3-.9-12.7c-16.6-17.5-21.6-43.1-13.1-65.5c1.2-3.1-2.3-6.4-5-4.5c-15.3 10.9-27.6 25.6-35.8 42.6l26.4 26.5c3.1 3.1 3.1 8.1 0 11.2s-8.1 3.1-11.2 0z" />
            </svg></a>
          <div class="icono-texto3">Home</div>

        </div>
        <!-- Pagina anterior -->
        <div class="icono-container">

          <div class="anterior">
            <a onClick="history.go(-1)"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#FFFFFF"
                  d="M249.9 33.5v26.1C236.3 80.2 226 168.1 225.4 274.9c11.7-15.6 19.1-33.3 19.1-48.2v-16.9c0-5.3 .8-10.5 2.2-15.7 .7-2.1 1.4-4.1 2.6-5.8 1.2-1.8 3.4-3.8 6.7-3.8 3.2 0 5.5 2.1 6.7 3.8 1.2 1.8 2 3.7 2.6 5.8 1.4 5.1 2.2 10.3 2.2 15.7v16.9c0 14.9 7.4 32.6 19.1 48.2-.6-106.8-10.9-194.7-24.5-215.4V33.5h-12.3zm-26.3 147.8c-9.5 2.2-18.7 5.2-27.5 9.1 8.9 16.1 9.8 32.6 1.7 37.3-8 4.6-21.9-4.2-31.4-19.8-11.6 8.8-21.9 19.3-30.6 31.1 14.7 9.6 22.9 22.9 18.3 30.7-4.5 7.7-20 7.1-35.5-1-5.8 13.3-9.8 27.5-11.7 42.4 9.7 .2 18.7 2.4 26.2 6 17.8-.3 32.8-2 40.5-4.2 5.6-26.4 23-48.2 46.3-59.5 .7-25.6 1.9-49.7 3.5-72.1zm65 0c1.6 22.4 2.8 46.5 3.5 72.1 23.3 11.3 40.8 33.2 46.3 59.5 7.7 2.3 22.7 3.9 40.5 4.2 7.5-3.7 16.5-5.9 26.2-6-1.9-14.9-5.9-29.2-11.7-42.4-15.4 8.1-30.9 8.7-35.5 1-4.6-7.7 3.6-21.1 18.3-30.7-8.7-11.8-19-22.3-30.6-31.1-9.5 15.6-23.4 24.4-31.4 19.8-8.1-4.7-7.2-21.2 1.7-37.3a147.5 147.5 0 0 0 -27.5-9.1zm-32.5 8.6c-3.2 0-5.9 8.8-6.1 19.9h-.1v16.9c0 41.4-49 95-93.5 95-52 0-122.8-1.5-156.4 29.2v2.5c9.4 17.1 20.6 33.2 33.2 48C45.7 380.3 84.8 360.4 141.2 360c45.7 1 79 20.3 90.8 40.9 0 0 0 0 0 .1 7.7 2.1 15.9 3.2 24 3.2 8.2 0 16.4-1.1 24-3.2 0 0 0 0 0-.1 11.7-20.5 45.1-39.9 90.8-40.9 56.4 .4 95.5 20.3 108 41.4 12.6-14.8 23.8-30.9 33.2-48v-2.5c-33.6-30.6-104.4-29.2-156.4-29.2-44.5 0-93.5-53.6-93.5-95v-16.9h-.1c-.2-11.1-2.9-19.9-6.1-19.9zm0 96.6c22.4 0 40.6 18.2 40.6 40.6s-18.2 40.7-40.6 40.7-40.6-18.2-40.6-40.7c0-22.4 18.2-40.6 40.6-40.6zm0 7.6c-18.2 0-33 14.8-33 33S237.8 360 256 360s33-14.8 33-33-14.8-33-33-33zm0 6.1c14.8 0 26.8 12 26.8 26.8s-12 26.8-26.8 26.8-26.8-12-26.8-26.8 12-26.8 26.8-26.8zm-114.8 66.7c-10.2 .1-21.6 .4-30.5 1.7 .4 4.4 1.5 18.6 7.1 29.8 9.1-2.6 18.4-3.9 27.6-3.9 41.3 .9 71.5 34.4 78.3 74.5l.1 4.7c10.4 1.9 21.2 2.9 32.2 2.9 11 0 21.8-1 32.2-2.9l.1-4.7c6.8-40.1 37-73.5 78.3-74.5 9.3 0 18.5 1.3 27.6 3.9 5.6-11.1 6.7-25.3 7.1-29.8-8.9-1.3-20.3-1.6-30.5-1.7-18.8 .4-35.2 4.2-48.6 9.7-12.5 16-29.2 30-49.6 33.1-.1 0-.2 0-.3 .1-.1 0-.1 0-.2 .1-5.2 1.1-10.6 1.6-16.2 1.6-5.6 0-11-.5-16.2-1.6-.1 0-.1 0-.2-.1-.1 0-.2 0-.3-.1-20.4-3-37-17-49.6-33.1-13.4-5.5-29.9-9.3-48.6-9.7z" />
              </svg></a>

          </div>
          <div class="icono-texto2">Anterior</div>


        </div>
      </div>

    </div>

    <div class="articulo7">
      <aside>

      </aside>
    </div>

    <div class="articulo8">
      <footer>
        <div class="marquee">
          <div>
            <span>Todos los derechos reservados - C.F.P Nº20 - Copyright &copy; -2024 - Argentina </span>
          </div>
        </div>



      </footer>

    </div>
  </div>



  <script src="../js/peliculas.js"></script>
</body>

</html>
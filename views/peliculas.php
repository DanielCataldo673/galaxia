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
        <?php
        require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
        /* La palabra clave required nos permite hacer que un input de un formulario sea obligatorio. */
        ?>
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
                <a href="#modal1"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal2"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal3"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal4"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal5"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal6"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal7"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal8"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal9"><button class="ver-btn">Ver Más</button></a>
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
                <a href="#modal10"><button class="ver-btn">Ver Más</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="ordenpelis">
          <br>
          <br>
          <p>El orden en que se pueden ver las películas de Star Wars puede variar según la preferencia personal, ya que
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


        <div class="historia-modal">
          <div id="modal1" class="modalmask">
            <div class="modalbox movedown">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode I - The Phantom Menace (La amenaza fantasma)</h2>
              <img src="../img/peliculas/epi1.webp" alt="epi1">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                1999
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                136 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$1,021 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Qui-Gon Jinn,
                Obi-Wan Kenobi,
                Anakin Skywalker,
                Padmé Amidala,
                Jar Jar Binks.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Liam Neeson (Qui-Gon Jinn),
                Ewan McGregor (Obi-Wan Kenobi),
                Jake Lloyd (Anakin Skywalker),
                Natalie Portman (Padmé Amidala),
                Ahmed Best (Jar Jar Binks).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                David Tattersall
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Paul Hirsch
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Trisha Biggar
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                Un Jedi maestro, Qui-Gon Jinn, y su aprendiz, Obi-Wan Kenobi, intentan mediar en un conflicto entre la
                Federación de Comercio y el planeta Naboo. Su misión se complica cuando descubren al joven Anakin
                Skywalker,a quien creen que es el Elegido que traerá equilibrio a la Fuerza.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Fue la primera película de Star Wars en 16 años; Jar Jar Binks fue uno de los personajes más
                controvertidos, recibiendo opiniones mixtas de los fans.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal2" class="modalmask">
            <div class="modalbox rotate">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode II - Attack of the Clones (El ataque de los clones)</h2>
              <img src="../img/peliculas/epi2.webp" alt="epi2">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2002
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                142 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$653 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Anakin Skywalker,
                Padmé Amidala,
                Obi-Wan Kenobi,
                Jango Fett,
                Yoda.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Hayden Christensen (Anakin Skywalker),
                Natalie Portman (Padmé Amidala),
                Ewan McGregor (Obi-Wan Kenobi),
                Temuera Morrison (Jango Fett),
                Frank Oz (Yoda).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                George Lucas y Jonathan Hales
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                David Tattersall
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Ben Burtt y Roger Barton
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Trisha Biggar
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                A medida que la galaxia se precipita hacia la guerra, Anakin Skywalker y Padmé Amidala se ven envueltos
                en un romance prohibido, mientras Obi-Wan Kenobi investiga un intento de asesinato que revela una
                conspiración mayor.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                La película fue la primera en utilizar un 100% de CGI (técnica de imágenes generadas por ordenador) en
                algunos entornos.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal3" class="modalmask">
            <div class="modalbox resize">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode III - Revenge of the Sith (La venganza de los Sith)</h2>
              <img src="../img/peliculas/epi3.webp" alt="epi3">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2005
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                140 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$868 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Anakin Skywalker,
                Padmé Amidala,
                Obi-Wan Kenobi,
                Palpatine,
                Yoda.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Hayden Christensen (Anakin Skywalker),
                Natalie Portman (Padmé Amidala),
                Ewan McGregor (Obi-Wan Kenobi),
                Ian McDiarmid (Palpatine),
                Frank Oz (Yoda).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Mr. Gregory Smith
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Roger Barton y Niven Howie
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Trisha Biggar
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                La galaxia está en guerra. Anakin Skywalker, en su lucha por salvar a Padmé Amidala, se deja seducir por
                el lado oscuro y se convierte en Darth Vader, mientras los Jedi son traicionados y exterminados.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                La transformación de Anakin en Darth Vader es uno de los momentos más icónicos de la saga.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal4" class="modalmask">
            <div class="modalbox movedown">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode IV - A New Hope (Una nueva esperanza)</h2>
              <img src="../img/peliculas/epi4.webp" alt="epi4">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                1977
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                121 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$775 millones (aproximadamente en reestrenos)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Luke Skywalker,
                Han Solo,
                Leia Organa,
                Darth Vader,
                Obi-Wan Kenobi.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Mark Hamill (Luke Skywalker),
                Harrison Ford (Han Solo),
                Carrie Fisher (Leia Organa),
                Alec Guinness (Obi-Wan Kenobi),
                David Prowse (Darth Vader, voz de James Earl Jones).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Gilbert Taylor
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Marcia Lucas
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                John Mollo
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                Un joven granjero, Luke Skywalker, se une a la Rebelión para derrotar al Imperio Galáctico y rescatar a
                la Princesa Leia de las garras de Darth Vader, mientras aprende sobre la Fuerza con Obi-Wan Kenobi.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Fue la primera película en utilizar efectos especiales innovadores y ganó 6 Premios de la Academia.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal5" class="modalmask">
            <div class="modalbox rotate">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode V - The Empire Strikes Back (El imperio contraataca)</h2>
              <img src="../img/peliculas/epi5.webp" alt="epi5">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                1980
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                124 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$538 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Luke Skywalker,
                Han Solo,
                Leia Organa,
                Darth Vader,
                Yoda.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Mark Hamill (Luke Skywalker),
                Harrison Ford (Han Solo),
                Carrie Fisher (Leia Organa),
                Frank Oz (Yoda),
                David Prowse y James Earl Jones (Darth Vader).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                Irvin Kershner
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                Leigh Brackett y Lawrence Kasdan
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Peter Suschitzky
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Paul Hirsch, Marcia Lucas y Richard Chew
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                John Mollo
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                La Rebelión sufre grandes pérdidas ante el Imperio, mientras Luke Skywalker entrena con Yoda para
                convertirse en Jedi, y Han y Leia enfrentan su propio viaje de amor y odio.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Contiene la famosa revelación de que Darth Vader es el padre de Luke Skywalker.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal6" class="modalmask">
            <div class="modalbox resize">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode VI - Return of the Jedi (El retorno del Jedi)</h2>
              <img src="../img/peliculas/epi6.webp" alt="epi6">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                1983
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                132 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$475 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Luke Skywalker,
                Leia Organa,
                Han Solo,
                Darth Vader,
                Palpatine.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Mark Hamill (Luke Skywalker),
                Carrie Fisher (Leia Organa),
                Harrison Ford (Han Solo),
                Ian McDiarmid (Palpatine),
                David Prowse y James Earl Jones (Darth Vader).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                Richard Marquand
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                Lawrence Kasdan y George Lucas
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Daniel Mindel
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Maryann Brandon, George Lucas y Richard Chew
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Stuart Freeborn
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                Luke Skywalker regresa para enfrentar a Darth Vader y el Emperador en una batalla final por la
                libertad de la galaxia, mientras la Rebelión lucha contra la nueva Estrella de la Muerte.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Presentó a los Ewoks, que se convirtieron en íconos de la cultura pop.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal7" class="modalmask">
            <div class="modalbox movedown">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode VII - The Force Awakens (El despertar de la Fuerza)</h2>
              <img src="../img/peliculas/epi7.webp" alt="epi7">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2015
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                138 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$2,068 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Rey,
                Finn,
                Poe Dameron,
                Kylo Ren,
                Han Solo.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Daisy Ridley (Rey),
                John Boyega (Finn),
                Oscar Isaac (Poe Dameron),
                Adam Driver (Kylo Ren),
                Harrison Ford (Han Solo).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                J.J. Abrams
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                J.J. Abrams y Lawrence Kasdan
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Dan Mindel
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Maryann Brandon
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Michael Kaplan
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                La galaxia enfrenta una nueva amenaza con la llegada de la Primera Orden, mientras una nueva
                heroína, Rey, busca a Luke Skywalker y se enfrenta a Kylo Ren, el oscuro líder de la Primera Orden.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Fue la primera película de la saga bajo la dirección de Disney y obtuvo gran aclamación de
                los críticos y fans.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal8" class="modalmask">
            <div class="modalbox rotate">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode VIII - The Last Jedi (Los últimos Jedi)</h2>
              <img src="../img/peliculas/epi8.webp" alt="epi8">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2017
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                152 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$1,332 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Rey,
                Finn,
                Poe Dameron,
                Kylo Ren,
                Leia Organa.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Daisy Ridley (Rey),
                John Boyega (Finn),
                Oscar Isaac (Poe Dameron),
                Adam Driver (Kylo Ren),
                Carrie Fisher (Leia Organa).
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                Rian Johnson
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                Rian Johnson
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Steve Yedlin
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Bob Ducsay
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Michael Kaplan
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                Rey continúa su formación como Jedi bajo la guía de Luke Skywalker, mientras la Resistencia es
                perseguida por la Primera Orden en una carrera contra el tiempo.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                La película fue muy divisiva entre los fans, generando debates intensos sobre su trama y desarrollo de
                personajes.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal9" class="modalmask">
            <div class="modalbox resize">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Episode IX - The Rise of Skywalker (El ascenso de Skywalker)</h2>
              <img src="../img/peliculas/epi9.webp" alt="epi9">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2019
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                142 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                US$1,074 millones (aproximadamente)
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Rey,
                Finn,
                Poe Dameron,
                Kylo Ren,
                Palpatine.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Daisy Ridley (Rey),
                John Boyega (Finn),
                Oscar Isaac (Poe Dameron),
                Adam Driver (Kylo Ren),
                Ian McDiarmid (Palpatine),
                Carrie Fisher (Leia Organa) - utilizando material de archivo.
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                J.J. Abrams
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Lucasfilm
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                J.J. Abrams y Chris Terrio
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                John Williams
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Dan Mindel
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                Maryann Brandon
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Michael Kaplan
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                La Resistencia lucha por la libertad de la galaxia mientras Rey enfrenta su pasado y la amenaza de
                Palpatine, quien ha regresado para intentar conquistar nuevamente la galaxia. Junto a sus amigos, Rey
                descubre la verdad sobre su identidad y su conexión con la Fuerza.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                Fue el cierre de la saga Skywalker y tuvo un enfoque en tratar de reconciliar aspectos de las películas
                anteriores, aunque recibió críticas mixtas por su narrativa.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>
          <div id="modal10" class="modalmask">
            <div class="modalbox movedown">
              <a href="#close" title="Close" class="close-historia">X</a>
              <h2>Rogue One: A Star Wars Story</h2>
              <img src="../img/peliculas/rouge.webp" alt="rouge">
              <p class="modals">
                <strong class="modalsstrong">Año de estreno:</strong>
                <br>
                2016
                <br>
                <br>
                <strong class="modalsstrong">Duración: </strong>
                <br>
                133 minutos
                <br>
                <br>
                <strong class="modalsstrong">Recaudación:</strong>
                <br>
                Alrededor de US$1.056 millones de dólares a nivel mundial.
                <br>
                <br>
                <strong class="modalsstrong">Personajes principales:</strong>
                <br>
                Jyn Erso,
                Cassian Andor,
                K-2SO,
                Chirrut Îmwe,
                Baze Malbus,
                Orson Krennic,
                Bodhi Rook.
                <br>
                <br>
                <strong class="modalsstrong">Reparto:</strong>
                <br>
                Felicity Jones como Jyn Erso,
                Diego Luna como Cassian Andor,
                Alan Tudyk como K-2SO,
                Donnie Yen como Chirrut Îmwe,
                Jian Yang como Baze Malbus,
                Ben Mendelsohn como Orson Krennic,
                Riz Ahmed como Bodhi Rook,
                Forest Whitaker como Saw Guerrera,
                Mads Mikkelsen como Galen Erso.
                <br>
                <br>
                <strong class="modalsstrong">Director: </strong>
                <br>
                Gareth Edwards
                <br>
                <br>
                <strong class="modalsstrong">Producción: </strong>
                <br>
                Kathleen Kennedy, Allison Shearmur, Simon Emanuel.
                <br>
                <br>
                <strong class="modalsstrong">Guion:</strong>
                <br>
                Chris Weitz, Tony Gilroy.
                <br>
                <br>
                <strong class="modalsstrong">Música:</strong>
                <br>
                Michael Giacchino.
                <br>
                <br>
                <strong class="modalsstrong">Fotografía:</strong>
                <br>
                Greig Fraser
                <br>
                <br>
                <strong class="modalsstrong">Montaje:</strong>
                <br>
                John Gilroy, Colleen Halsey, Jodie K. Williams.
                <br>
                <br>
                <strong class="modalsstrong">Vestuario:</strong>
                <br>
                Glyn Dillon.
                <br>
                <br>
                <strong class="modalsstrong">Sinopsis:</strong>
                <br>
                "Rogue One" se sitúa en el contexto de la saga de Star Wars y se centra en un grupo de rebeldes que
                intentan robar los planos de la primera Estrella de la Muerte, la superarma del Imperio Galáctico. Jyn
                Erso, la hija de un científico que fue obligado a trabajar en la construcción de la estación, se une a
                un pequeño grupo de rebeldes liderado por Cassian Andor. Al enfrentarse a fuerzas imperiales y sus
                propios miedos, este equipo poco convencional se embarca en una misión que podría cambiar el rumbo de la
                galaxia.
                <br>
                <br>
                <strong class="modalsstrong">Curiosidades:</strong>
                <br>
                <br>
                <strong class="modalstrong2">1. Primera Película Antológica:</strong> "Rogue One" es la primera película antológica del universo de Star
                Wars, lo que significa que no forma parte de la saga numérica principal.
                <br>
                <strong class="modalstrong2">2. Cameo de personajes:</strong> La película incluye apariciones de personajes clásicos de la saga, incluidos
                Grand Moff Tarkin (con CGI) y Darth Vader.
                <br>
                <strong class="modalstrong2">3. Cambio de director:</strong> Gareth Edwards fue el director principal, pero Tony Gilroy también estuvo
                involucrado en la reescritura del guion y la edición final, lo que generó ciertas controversias sobre la
                dirección de la película.
                <br>
                <strong class="modalstrong2">4. Darker Tone:</strong> Se considera que "Rogue One" tiene un tono más oscuro y maduro en comparación con
                otras películas de Star Wars, reflejando la gravedad de la guerra.
                <br>
                <strong class="modalstrong2">5. Exito Crítico:</strong> La película fue bien recibida tanto por críticos como por fanáticos, alentando a
                Disney a continuar explorando historias en el universo de Star Wars fuera de la saga principal.
              </p>

              <div class="botones-fin2">
                <div class="icono-container">
                  <a href="peliculas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                    </svg></a>

                  <div class="icono-texto">Cerrar</div>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="containerquiz">

          <h2 class="tituloquiz">Quiz de Star Wars</h2>
          <div id="quiz"></div>
          <button class="quizbtn" id="submit">Enviar Respuestas</button>
          <div id="result" class="hidden"></div>
          <button id="restart" class="hidden quizbtn">Reiniciar Quiz</button>

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
          <div class="icono-texto">Inicio</div>

        </div>
        <!--Home -->
        <div class="icono-container">

          <a href="inicio.php"><svg xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFFFFF"
                d="M0 96C0 43 43 0 96 0L384 0l32 0c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0L96 512c-53 0-96-43-96-96L0 96zM64 416c0 17.7 14.3 32 32 32l256 0 0-64L96 384c-17.7 0-32 14.3-32 32zm90.4-234.4l-21.2-21.2c-3 10.1-5.1 20.6-5.1 31.6c0 .2 0 .5 .1 .8s.1 .5 .1 .8L165.2 226c2.5 2.1 3.4 5.8 2.3 8.9c-1.3 3-4.1 5.1-7.5 5.1c-1.9-.1-3.8-.8-5.2-2l-23.6-20.6C142.8 267 186.9 304 240 304s97.3-37 108.9-86.6L325.3 238c-1.4 1.2-3.3 2-5.3 2c-2.2-.1-4.4-1.1-6-2.8c-1.2-1.5-1.9-3.4-2-5.2c.1-2.2 1.1-4.4 2.8-6l37.1-32.5c0-.3 0-.5 .1-.8s.1-.5 .1-.8c0-11-2.1-21.5-5.1-31.6l-21.2 21.2c-3.1 3.1-8.1 3.1-11.3 0s-3.1-8.1 0-11.2l26.4-26.5c-8.2-17-20.5-31.7-35.9-42.6c-2.7-1.9-6.2 1.4-5 4.5c8.5 22.4 3.6 48-13 65.6c-3.2 3.4-3.6 8.9-.9 12.7c9.8 14 12.7 31.9 7.5 48.5c-5.9 19.4-22 34.1-41.9 38.3l-1.4-34.3 12.6 8.6c.6 .4 1.5 .6 2.3 .6c1.5 0 2.7-.8 3.5-2s.6-2.8-.1-4L260 225.4l18-3.6c1.8-.4 3.1-2.1 3.1-4s-1.4-3.5-3.1-3.9l-18-3.7 8.5-14.3c.8-1.2 .9-2.9 .1-4.1s-2-2-3.5-2l-.1 0c-.7 .1-1.5 .3-2.1 .7l-14.1 9.6L244 87.9c-.1-2.2-1.9-3.9-4-3.9s-3.9 1.6-4 3.9l-4.6 110.8-12-8.1c-1.5-1.1-3.6-.9-5 .4s-1.6 3.4-.8 5l8.6 14.3-18 3.7c-1.8 .4-3.1 2-3.1 3.9s1.4 3.6 3.1 4l18 3.8-8.6 14.2c-.2 .6-.5 1.4-.5 2c0 1.1 .5 2.1 1.2 3c.8 .6 1.8 1 2.8 1c.7 0 1.6-.2 2.2-.6l10.4-7.1-1.4 32.8c-19.9-4.1-36-18.9-41.9-38.3c-5.1-16.6-2.2-34.4 7.6-48.5c2.7-3.9 2.3-9.3-.9-12.7c-16.6-17.5-21.6-43.1-13.1-65.5c1.2-3.1-2.3-6.4-5-4.5c-15.3 10.9-27.6 25.6-35.8 42.6l26.4 26.5c3.1 3.1 3.1 8.1 0 11.2s-8.1 3.1-11.2 0z" />
            </svg></a>
          <div class="icono-texto">Home</div>

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
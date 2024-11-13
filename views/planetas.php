<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planetas</title>



  <!-- vincular estilos -->
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/planetas.css">


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

<body>

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

      <div class="articulo3">
        <aside>

        </aside>
      </div>

      <div class="articulo4">
        <header>
          <br>
          <h1>Planetas</h1>
        </header>
      </div>
      <div class="articulo5">
        <main>
          <p>Estos planetas ofrecen una visión general del rico y variado universo de Star Wars, cada uno contribuyendo a la narrativa y la cultura de la galaxia en la que se desarrolla la historia.
          </p>
          <marquee class="jackson" direction="left">
            <img src="https://media.giphy.com/media/EDZP0UCtxiRQQ/giphy.gif" alt="">
          </marquee>
          <div id='planets_container'>
            <div>
              <div class="planetBox">
                <div id="tatooine" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(30, 100%, 40%), hsl(60, 100%, 40%));">TATOOINE</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/tatooine.jpg');"></div>
              </div>
              <a href="#modal1"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="hoth" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(120, 100%, 40%), hsl(200, 100%, 40%));">HOTH</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/hoth.jpg');"></div>
              </div>
              <a href="#modal2"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="jakku" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(150, 100%, 40%), hsl(300, 100%, 40%));">JAKKU</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/jakku.jpg');"></div>
              </div>
              <a href="#modal3"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="geonosis" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(200, 100%, 40%), hsl(0, 100%, 40%));">GEONOSIS</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/geonosis.jpg');"></div>
              </div>
              <a href="#modal4"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="bespin" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(270, 100%, 40%), hsl(220, 100%, 40%));">BESPIN</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/bespin.jpg');"></div>
              </div>
              <a href="#modal5"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="naboo" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(30, 100%, 40%), hsl(60, 70%, 40%));">NABOO</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/naboo.jpg');"></div>
              </div>
              <a href="#modal6"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="crait" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(340, 100%, 40%), hsl(160, 50%, 40%));">CRAIT</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/crait.jpg');"></div>
              </div>
              <a href="#modal7"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="coruscant" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(100, 100%, 40%), hsl(120, 100%, 40%));">CORUSCANT</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/coruscant.jpg');"></div>
              </div>
              <a href="#modal8"><button class="ver-btn">Ver Más</button></a>
            </div>
            <div>
              <div class="planetBox">
                <div id="alderaan" class="planet" style="background: radial-gradient(circle at 33% 66%, hsl(200, 100%, 40%), hsl(240, 100%, 40%));">ALDERAAN</div>
                <div class="info" style="background-image: url('https://starloggers.files.wordpress.com/2020/01/alderaan.jpg');"></div>
              </div>
              <a href="#modal9"><button class="ver-btn">Ver Más</button></a>
            </div>
          </div>

          <div class="historia-modal">
            <div id="modal1" class="modalmask">
              <div class="modalbox movedown">
                <a href="#close" title="Close" class="close-historia">X</a>
                <h2>TATOOINE</h2>
                <img src="../img/jpg/tatooine.jpg" alt="epi1">
                <p class="modals">

                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Tatooine es un planeta ficticio del universo de Star Wars. Es un desierto árido, conocido por su clima caliente y seco, y por ser el hogar de varias especies, incluidas los humanos y los jawas. Tatooine es famoso por ser el lugar de nacimiento de Anakin Skywalker (Darth Vader) y de Luke Skywalker, dos de los personajes más icónicos de la saga.
                  <br>
                  <br>
                  El planeta está caracterizado por sus dos soles, lo que contribuye a su entorno desértico. Muchas escenas importantes de la trilogía original se desarrollan en Tatooine, incluido el inicio de "Una Nueva Esperanza", donde se introduce a Luke Skywalker y a personajes como Obi-Wan Kenobi y el droide C-3PO.
                  <br>
                  <br>
                  Además, Tatooine es conocido por su variada vida social, que incluye cantinas con diversas criaturas y contrabandistas, así como el Mercado de Mos Eisley, famoso por ser "el lugar más ... desagradable de la galaxia". También es un sitio importante para el comercio y el tráfico de bienes en la galaxia.
                  <br>
                  <br>
                  En resumen, Tatooine es un planeta clave en la narrativa de Star Wars, simbolizando tanto el comienzo de la saga como el contraste entre la vida rural y la aventura galáctica.
                  <br>
                  <br>

                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>HOTH</h2>
                <img src="../img/webp/hoth.webp" alt="epi2">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Hoth es un planeta ficticio del universo de Star Wars, conocido por su clima extremadamente frío y su paisaje helado. Como mundo inhóspito, Hoth está cubierto de nieve y hielo, y presenta condiciones climáticas difíciles, incluyendo tormentas de nieve y vientos helados. Su superficie es mayormente desolada, lo que lo convierte en un lugar árido y peligroso para cualquier forma de vida.
                  <br>
                  <br>
                  Este planeta ganó fama por ser el escenario de la batalla de Hoth, que ocurre en "Star Wars: Episodio V - El Imperio Contraataca". En este episodio, la Alianza Rebelde establece su base, conocida como Base Echo, en un sistema de túneles subterráneos. Esta base sirve como un punto estratégico en la lucha contra el Imperio, pero también se convierte en el lugar de un ataque repentino y devastador por parte de las fuerzas imperiales.
                  <br>
                  <br>
                  Hoth también presenta una fauna única. Entre las criaturas que habitan en este helado mundo se encuentran los wampa, grandes depredadores que son temidos por los rebeldes, y los tauntauns, animales empleados como medio de transporte por los soldados rebeldes durante la batalla. Estas especies contribuyen al ambiente hostil del planeta y añaden un elemento de peligro y supervivencia a la historia.
                  <br>
                  <br>
                  La batalla de Hoth es un punto de inflexión en la narrativa de Star Wars, ya que marca el comienzo de la persecución del Imperio hacia la Alianza Rebelde. En este conflicto se desarrolla la historia de los personajes principales, como Luke Skywalker y Han Solo, quienes enfrentan desafíos tanto externos como internos. En resumen, Hoth no solo es un entorno impactante, sino que también juega un papel esencial en el desarrollo de la saga de Star Wars.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>JAKKU</h2>
                <img src="../img/png/jakku.png" alt="epi3">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Jakku es un planeta ficticio en el universo de Star Wars, conocido por su desierto árido y su paisaje inhóspito. Situado en los bordes del espacio conocido, este lugar fue una vez el escenario de una de las batallas más decisivas entre la Alianza Rebelde y el Imperio. Su terreno desértico está repleto de restos de antiguas naves estelares y maquinaria de guerra, que recuerdan los intensos combates que allí tuvieron lugar.
                  <br>
                  <br>
                  El planeta es famoso por su papel en "Star Wars: Episodio VII - El Despertar de la Fuerza". En este episodio, Jakku se convierte en el hogar de Rey, la protagonista de la historia. Su vida en este lugar solitario se ve marcada por la lucha por la supervivencia, ya que se encuentra atrapada en un entorno inhóspito y polvoriento, lleno de desafíos y peligros. La búsqueda de Rey, así como su misterioso pasado, se entrelazan con el destino del planeta.
                  <br>
                  <br>
                  La fauna de Jakku es escasa, adaptándose a las duras condiciones del desierto. A pesar de su clima inhóspito, hay algunas criaturas que logran sobrevivir, como los gigantescos herbívoros que habitan en sus llanuras y aves que surcan el cielo. Las aldeas de chatarra que salpican el paisaje son el hogar de los "chatarra" que buscan tesoros en los restos de antiguas batallas, mientras que la comunidad de scavengers convierte los desechos en recursos valiosos.
                  <br>
                  <br>
                  La importancia de Jakku radica no solo en su geografía, sino también en su historia y en lo que representa en la línea de tiempo de Star Wars. El planeta simboliza el legado de los conflictos anteriores y las consecuencias del dominio imperial. Además, al ser el hogar de Rey, Jakku se convierte en un importante punto de partida para su viaje hacia la autodescubrimiento y la lucha contra el renacer de la oscuridad, haciéndolo un lugar clave en la narrativa de la saga.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>GEONOSIS</h2>
                <img src="../img/webp/geonosis.webp" alt="epi4">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Geonosis es un planeta ficticio en el universo de Star Wars, conocido por su paisaje árido y rocoso, caracterizado por vastas desiertos y colinas escarpadas. Se ha convertido en un lugar clave en la saga, especialmente en "Star Wars: Episodio II - El Ataque de los Clones", donde se desata una de las primeras grandes confrontaciones de las Guerras Clon. Este planeta es el hogar de los Geonosianos, una especie insectoide que vive en la oscuridad de túneles subterráneos, donde han construido vastas ciudades y fábricas.
                  <br>
                  <br>
                  La importancia de Geonosis radica en su papel como centro de producción de droides para la Confederación de Sistemas Independientes. En el episodio mencionado, la República descubre que los Geonosianos están trabajando con el Conde Dooku para crear un ejército de droides, lo que provoca el inicio de las Guerras Clon. La batalla de Geonosis es la primera de estas guerras, y se presenta como un conflicto monumental que involucra tanto a Jedi como a soldados clones, marcando así un punto de inflexión en la historia.
                  <br>
                  <br>
                  El diseño del planeta es notable por su apariencia inconfundible. Geonosis está lleno de formaciones de roca y vastos espacios abiertos, lo que provoca que sea un entorno hostil para muchos personajes. Las condiciones de vida son difíciles, y la atmósfera está llena de polvo, lo que contribuye al aire opresivo del planeta. Sin embargo, esta hostilidad es paralela a la cultura Geonosiana, que es altamente industrializada y tecnológicamente avanzada, a pesar de estar dominada por una mentalidad guerrera.
                  <br>
                  <br>
                  Geonosis también introduce la idea de la construcción de las fuerzas del lado oscuro, con su conexión directa a los eventos que llevan a la creación del Imperio Galáctico. A través de su trabajo con los separatistas y su relación con Darth Sidious, el planeta se convierte en un símbolo de la corrupción y los conflictos que surgen en el transcurso de la saga. En resumen, Geonosis no solo es un paisaje interesante, sino un lugar crucial en el ciclo de guerra y destino que define la historia de Star Wars.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>BESPIN</h2>
                <img src="../img/jpg/bespin.jpg" alt="epi5">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Bespin es un planeta ficticio en el universo de Star Wars, conocido por su atmósfera gaseosa y sus extensas capas de nubes. A diferencia de muchos otros planetas en la saga, Bespin no tiene una superficie sólida, lo que lo convierte en un lugar intrigante y visualmente impresionante. Este planeta es famoso principalmente por la Ciudad Nube, una instalación flotante que actúa como un centro de minería y comercio, extraído el valioso gas tibanna, utilizado en diversas aplicaciones, incluyendo combustible y armamento.
                  <br>
                  <br>
                  La Ciudad Nube es un lugar de lujo y sofisticación, donde se llevan a cabo reuniones importantes y se encuentra la alta sociedad galáctica. Es en esta ciudad donde se desarrolla una de las escenas más icónicas de "Star Wars: Episodio V - El Imperio Contraataca". Aquí, Luke Skywalker enfrenta a Darth Vader en una épica batalla de sables de luz. El entorno visualmente llamativo de la ciudad, junto con sus plataformas flotantes y estructuras llamativas, contribuye a la atmósfera tensa y emocionante de esta confrontación.
                  <br>
                  <br>
                  Bespin también juega un papel crucial en la historia de Han Solo. El famoso contrabandista se encuentra con su antiguo socio, Lando Calrissian, quien ahora es el administrador de la Ciudad Nube. Sin embargo, la reencuentro no es sin complicaciones, ya que calculados planes de Lando para proteger a la ciudad y a sus habitantes lo llevan a colaborar con el Imperio, lo que resulta en la captura de Han y Leia. Este giro de eventos añade una capa de drama personal a la narrativa.
                  <br>
                  <br>
                  En resumen, Bespin representa un choque entre la opulencia y el peligro en el universo de Star Wars. Su atmósfera única y su asociación con personajes centrales como Luke, Han y Lando lo convierten en un escenario memorable en la saga. A través de su diseño visual y sus intrigantes tramas, Bespin refleja los temas de traición, amistad y el conflicto entre el bien y el mal que son característicos de Star Wars.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>NABOO</h2>
                <img src="../img/webp/naboo.webp" alt="epi6">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Naboo es un planeta ficticio en el universo de Star Wars, conocido por su belleza natural, paisajes variados y rica cultura. Con su abundancia de colinas verdes, biomas acuáticos y ciudades arquitectónicamente impresionantes, Naboo se presenta como uno de los planetas más idóneos y estéticamente agradables de la saga. Es hogar de diversas especies, incluidas los humanos, que son predominantemente habitantes del planeta, así como los gungans, una especie anfibia que vive en las regiones acuáticas.
                  <br>
                  <br>
                  La capital de Naboo es Theed, una ciudad famosa por sus palacios y su majestuosa arquitectura inspirada en estilos clásicos. Theed es central en la trama de "Star Wars: Episodio I - La Amenaza Fantasma", donde la reina Padmé Amidala se convierte en uno de los focos del conflicto galáctico. La historia gira en torno a la invasión del planeta por la Federación de Comercio y los esfuerzos de Padmé y otros personajes, como Qui-Gon Jinn y Obi-Wan Kenobi, para liberar su hogar y restaurar la paz.
                  <br>
                  <br>
                  Naboo también es un lugar significativo en la historia de Anakin Skywalker. Es el lugar donde Anakin, un joven esclavo, se encuentra con Padmé Amidala, quien más tarde se convertirá en su amor y madre de sus hijos. La relación entre Anakin y Padmé tiene profundas implicaciones en la saga, ya que su amor se desarrolla en medio de las tensiones políticas y la creciente oscuridad que enfrentan, problemáticas que eventualmente llevan a la caída de Anakin y su transformación en Darth Vader.
                  <br>
                  <br>
                  En resumen, Naboo no solo es un planeta hermoso, sino que también actúa como un símbolo de la política, la cultura y las relaciones personales en el universo de Star Wars. A través de sus personajes, paisajes y conflictos, Naboo se convierte en un escenario importante que refleja tanto la esperanza como la tragedia, con un legado que perdura a lo largo de la saga.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>CRAIT</h2>
                <img src="../img/jpg/crait.jpeg" alt="epi7">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Crait es un planeta ficticio en el universo de Star Wars, conocido por su paisaje único y su relevancia en "Star Wars: Episodio VIII - Los Últimos Jedi". Este mundo se caracteriza por su superficie cubierta de un polvo blanco que, en contraste con las rocas rojas expuestas, crea una apariencia visualmente impactante. Crait es un lugar inhóspito, con un clima frío y un terreno difícil, lo que lo convierte en un refugio interesante para la Resistencia.
                  <br>
                  <br>
                  En la narrativa de "Los Últimos Jedi", Crait se convierte en el escenario de la batalla final que enfrenta a la Resistencia contra las fuerzas de la Primera Orden. La Resistencia establece una base en un antiguo puesto de avanzada de la República, y cuando la Primera Orden lanza un ataque, los personajes principales, incluidos Leia Organa, Finn y Rose Tico, deben enfrentarse a la implacable fuerza del Imperio.
                  <br>
                  <br>
                  Uno de los momentos más memorables de la película ocurre durante la batalla en Crait, donde los soldados de la Resistencia utilizan un nuevo tipo de vehículo llamado "cañón de asalto", mientras que la Primera Orden utiliza sus imponentes caminantes AT-M6. El paisaje nevado se vuelve un campo de batalla vibrante y visualmente cautivador, donde las huellas de las naves de combate se ven resaltadas contra el polvo blanco, simbolizando la lucha desesperada de la Resistencia.
                  <br>
                  <br>
                  Crait también tiene un importante trasfondo histórico. Se menciona que fue un lugar estratégico durante las Guerras Clon y que guardaba importantes secretos, lo que añade un nivel de profundidad a su historia. La atmósfera de desolación y resistencia que rodea a Crait refleja las luchas de la Resistencia en su total, simbolizando la batalla entre la esperanza y la opresión.
                  <br>
                  <br>
                  En resumen, Crait es un planeta que combina un atractivo visual único con un papel crucial en la narrativa de Star Wars. Su importancia en "Los Últimos Jedi" resalta temas de sacrificio, lucha y perseverancia, convirtiéndolo en un lugar memorable dentro de la saga.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>CORUSCANT</h2>
                <img src="../img/webp/coruscant.webp" alt="epi8">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Coruscant es un planeta icónico en el universo de Star Wars, conocido por ser el centro político y cultural de la galaxia. Este mundo urbanizado es completamente cubierto por una inmensa ciudad, lo que lo convierte en un símbolo del avance tecnológico y la urbanización en la galaxia. La ausencia de vida natural, con excepción de algunos parques y zonas verdes, refuerza la idea de un planeta en el que la civilización ha dominado plenamente el paisaje.
                  <br>
                  <br>
                  Coruscant es la sede del Senado Galáctico y de la Orden Jedi, lo que le otorga una gran importancia en la política y la historia de la galaxia. La Ciudad de Coruscant alberga una serie de instituciones clave, incluidas la sede del gobierno galáctico y el Templo Jedi, donde los jóvenes son entrenados para convertirse en Caballeros Jedi. Esta dualidad de un centro de poder político y espiritual es central en la narrativa de Star Wars.
                  <br>
                  <br>
                  En "Star Wars: Episodio I - La Amenaza Fantasma", Coruscant juega un papel importante como el lugar donde se desarrollan decisiones cruciales y acuerdos políticos relacionados con la amenaza de la Federación de Comercio. A medida que la saga avanza, la influencia de Coruscant se ve afectada por el ascenso del Imperio y la caída de la República, así como por la eventual creación de la Nueva República.
                  <br>
                  <br>
                  La representación de Coruscant también destaca temas de corrupción, decadencia y el contraste entre lo visible y lo oculto. A medida que la política se torna más opaca y se introducen personajes como Palpatine, el planeta se convierte en un símbolo de los problemas que surgen de la concentración de poder y el riesgo de la manipulación.
                  <br>
                  <br>
                  En resumen, Coruscant es un planeta de gran relevancia dentro del universo de Star Wars, encarnando el auge y la caída de la civilización, la política y la espiritualidad. Su extensa y compleja estructura urbano-societaria y su papel como centro del conflicto galáctico lo convierten en un escenario significativo en la narrativa de la saga.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
                <h2>ALDERAAN</h2>
                <img src="../img/jpg/alderaan.jpeg" alt="epi9">
                <p class="modals">
                  <strong class="modalsstrong">Caracteristicas</strong>
                  <br>
                  <br>
                  Alderaan es un planeta ficticio en el universo de Star Wars, conocido por su belleza natural, sociedad pacifista y rica historia cultural. Este mundo es famoso por sus paisajes variados, que incluyen montañas, valles, y océanos. Como hogar de gente comprometida con la paz y la diplomacia, Alderaan se presenta como un ideal en contraste con los conflictos bélicos del resto de la galaxia.
                  <br>
                  <br>
                  Alderaan es notable por ser el hogar de la Princesa Leia Organa, uno de los personajes más emblemáticos de la saga. Leia representa los valores de su planeta, que abogan por la resolución pacífica de conflictos y la lucha por la justicia. La historia de Alderaan se convierte en un hito trágico en "Star Wars: Episodio IV - Una Nueva Esperanza", cuando el Imperio Galáctico destruye el planeta utilizando el poder de la Estrella de la Muerte. Esta devastadora acción no solo elimina a millones de habitantes, sino que también se convierte en un símbolo del terror y la opresión del Imperio.
                  <br>
                  <br>
                  El sacrificio de Alderaan resuena a lo largo de la saga, sirviendo como un recordatorio del costo de la guerra y la lucha por la libertad. La destrucción del planeta impulsa a Leia y a los miembros de la Rebelión a luchar con mayor determinación contra el Imperio, destacando la importancia de la resistencia y la libertad.
                  <br>
                  <br>
                  Alderaan representa también un contraste con otros planetas en el universo de Star Wars, donde la guerra y la violencia son comunes. Su legado continúa a lo largo de la saga, convirtiéndose en un símbolo del dolor y la pérdida sufridos durante la lucha contra el Imperio, así como de la esperanza que perdura en los corazones de quienes combatieron por la libertad.
                  <br>
                  <br>
                  En resumen, Alderaan no solo es un planeta hermoso, sino que también es fundamental en la narrativa de Star Wars, sirviendo como un símbolo de paz, sacrificio y resiliencia en el contexto de la lucha galáctica. Su destrucción y el impacto que tuvo en los personajes, especialmente Leia, consolidan su lugar en la historia de la saga.
                  <br>
                  <br>
                </p>

                <div class="botones-fin2">
                  <div class="icono-container">
                    <a href="planetas.php" title="Cerrar" class="close-modal"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#080808" d="M246 315.7l-21.2-31.9c-2.1-3.2-1.7-7.4 1-10.1s6.9-3.1 10.1-1l29.5 19.7c2.1 1.4 4.9 0 5-2.6L279.7 8c.1-4.5 3.8-8 8.3-8s8.1 3.5 8.3 8l9.4 281.9c.1 2.5 2.9 3.9 5 2.6l29.5-19.7c3.2-2.1 7.4-1.7 10.1 1s3.1 6.9 1 10.1L330 315.7c-1.3 1.9-.2 4.5 2 4.9l37.6 7.5c3.7 .7 6.4 4 6.4 7.8s-2.7 7.1-6.4 7.8L332 351.4c-2.2 .4-3.3 3-2 4.9l21.2 31.9c2.1 3.2 1.7 7.4-1 10.1s-6.9 3.1-10.1 1l-26.3-17.6c-2.2-1.4-5.1 .2-5 2.8l2.1 61.5C370.6 435.2 416 382.9 416 320c0-37-15.7-70.4-40.8-93.7c-7-6.5-6.5-18.6 1-24.4C410.1 175.5 432 134.3 432 88c0-16.8-2.9-33-8.2-48c-4.6-13 10.2-30 21.4-22c53.5 38 92.7 94.8 107.8 160.7c.5 2.1-.2 4.3-1.7 5.9l-28.4 28.4c-4 4-1.2 10.9 4.5 10.9l26 0c3.4 0 6.2 2.6 6.3 6c.1 3.3 .2 6.6 .2 10c0 17.5-1.7 34.7-4.8 51.3c-.2 1.2-.9 2.4-1.7 3.3l-46.5 46.5c-4 4-1.2 10.9 4.5 10.9l14.6 0c4.6 0 7.7 4.8 5.7 9C487.2 450.5 394.8 512 288 512S88.8 450.5 44.3 361c-2.1-4.2 1-9 5.7-9l14.6 0c5.7 0 8.6-6.9 4.5-10.9L22.6 294.6c-.9-.9-1.5-2-1.7-3.3C17.7 274.7 16 257.5 16 240c0-3.3 .1-6.7 .2-10c.1-3.4 2.9-6 6.3-6l26 0c5.7 0 8.6-6.9 4.5-10.9L24.6 184.6c-1.5-1.5-2.2-3.8-1.7-5.9C38.1 112.8 77.3 56 130.8 18c11.3-8 26 8.9 21.4 22c-5.3 15-8.2 31.2-8.2 48c0 46.3 21.9 87.5 55.8 113.9c7.5 5.8 8 17.9 1 24.4C175.7 249.6 160 283 160 320c0 62.9 45.4 115.2 105.1 126l2.1-61.5c.1-2.6-2.8-4.2-5-2.8l-26.3 17.6c-3.2 2.1-7.4 1.7-10.1-1s-3.1-6.9-1-10.1L246 356.3c1.3-1.9 .2-4.5-2-4.9l-37.6-7.5c-3.7-.7-6.4-4-6.4-7.8s2.7-7.1 6.4-7.8l37.6-7.5c2.2-.4 3.3-3 2-4.9z" />
                      </svg></a>

                    <div class="icono-texto">Cerrar</div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="content-all">
            <div class="content-carrousel">
              <figure><a href="../img/webp/tatooine.webp" target="_blank"><img
                    src="../img/webp/tatooine.webp" alt="imagen"></a></figure>
              <figure><a href="../img/webp/hoth.webp" target="_blank"><img
                    src="../img/webp/hoth.webp" alt="imagen2"></a></figure>
              <figure><a href="../img/png/jakku.png" target="_blank"><img
                    src="../img/png/jakku.png" alt="imagen3"></a></figure>
              <figure><a href="../img/webp/geonosis.webp" target="_blank"><img src="../img/webp/geonosis.webp"
                    alt="imagen4"></a></figure>
              <figure><a href="../img/jpg/bespin.jpg" target="_blank"><img
                    src="../img/jpg/bespin.jpg" alt="imagen5"></a></figure>
              <figure><a href="../img/webp/naboo.webp" target="_blank"><img
                    src="../img/webp/naboo.webp" alt="imagen6"></a>
              </figure>
              <figure><a href="../img/jpg/crait.jpeg" target="_blank"><img
                    src="../img/jpg/crait.jpeg" alt="imagen7"></a></figure>
              <figure><a href="../img/webp/coruscant.webp" target="_blank"> <img
                    src="../img/webp/coruscant.webp" alt="imagen8"></a></figure>
              <figure><a href="../img/jpg/alderaan.jpeg" target="_blank"><img src="../img/jpg/alderaan.jpeg"
                    alt="imagen9"></a></figure>


            </div>
          </div>

          <!-- svg describing the loader -->
          <svg class="robot" viewBox="0 0 250 250" width="600" height="600">
            <defs>
              <!-- clip to crop the circle and ellipse elements in the body of the droid -->
              <clipPath id="body">
                <circle
                  cx="0"
                  cy="0"
                  r="33.75">
                </circle>
              </clipPath>

              <!-- clip to crop the circle fabricating the reflection -->
              <clipPath id="len">
                <circle
                  cx="0"
                  cy="16.5"
                  r="6.75">
                </circle>
              </clipPath>

              <!-- linear gradient used for the reflection on the lens of the droid
      ! specify a repeating linear gradient with a partial end value (x2, y2) and the appropriate spread method
    -->
              <linearGradient
                id="lens"
                x1="0"
                x2="0.25"
                y1="0"
                y2="0.25"
                spreadMethod="repeat">
                <stop offset="0" stop-color="transparent"></stop>
                <stop offset="0.5" stop-color="transparent"></stop>
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#fff"></stop>
              </linearGradient>

              <!-- dashes replicated to the side of the droid -->
              <path
                id="dash"
                stroke-dasharray="20 4 2"
                d="M 0 0 h 26">
              </path>
              <path
                id="dash--small"
                d="M 0 0 h 8">
              </path>

              <!-- particle replicated to the side of the droid -->
              <!-- the fill and stroke are specified in the <use> element, alongside a transform attribute changing the scale of the element -->
              <path
                id="particle"
                d="M 0 -2 a 5 5 0 0 0 0 4 a 5 5 0 0 0 0 -4 m -2 2 a 5 5 0 0 0 4 0 a 5 5 0 0 0 -4 0">
              </path>
            </defs>

            <!-- group describing the ground -->
            <g
              fill="none"
              stroke="#254256"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
              transform="translate(0 152.5)">
              <!-- translate at the bottom of the robot -->
              <g id="ground" class="ground"><!-- translate this group to give the illusion of movement -->
                <!-- ! include an id to replicate the group through a <use> tag -->
                <path
                  stroke-dasharray="40 6 6 6 120 6 40 6 6"
                  d="M 1.25 0 h 20 a 3 3 0 0 1 6 0 h 160 a 3 3 0 0 1 6 0 h 55.5">
                </path>
                <g transform="translate(0 20)">
                  <path
                    stroke-dasharray="30 15 50"
                    d="M 60 0 h 8 a 3 3 0 0 1 6 0 h 50 a 3 3 0 0 1 6 0 h 10">
                  </path>
                  <g transform="translate(0 20)">
                    <path
                      d="M 85 0 h 15 a 3 3 0 0 1 6 0 h 7">
                    </path>
                  </g>
                </g>
              </g>
              <!-- replicate the ground and position the copy outside of the viewBox
    by translating the group consistently to 250 the ground seems to continue endlessly
    -->
              <use href="#ground" transform="translate(-250 0)"></use>
            </g>

            <!-- group describing the particles
    ! the particles are actually included in two groups, one before the droid, one after it
    by sharing the class name the groups are however moved in unison
  -->
            <g
              fill="none"
              stroke="#254256"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
              transform="translate(86 56)">
              <!-- translate at the top of the robot when leaning toward the left -->
              <!-- add a negative delay to separate the introduction of the dashes -->
              <g>
                <use
                  href="#dash"
                  class="dash"
                  style="animation-delay: -0.75s">
                </use>
                <g transform="translate(10 15)">
                  <use
                    href="#dash"
                    class="dash"
                    style="animation-delay: -0.6s">
                  </use>
                </g>

                <!-- colored particles
        wrap <use> elements in groups to position and change the transform-origin
        add transform="scale()" attributes to the same elements to have particles of different sizes
        wrap particles of the same color in group elements to share the fill and stroke values
      -->
                <g
                  fill="#FF7761"
                  stroke="#FF7761">
                  <g transform="translate(10 7.5)">
                    <use
                      style="animation-delay: -0.8s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.9)">
                    </use>
                  </g>
                  <g transform="translate(80 50)">
                    <use
                      style="animation-delay: -0.5s;"
                      href="#particle"
                      class="particle"
                      transform="scale(1.2)">
                    </use>
                  </g>
                  <g transform="translate(95 40)">
                    <use
                      style="animation-delay: -0.4s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.6)">
                    </use>
                  </g>
                  <g transform="translate(115 58)">
                    <use
                      style="animation-delay: -0.25s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.6)">
                    </use>
                  </g>
                  <g transform="translate(100 65)">
                    <use
                      style="animation-delay: -0.37s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.5)">
                    </use>
                  </g>
                  <g transform="translate(65 78)">
                    <use
                      style="animation-delay: -0.55s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.7)">
                    </use>
                  </g>
                  <g transform="translate(30 90)">
                    <use
                      style="animation-delay: -0.7s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.7)">
                    </use>
                  </g>
                </g>

                <g
                  fill="#FDC33E"
                  stroke="#FDC33E">
                  <g transform="translate(60 18)">
                    <use
                      style="animation-delay: -0.62s;"
                      href="#particle"
                      class="particle"
                      transform="scale(1.1)">
                    </use>
                  </g>
                  <g transform="translate(40 40)">
                    <use
                      style="animation-delay: -0.75s;"
                      href="#particle"
                      class="particle"
                      transform="scale(1)">
                    </use>
                  </g>
                  <g transform="translate(100 40)">
                    <use
                      style="animation-delay: -0.25s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.5)">
                    </use>
                  </g>
                  <g transform="translate(90 52)">
                    <use
                      style="animation-delay: -0.34s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.85)">
                    </use>
                  </g>
                  <g transform="translate(65 68)">
                    <use
                      style="animation-delay: -0.55s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.6)">
                    </use>
                  </g>
                </g>

                <g
                  fill="#449AAB"
                  stroke="#449AAB">
                  <g transform="translate(20 25)">
                    <use
                      style="animation-delay: -0.8s;"
                      href="#particle"
                      class="particle"
                      transform="scale(1.3)">
                    </use>
                  </g>
                </g>
                <g
                  fill="#39B4C1"
                  stroke="#39B4C1">
                  <g transform="translate(28 12)">
                    <use
                      style="animation-delay: -0.88s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.8)">
                    </use>
                  </g>
                  <g transform="translate(46 58)">
                    <use
                      style="animation-delay: -0.66s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.75)">
                    </use>
                  </g>
                  <g transform="translate(30 80)">
                    <use
                      style="animation-delay: -0.74s;"
                      href="#particle"
                      class="particle"
                      transform="scale(0.75)">
                    </use>
                  </g>
                </g>
              </g>
            </g>

            <!-- graphic describing bb-8
    bb-8 occupies in a 70x100 rectangle
    70x100 plus the 2.5 given by the width of the stroke
  -->

            <!-- translate the graphic half the stroke size, to work in a 70x100 box
    the values cascade to the nested elements, and are overwritten where needed
  -->
            <g
              fill="#EBF2FB"
              stroke="#254256"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
              transform="translate(1.25 1.25)">
              <!-- translate 100 (125 to center, -25 to offset the imbalance introduced by the translation) left and 50 down -->
              <g transform="translate(100 50)">
                <!-- include group elements to move the transform-origin at the bottom of the graphic -->
                <g transform="translate(0 65)">
                  <g class="bb8-base" transform="translate(0 0) rotate(-40)"><!-- translate and rotate this group to have the droid lean from the center -->
                    <g transform="translate(0 -65)">
                      <!-- body -->
                      <g transform="translate(0 65)">
                        <g class="bb8-center"><!-- rotate this group to have the body rotate from its center -->
                          <circle
                            cx="0"
                            cy="0"
                            r="35">
                          </circle>
                          <!-- apply the clip on the elements inside the body -->
                          <g clip-path="url(#body)">
                            <!-- line connecting the center of the circle and ellipse elements -->
                            <path
                              fill="none"
                              d="M -15 -25 L 35 0 L -5 28 z">
                            </path>
                            <!-- for the circle and larger ellipse specify two copies, one with a smaller radius to create a donut shape -->
                            <circle
                              fill="#FEC140"
                              cx="-15"
                              cy="-25"
                              r="22">
                            </circle>
                            <circle
                              cx="-15"
                              cy="-25"
                              r="9">
                            </circle>

                            <ellipse
                              fill="#FEC140"
                              cx="35"
                              cy="0"
                              ry="30"
                              rx="10">
                            </ellipse>

                            <ellipse
                              fill="#FEC140"
                              cx="-5"
                              cy="28"
                              rx="20"
                              ry="18">
                            </ellipse>
                            <ellipse
                              cx="-5"
                              cy="28"
                              rx="8"
                              ry="7.2">
                            </ellipse>
                            <!-- dots included sparingly between the circle and ellipse elements -->
                            <circle
                              fill="#254256"
                              stroke="none"
                              cx="7"
                              cy="1"
                              r="2">
                            </circle>
                            <circle
                              fill="#254256"
                              stroke="none"
                              cx="-22"
                              cy="4.5"
                              r="2">
                            </circle>
                            <!-- above the elements fabricating the body include two arcs to create a shadow -->
                            <g stroke="none" fill="#254256" opacity="0.2">
                              <path
                                d="M -45 0 a 45 45 0 0 1 90 0 a 55 55 0 0 0 -90 0">
                              </path>
                              <path
                                transform="rotate(-15)"
                                d="M -35 0 a 35 35 0 0 0 70 0 a 37 37 0 0 1 -70 0">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                      <!-- head -->
                      <g>
                        <path
                          d="M -29 29 l 6 8 h 46 l 6 -8 a 29 29 0 0 0 -58 0">
                        </path>
                        <!-- above the contour of the head include path elements to fabricate the presence of a light source
                          semi transparent #FFF and #254256 sections covering part of the droid's head
                          -->
                        <g stroke="none">
                          <path
                            opacity="0.85"
                            fill="#fff"
                            d="M 0 1.25 a 27.75 27.75 0 0 0 -27.75 27.25 h 5 a 27.5 27.5 0 0 1 22.75 -27.25">
                          </path>
                          <path
                            opacity="0.15"
                            fill="#254256"
                            d="M 0 1.25 a 27.75 27.75 0 0 1 27.75 27.25 h -5 a 27.5 27.5 0 0 0 -22.75 -27.25">
                          </path>
                          <path
                            opacity="0.25"
                            fill="#254256"
                            d="M -27.75 28.5 l 6 8 h 43.5 l 6 -8 h -15.25 q -5 0 -5 -10 h -15 q 0 10 -5 10">
                          </path>
                        </g>
                        <!-- for the lens include a copy of the circle using the gradient fabricating the reflection -->
                        <circle
                          cx="0"
                          cy="16.5"
                          r="8"
                          fill="#295A6E">
                        </circle>
                        <!-- apply a clip path on the lens' reflection to crop the circle as it translates outside of the lens itself -->
                        <g clip-path="url(#len)">
                          <g class="reflection"><!-- translate this group to move the reflection in and out of sight -->
                            <circle
                              cx="0"
                              cy="16.5"
                              r="8"
                              fill="url(#lens)"
                              opacity="0.1">
                            </circle>
                          </g>
                        </g>

                        <!-- smaller circle for the smaller lens -->
                        <circle
                          cx="17"
                          cy="24"
                          r="3"
                          stroke="none"
                          fill="#254256">
                        </circle>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>

            <!-- group describing the dashes above bb-8 -->
            <g
              fill="none"
              stroke="#254256"
              stroke-width="2.5"
              stroke-linecap="round"
              stroke-linejoin="round"
              transform="translate(102 77)"><!-- translate at the top of the robot when leaning toward the left -->
              <g>
                <!-- animate the dashes like the larger counterpart -->
                <use
                  class="dash"
                  href="#dash--small"
                  style="animation-delay: -0.56s">
                </use>
                <g transform="translate(28 47)">
                  <use
                    class="dash"
                    href="#dash--small"
                    style="animation-delay: -0.4s">
                  </use>
                  <g transform="translate(5 5)">
                    <use
                      class="dash"
                      href="#dash--small"
                      style="animation-delay: -0.34s">
                    </use>
                    <g transform="translate(13 0)">
                      <use
                        class="dash"
                        stroke-dasharray="3 5"
                        href="#dash--small"
                        style="animation-delay: -0.3s">
                      </use>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </svg>

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




</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personajes</title>



  <!-- vincular estilos -->
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/personajes.css">


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
          <li><a href="planetas.php" target="_self">Planetas</a></li>
          <li><a href="galeria.php" target="_self">Galeria</a></li>
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
      <br>
      <header>
        <h1>Personajes</h1>
      </header>
    </div>
    <div class="articulo5">
      <main>

        <p>Los personajes de Star Wars incluyen figuras emblemáticas como Darth Vader, Anakin Skywalker, Luke Skywalker,
          Princesa Leia, Han Solo, Chewbacca, R2-D2, C-3PO y Yoda. También hay personajes secundarios significativos
          como Aayla Secura, Ahsoka Tano, y Mara Jade Skywalker. Cada uno de estos personajes tiene una historia rica y
          conexiones profundas dentro del universo de Star Wars.
        </p>
        
        <div class="cuerpopersonajes">

          <div class="filtros">
            <form action="#">
              <h2>Filtros</h2>
              <fieldset>
                <legend>Facciones</legend>
                <div class="filtros2">
                  <div class="filtro-item">
                    <label for="republica">La República Galáctica</label>
                    <input type="checkbox" id="republica" name="faccion"
                      onchange="redirigirSiSeleccionado('republica')">
                  </div>

                  <div class="filtro-item">
                    <label for="imperio">El Imperio Galáctico</label>
                    <input type="checkbox" id="imperio" name="faccion" onchange="redirigirSiSeleccionado('imperio')">
                  </div>

                  <div class="filtro-item">
                    <label for="alianza">La Alianza Rebelde</label>
                    <input type="checkbox" id="alianza" name="faccion" onchange="redirigirSiSeleccionado('alianza')">
                  </div>

                  <div class="filtro-item">
                    <label for="orden-jedi">La Orden Jedi</label>
                    <input type="checkbox" id="orden-jedi" name="faccion"
                      onchange="redirigirSiSeleccionado('orden-jedi')">
                  </div>

                  <div class="filtro-item">
                    <label for="sith">Los Sith</label>
                    <input type="checkbox" id="sith" name="faccion" onchange="redirigirSiSeleccionado('sith')">
                  </div>

                  <div class="filtro-item">
                    <label for="caballeros">Los Caballeros de Ren</label>
                    <input type="checkbox" id="caballeros" name="faccion"
                      onchange="redirigirSiSeleccionado('caballeros')">
                  </div>

                  <div class="filtro-item">
                    <label for="resistencia">La Resistencia</label>
                    <input type="checkbox" id="resistencia" name="faccion"
                      onchange="redirigirSiSeleccionado('resistencia')">
                  </div>

                  <div class="filtro-item">
                    <label for="primera-orden">La Primera Orden</label>
                    <input type="checkbox" id="primera-orden" name="faccion"
                      onchange="redirigirSiSeleccionado('primera-orden')">
                  </div>
                </div>
              </fieldset>
            </form>
          </div>

          <div class="wrapper">


            <div class="card">

              <h2 class="vermastitulo">Darth Vader</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/webp/dark6.webp)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/dark6-fotor-bg-remover-20240911103438.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="darthvader.php" target="_self">Ver más</a></h3>
              </div>
            </div>


            <div class="card">
              <h2 class="vermastitulo">Yoda</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/webp/yoda.webp)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/Yoda-fotor-bg-remover-20240911104135.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="yoda.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Darth Maul</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/dark-maul.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/dark-maul-fotor-bg-remover-20240911112150.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="darthmaul.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Palpatine</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/emperador.jpg)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/Emperor_Palpatine_GA-fotor-bg-remover-20240911161957.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="palpatine.php" target="_self">Ver más</a></h3>
              </div>
            </div>


            <div class="card">
              <h2 class="vermastitulo">C-3PO</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/c-3po.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/c-3po-fotor-bg-remover-20240911111039.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="c3po.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Luke Skywalker</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/luke.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/LukeSkywalker-fotor-bg-remover-2024091116553.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="luke.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">R2-D2</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/r2-d2-fondo.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/r2-d2-fotor-bg-remover-20240911164931.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="r2d2.php" target="_self">Ver más</a></h3>
              </div>
            </div>


            <div class="card">
              <h2 class="vermastitulo">Leia Organa</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/leia-star-wars-8-1532775543.jpg)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/leia-star-wars-8-1532775543-fotor-bg-remover-2024091117453.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="leia.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Han Solo</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/handsolo.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/handsolo-fotor-bg-remover-20240911171921.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="handsolo.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Obi-Wan Kenobi</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/png/obi-wan-kenobi-tv-series.png)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/obi-wan-kenobi-tv-series-fotor-bg-remover-20240911173258.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="obi.php" target="_self">Ver más</a></h3>
              </div>
            </div>


            <div class="card">
              <h2 class="vermastitulo">AhsokaTano</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/webp/AhsokaTano.webp)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/Ahsoka-Tano-AG-2023-fotor-bg-remover-20240911174548.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="ahsokatano.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">
              <h2 class="vermastitulo">Chewbacca</h2>
              <div class="imgContainer" style="--imgUrl: url(../img/jpg/chewbacca.jpg)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/life-sized-chewbacca-statue-figure-1-fotor-bg-remover-20240911175322.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="chewbacca.php" target="_self">Ver más</a></h3>
              </div>
            </div>

            <div class="card">

              <h2 class="vermastitulo">Anakin Skywalker</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/webp/Anakin_Skywalker_RotS.webp)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/anakin44-fotor-bg-remover-202409258543.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="anakin.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Aayla Secura</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/aayla.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/aayla-fotor-bg-remover-20240924141530.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="aayla.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Mara Jade Skywalker</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/sw-mara-jade.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/sw-mara-jade-fotor-bg-remover-20240924142035.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="mara.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Mace Windu</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/mace.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/mace-fotor-bg-remover-20240924143351.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="mace.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Jabba el Hutt</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/jabba2.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/jabba2-fotor-bg-remover-20240924164527.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="jabba.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Bib Fortuna</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/big.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/big-fotor-bg-remover-20240924165314.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="bib.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Admiral Ackbar</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/admiral.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/admiral2-fotor-bg-remover-20240924173434.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="admiral.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Qui-Gon Jinn</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/QuiGon.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/qui33-fotor-bg-remover-20240924181242.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="qui.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Darth Bane</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/darthbane34.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/darthbane34-fotor-bg-remover-20240924182758.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="bane.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Grand Moff Tarkin</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/grand_moff_tarkin.jpg)"></div>
              <div class="img"
                style="--pngImgUrl: url(../img/png/grand_moff_tarkin-fotor-bg-remover-20240924173858.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="grand.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Conde Dooku</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/dooku.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/dooku2-fotor-bg-remover-2024092419149.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="conde.php" target="_self">Ver más</a></h3>
              </div>
            </div>
            <div class="card">

              <h2 class="vermastitulo">Wicket W. Warrick</h2>

              <div class="imgContainer" style="--imgUrl: url(../img/jpg/Wicket3.jpg)"></div>
              <div class="img" style="--pngImgUrl: url(../img/png/Wicket3-fotor-bg-remover-20240924172924.png)">
                <div class="overLayer"></div>
              </div>
              <div class="vermas">
                <!-- Asegúrate de que el h3 esté fuera de cualquier contenedor flotante u otros estilos que afecten su posición -->
                <h3><a href="wicket.php" target="_self">Ver más</a></h3>
              </div>
            </div>

          </div>

        </div>
        
        <h2 class="memo2">Memorama de Personajes de Star Wars</h2>
        <div class="game-container" id="gameContainer"></div>
        <div id="info">
          <p id="pairsCounter">Pares encontrados: 0</p>
          <button class="ver-btn" id="resetButton">Reiniciar Juego</button>
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

 
  <script src="../js/personajes.js"></script>
  <script src="../js/index.js"></script>
</body>

</html>
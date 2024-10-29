<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>



  <!-- vincular estilos -->
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/desplega.css">


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
    </div>
    <div class="articulo3">
      <aside>

      </aside>
    </div>

    <div class="articulo4">
      <header>
        <h1>inicio</h1>
      </header>
    </div>
    <div class="articulo5">
      <main>

        <p>¡Bienvenidos a la galaxia de Star Wars! Te presentamos nuestra increíble app, un viaje interactivo por el
          universo que enciende la imaginación de millones. Aquí, los fans de todas las edades pueden explorar una vasta
          colección de personajes icónicos, desde los valientes Jedi hasta los temibles Sith, cada uno con su propia
          historia y habilidades únicas, naves, sables de luz y grandes peliculas.
          Con nuestra app, la aventura nunca termina. ¡Que la Fuerza te acompañe en cada clic!
        </p>



        <h2 class="animate__animated animate__rubberBand animate__repeat-2	animate__delay-5s">Buscador</h2>
        <form id="miFormulario" action="buscar.php" method="GET">  
    <div class="buscadorinicio">  
        <select name="tipo" id="tipoBusqueda" required>  
            <option value="">Seleccionar tipo de búsqueda</option>  
            <option value="peliculas">Películas</option>  
            <option value="sables">Sables</option>  
            <option value="personajes">Personajes</option>  
        </select>  
        <button class="btnbuscar" type="submit">Buscar 🔍</button>  
        <input type="text" placeholder="Buscar en la Galaxia" id="buscarInput" name="keywords" required>  
        <button type="reset" class="btnborrar" id="btnBorrar">Borrar 🗑️</button>  
    </div>  
</form>
         
 

        <div id="alertMessage" class="alertMessage2">Ingrese la búsqueda deseada de acuerdo a la temática de personajes, peliculas y sables.</div>
        <br>
        <br>
        <h2>Elige la sección de tu preferencia</h2>


        <div>
          <h2>Personajes</h2>
          <br>
          <br>
          <p>En el universo de Star Wars, los personajes son clave para la narrativa. Luke Skywalker se convierte en un héroe Jedi, la princesa Leia lucha por la libertad, y Han Solo aporta astucia. Rey y Kylo Ren representan la lucha entre el lado luminoso y oscuro.
          </p>
          <br>
          <br>
          <div class='itemdesplega'>
            <div class='item__image'>
              <div class='image-switch__outer'>
                <div class='image-switch__inner'>
                  <img src='../img/jpg/star-war.jpg'>
                </div>
              </div>
            </div>
            <div class='item__description'>
              <div class='description-switch__outer'>
                <div class='description-switch__inner'>
                  <a href='personajes.php' target='_self'>
                    <p>Ver más</p>
                    <div class='item__action-arrow'>
                      <i class='far fa-arrow-alt-circle-right'></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class='flap level0'>
              <div class='flap level1 flip-right'>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-left'></div>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-up'>
                      <div class='flap level5 flip-right'>
                        <div class='flap level6 flip-left'></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-up'></div>
                    <div class='flap level5 flip-down'>
                      <div class='flap level6 flip-left'>
                        <div class='flap level7 flip-up'>
                          <div class='flap level8 flip-left'></div>
                          <div class='flap level8 flip-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='flap level1 flip-left'>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-left'>
                        <div class='flap level6 flip-right'>
                          <div class='flap level7 flip-up'>
                            <div class='flap level8--alt flip-right'></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-up'></div>
                    </div>
                    <div class='flap level5 flip-up'>
                      <div class='flap level6 flip-right'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='item__hover-icon'>
              <div class='icon-switch__outer'>
                <div class='icon-switch__inner'>
                  <i class='fas fa-robot'></i>
                </div>
              </div>

            </div>

          </div>
          <p class="iconosparra">Ver <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFD43B" d="M128 40c0-22.1 17.9-40 40-40s40 17.9 40 40l0 148.2c8.5-7.6 19.7-12.2 32-12.2c20.6 0 38.2 13 45 31.2c8.8-9.3 21.2-15.2 35-15.2c25.3 0 46 19.5 47.9 44.3c8.5-7.7 19.8-12.3 32.1-12.3c26.5 0 48 21.5 48 48l0 48 0 16 0 48c0 70.7-57.3 128-128 128l-16 0-64 0-.1 0-5.2 0c-5 0-9.9-.3-14.7-1c-55.3-5.6-106.2-34-140-79L8 336c-13.3-17.7-9.7-42.7 8-56s42.7-9.7 56 8l56 74.7L128 40zM240 304c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96zm48-16c-8.8 0-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96c0-8.8-7.2-16-16-16zm80 16c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96z" />
            </svg></p>
        </div>
        <div>
          <h2>Naves</h2>
          <br>
          <br>
          <p>Las naves de Star Wars son íconos del universo galáctico. El Halcón Milenario es famoso por su velocidad, mientras que la TIE Fighter representa la autoridad imperial. El X-Wing, caza de la Rebelión, destaca por su versatilidad en batalla.
          </p>
          <br>
          <br>
          <div class='itemdesplega'>
            <div class='item__image'>
              <div class='image-switch__outer'>
                <div class='image-switch__inner'>
                  <img src='../img/naves/Halcón_Milenario.jpg'>
                </div>
              </div>
            </div>
            <div class='item__description'>
              <div class='description-switch__outer'>
                <div class='description-switch__inner'>
                  <a href='naves.php' target='_self'>
                    <p>Ver más</p>
                    <div class='item__action-arrow'>
                      <i class='far fa-arrow-alt-circle-right'></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class='flap level0'>
              <div class='flap level1 flip-right'>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-left'></div>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-up'>
                      <div class='flap level5 flip-right'>
                        <div class='flap level6 flip-left'></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-up'></div>
                    <div class='flap level5 flip-down'>
                      <div class='flap level6 flip-left'>
                        <div class='flap level7 flip-up'>
                          <div class='flap level8 flip-left'></div>
                          <div class='flap level8 flip-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='flap level1 flip-left'>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-left'>
                        <div class='flap level6 flip-right'>
                          <div class='flap level7 flip-up'>
                            <div class='flap level8--alt flip-right'></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-up'></div>
                    </div>
                    <div class='flap level5 flip-up'>
                      <div class='flap level6 flip-right'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='item__hover-icon'>
              <div class='icon-switch__outer'>
                <div class='icon-switch__inner'>
                  <i class='fas fa-rocket'></i>
                </div>
              </div>

            </div>

          </div>
          <p class="iconosparra">Ver <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFD43B" d="M128 40c0-22.1 17.9-40 40-40s40 17.9 40 40l0 148.2c8.5-7.6 19.7-12.2 32-12.2c20.6 0 38.2 13 45 31.2c8.8-9.3 21.2-15.2 35-15.2c25.3 0 46 19.5 47.9 44.3c8.5-7.7 19.8-12.3 32.1-12.3c26.5 0 48 21.5 48 48l0 48 0 16 0 48c0 70.7-57.3 128-128 128l-16 0-64 0-.1 0-5.2 0c-5 0-9.9-.3-14.7-1c-55.3-5.6-106.2-34-140-79L8 336c-13.3-17.7-9.7-42.7 8-56s42.7-9.7 56 8l56 74.7L128 40zM240 304c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96zm48-16c-8.8 0-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96c0-8.8-7.2-16-16-16zm80 16c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96z" />
            </svg></p>
        </div>
        <div>
          <h2>Sables</h2>
          <br>
          <br>
          <p>Los sables de luz son icónicos en Star Wars, representando el espíritu de Jedi y Sith. Con hojas brillantes, los Jedi utilizan colores azul y verde, mientras que los Sith empuñan sables rojos, simbolizando su ira y sed de poder.
          </p>
          <br>
          <br>
          <div class='itemdesplega'>
            <div class='item__image'>
              <div class='image-switch__outer'>
                <div class='image-switch__inner'>
                  <img src='../img/webp/sables.webp'>
                </div>
              </div>
            </div>
            <div class='item__description'>
              <div class='description-switch__outer'>
                <div class='description-switch__inner'>
                  <a href='sables.php' target='_self'>
                    <p>Ver más</p>
                    <div class='item__action-arrow'>
                      <i class='far fa-arrow-alt-circle-right'></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class='flap level0'>
              <div class='flap level1 flip-right'>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-left'></div>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-up'>
                      <div class='flap level5 flip-right'>
                        <div class='flap level6 flip-left'></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-up'></div>
                    <div class='flap level5 flip-down'>
                      <div class='flap level6 flip-left'>
                        <div class='flap level7 flip-up'>
                          <div class='flap level8 flip-left'></div>
                          <div class='flap level8 flip-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='flap level1 flip-left'>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-left'>
                        <div class='flap level6 flip-right'>
                          <div class='flap level7 flip-up'>
                            <div class='flap level8--alt flip-right'></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-up'></div>
                    </div>
                    <div class='flap level5 flip-up'>
                      <div class='flap level6 flip-right'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='item__hover-icon'>
              <div class='icon-switch__outer'>
                <div class='icon-switch__inner'>
                  <i class='fas fa-thermometer'></i>

                </div>
              </div>

            </div>

          </div>
          <p class="iconosparra">Ver <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFD43B" d="M128 40c0-22.1 17.9-40 40-40s40 17.9 40 40l0 148.2c8.5-7.6 19.7-12.2 32-12.2c20.6 0 38.2 13 45 31.2c8.8-9.3 21.2-15.2 35-15.2c25.3 0 46 19.5 47.9 44.3c8.5-7.7 19.8-12.3 32.1-12.3c26.5 0 48 21.5 48 48l0 48 0 16 0 48c0 70.7-57.3 128-128 128l-16 0-64 0-.1 0-5.2 0c-5 0-9.9-.3-14.7-1c-55.3-5.6-106.2-34-140-79L8 336c-13.3-17.7-9.7-42.7 8-56s42.7-9.7 56 8l56 74.7L128 40zM240 304c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96zm48-16c-8.8 0-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96c0-8.8-7.2-16-16-16zm80 16c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96z" />
            </svg></p>
        </div>

        <h2>Peliculas</h2>
        <br>
        <br>
        <p>Las películas de Star Wars, creadas por George Lucas, revolucionaron el cine con historias sobre la lucha entre el bien y el mal, presentando personajes icónicos y una rica narrativa.
        </p>
        <br>
        <br>
        <div>
          <div class='itemdesplega'>
            <div class='item__image'>
              <div class='image-switch__outer'>
                <div class='image-switch__inner'>
                  <img src='../img/jpg/peliculas.jpg'>
                </div>
              </div>
            </div>
            <div class='item__description'>
              <div class='description-switch__outer'>
                <div class='description-switch__inner'>
                  <a href='peliculas.php' target="_self">
                    <p>Ver más</p>
                    <div class='item__action-arrow'>
                      <i class='far fa-arrow-alt-circle-right'></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class='flap level0'>
              <div class='flap level1 flip-right'>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-left'></div>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-up'>
                      <div class='flap level5 flip-right'>
                        <div class='flap level6 flip-left'></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-up'></div>
                    <div class='flap level5 flip-down'>
                      <div class='flap level6 flip-left'>
                        <div class='flap level7 flip-up'>
                          <div class='flap level8 flip-left'></div>
                          <div class='flap level8 flip-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='flap level1 flip-left'>
                <div class='flap level2 flip-up'>
                  <div class='flap level3 flip-left'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-left'>
                        <div class='flap level6 flip-right'>
                          <div class='flap level7 flip-up'>
                            <div class='flap level8--alt flip-right'></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='flap level2 flip-down'>
                  <div class='flap level3 flip-right'>
                    <div class='flap level4 flip-down'>
                      <div class='flap level5 flip-up'></div>
                    </div>
                    <div class='flap level5 flip-up'>
                      <div class='flap level6 flip-right'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='item__hover-icon'>
              <div class='icon-switch__outer'>
                <div class='icon-switch__inner'>
                  <i class='fas fa-film'></i>
                </div>
              </div>

            </div>


          </div>
          <p class="iconosparra">Ver <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#FFD43B" d="M128 40c0-22.1 17.9-40 40-40s40 17.9 40 40l0 148.2c8.5-7.6 19.7-12.2 32-12.2c20.6 0 38.2 13 45 31.2c8.8-9.3 21.2-15.2 35-15.2c25.3 0 46 19.5 47.9 44.3c8.5-7.7 19.8-12.3 32.1-12.3c26.5 0 48 21.5 48 48l0 48 0 16 0 48c0 70.7-57.3 128-128 128l-16 0-64 0-.1 0-5.2 0c-5 0-9.9-.3-14.7-1c-55.3-5.6-106.2-34-140-79L8 336c-13.3-17.7-9.7-42.7 8-56s42.7-9.7 56 8l56 74.7L128 40zM240 304c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96zm48-16c-8.8 0-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96c0-8.8-7.2-16-16-16zm80 16c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 96c0 8.8 7.2 16 16 16s16-7.2 16-16l0-96z" />
            </svg></p>
        </div>


        <!-- SLIDER -->

        <div class="slider">
          <!-- list Items -->
          <div id="slider" class="list">
            <div class="item active">
              <img class="myImage" src="../img/jpg/lyman-hansel-gerona-TVCDj_fFvx8-unsplash.jpg"
                alt="lyman-hansel-gerona-TVCDj_fFvx8-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/rod-long-AcYH9GKvVlo-unsplash.jpg" alt="rod-long-AcYH9GKvVlo-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/brian-mcgowan-ggg_B1MeqQk-unsplash.jpg"
                alt="brian-mcgowan-ggg_B1MeqQk-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/cade-roberts-EpIUbeFrqwQ-unsplash.jpg"
                alt="cade-roberts-EpIUbeFrqwQ-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/carol-kennedy-X5WdN60n6yk-unsplash.jpg"
                alt="carol-kennedy-X5WdN60n6yk-unsplash">

            </div>

            <div class="item">
              <img class="myImage" src="../img/jpg/emmanuel-denier-YiXsjwJKXmo-unsplash.jpg"
                alt="emmanuel-denier-YiXsjwJKXmo-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/rod-long-51zvjVXINvE-unsplash.jpg" alt="rod-long-51zvjVXINvE-unsplash">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/star-war.jpg" alt="star-war">

            </div>
            <div class="item">
              <img class="myImage" src="../img/jpg/universostarwarswebp.jpg" alt="universostarwarswebp">

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
            <div class="item active">
              <img src="../img/jpg/lyman-hansel-gerona-TVCDj_fFvx8-unsplash.jpg">
              <div class="content">
                <!--  <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/rod-long-AcYH9GKvVlo-unsplash.jpg">
              <div class="content">
                <!--  <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/brian-mcgowan-ggg_B1MeqQk-unsplash.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/cade-roberts-EpIUbeFrqwQ-unsplash.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/carol-kennedy-X5WdN60n6yk-unsplash.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/emmanuel-denier-YiXsjwJKXmo-unsplash.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/rod-long-51zvjVXINvE-unsplash.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/star-war.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
            <div class="item">
              <img src="../img/jpg/universostarwarswebp.jpg">
              <div class="content">
                <!-- <h3>Titulo</h3>  -->
                <button class="fullscreen-btn">FullScreen</button>
              </div>
            </div>
          </div>
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



  <script src="../js/index.js"></script>
</body>

</html>
<?php
//incluir las clases

require_once "functions/autoload.php";



$secciones_validas = [
  "index" => [
    "titulo" => "Presentación"
  ],
  "inicio" => [
    "titulo" => "Inicio"
  ],
  "personajes" => [
    "titulo" => "Personajes"
  ],
  "naves" => [
    "titulo" => "Naves"
  ],
  "sables" => [
    "titulo" => "Sables de Luz"
  ],
  "peliculas" => [
    "titulo" => "Peliculas"
  ],
  "creditos" => [
    "titulo" => "Créditos"
  ],
  "personaje" => [
    "titulo" => "Personaje"
  ],
  "personajes" => [
    "titulo" => "Personajes"
  ],
  "alianza" => [
    "titulo" => "Alianza"
  ],
  "caballeros" => [
    "titulo" => "Caballeros"
  ],
  "imperio" => [
    "titulo" => "Imperio"
  ],
  "orden" => [
    "titulo" => "Orden"
  ],
  "primera" => [
    "titulo" => "Primera"
  ],
  "republica" => [
    "titulo" => "República"
  ],
  "resistencia" => [
    "titulo" => "Resistencia"
  ],
  "sith" => [
    "titulo" => "Sith"
  ]

];

$seccion = $_GET['sec'] ?? "presentacion";/* Si la seccion es valida vuelve al inicio El método GET envía la información codificada del usuario en el encabezado de la solicitud HTTP DE forma visible ,Los valores enviados por get van a figurar en la variable superglobal $_GET*/


/* Buscar si existe el indice del array */
if (!array_key_exists($seccion, $secciones_validas)) {
  $vista = "404";
  $titulo = "Error 404, página no encontrada";
} else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presentación</title>



  <!-- vincular estilos -->
  <link rel="stylesheet" href="css/inicio.css">


  <!-- Animated -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- FontAwesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Favicon-->
  <!-- Favicon-->
  <link rel="icon" href="img/ico/icono.ico">

  <!-- font -->
  <link href="https://fonts.cdnfonts.com/css/starjedi-special-edition" rel="stylesheet">



</head>

<body>

  <div class="grid-contenedor">
    <div class="articulo1">

      <main>
        <article class="starwars">  
          <audio id="starWarsAudio" preload="auto">  
              <source src="mp3/STAR WARS Suite for Orchestra (Complete Soundtrack) Orquesta y Coro RTVE.mp3" type="audio/mpeg" />  
              
          </audio>  
      
          <section class="start">  
              <h1>Star <br><p class="h1parrafo">Wars</p></h1>  
              <h2>UNA HISTORIA DE</h2>  
              <h3>CFP-AMDELCO</h3>  
              <span>Presentado por Griselda Leticia Ayala, Damian Trajster y Jorge Daniel Cataldo </span>  
              <div class="contentpresentacion">  
                  <button class="presentacion-btn">Presentación</button>  
                  <a href="views/inicio.php" target="_self"><button class="presentacion-btn">Entrar</button></a>  
              </div>  
          </section>  
          <section class="intro">  
            Hace mucho tiempo, en una galaxia muy,<br> muy lejana...  
        </section>  
          <div class="animation">  
              
      
              <section class="star-wars">  
                  <p class="titlesparrafo">  
                      Un grupo de valientes estudiantes se une para crear una aplicación web que permitirá a los usuarios explorar la galaxia de Star Wars. Enfrentan el desafío de dar vida a una plataforma donde los visitantes serán testigos de la magia de esta creación, viviendo una aventura que restaurará la libertad del conocimiento en la galaxia del entretenimiento.   
                      Los exploradores de está app serán protagonistas de una exquisita travesía, participando en un relato que recobrará
                      la esencia del conocimiento. 
                  </p>  
              </section>  
          </div>  
      </article>

      
  
      </main>

    </div>
  </div>



  <script src="js/inicio.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Naves
    </title>



    <!-- vincular estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/naves.css">

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
                <h1>Naves</h1>
            </header>
        </div>
        <div class="articulo5">
            <main>
                <p>Las naves de Star Wars son íconos de la ciencia ficción, representando la vasta diversidad del
                    universo galáctico. Desde los icónicos cazas TIE y X-wing hasta el legendario Halcón Milenario, cada
                    nave tiene su propia historia y diseño distintivo. Estas naves no solo son vehículos de combate,
                    sino también símbolos de rebelión, exploración y aventura, capturando la imaginación de millones de
                    fanáticos alrededor del mundo.
                </p>
                <div class="gallery">
                    <div class="draggable" data-info="info1" draggable="true">
                        <img src="../img/naves/Halcón_Milenario.jpg" alt="Imagen 1" />
                    </div>
                    <div class="draggable" data-info="info2" draggable="true">
                        <img src="../img/naves/destructorestelar.jpg" alt="Imagen 2" />
                    </div>
                    <div class="draggable" data-info="info3" draggable="true">
                        <img src="../img/naves/cazaestelar.jpg" alt="Imagen 3" />
                    </div>
                    <div class="draggable" data-info="info4" draggable="true">
                        <img src="../img/naves/cazas-tie.webp" alt="Imagen 4" />
                    </div>
                    <div class="draggable" data-info="info5" draggable="true">
                        <img src="../img/naves/tiekylo.jpg" alt="Imagen 5" />
                    </div>
                    <div class="draggable" data-info="info6" draggable="true">
                        <img src="../img/naves/razorcrest.jpg" alt="Imagen 6" />
                    </div>
                    <div class="draggable" data-info="info7" draggable="true">
                        <img src="../img/naves/slave1.webp" alt="Imagen 7" />
                    </div>
                    <div class="draggable" data-info="info8" draggable="true">
                        <img src="../img/naves/interdictor.jpg" alt="Imagen 8" />
                    </div>
                    <div class="draggable" data-info="info9" draggable="true">
                        <img src="../img/naves/MP-Tantive.webp" alt="Imagen 9" />
                    </div>
                    <div class="draggable" data-info="info10" draggable="true">
                        <img src="../img/naves/espiritu.webp" alt="Imagen 10" />
                    </div>
                    <div class="draggable" data-info="info11" draggable="true">
                        <img src="../img/naves/y-wing.jpg" alt="Imagen 11" />
                    </div>
                    <div class="draggable" data-info="info12" draggable="true">
                        <img src="../img/naves/ala-b2.jpg" alt="Imagen 12" />
                    </div>
                    <!-- Agrega más imágenes según sea necesario -->
                </div>
                <h2>Arrastra aquí una imagen</h2>
                <div id="dropZone" class="drop-zone">

                </div>

                <button id="clearButton" class="borrar">Borrar Selección</button>
                <div id="info" class="draggablecuerpoinfo info-hidden">

                    <div id="info1" class="info-block">
                        <div class="containerinfo">
                            <h3><strong>Halcón Milenario</strong></h3>
                            <ul>
                                <li><strong>Sistema de navegación</strong>: HoloNavegador con actualizaciones pirata.
                                </li>
                                <li><strong>Coste</strong>: Aproximadamente 100,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Corellian Engineering Corporation.</li>
                                <li><strong>Especificaciones técnicas</strong>: Hiperimpulsor clase 0.5.</li>
                                <li><strong>Tamaño</strong>: 34.75 metros.</li>
                                <li><strong>Facción</strong>: Alianza Rebelde / Neutro.</li>
                                <li><strong>Tipo</strong>: Carguero ligero.</li>
                                <li><strong>Velocidad</strong>: 0.5 (híper) / 1050 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: 2 cañones láser, torpedos de protones.</li>
                            </ul>
                            <p><strong>Descripción</strong>: La famosa Millennium Falcon es una nave de carga
                                modificada, reconocida por su velocidad y maniobrabilidad excepcionales. Con un diseño
                                distintivo, esta icónica nave es utilizada por Han Solo y Chewbacca. A pesar de su
                                apariencia desgastada, cuenta con avances tecnológicos que la hacen competitiva en
                                combate. Su capacidad para realizar viajes en el hiperespacio con rapidez la convierte
                                en un recurso valioso en la lucha contra el Imperio y los enemigos de la Rebelión.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/Halcón_Milenario.jpg" alt="Imagen1">
                            <img src="../img/naves/Halcón_Milenario-fotor-bg-remover-20240930172554.png" alt="Imagen1">
                        </div>


                    </div>


                    <div id="info2" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Súper Destructor Estelar</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Sistema de navegación estelar con
                                    computadoras de alto rendimiento.</li>
                                <li><strong>Coste</strong>: 150 Millones de créditos Imperiales por Unidad.</li>
                                <li><strong>Fabricante</strong>: Kuat Drive Yards.</li>
                                <li><strong>Especificaciones técnicas</strong>: Motores hiperespaciales y Motores convencionales de hyperspace.</li>
                                <li><strong>Tamaño</strong>: Más de 1,600 metros.</li>
                                <li><strong>Facción</strong>: Imperio Galáctico.</li>
                                <li><strong>Tipo</strong>: Nave capital.</li>
                                <li><strong>Velocidad</strong>: 0.75 (híper) / 60 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Antipersonal y multifuncional.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El X-wing es el caza estelar por excelencia de la Alianza
                                Rebelde, diseñado para el combate y la formación de escuadrones. Su diseño distintivo
                                presenta alas que se extienden en forma de X, lo que le otorga su nombre. Con potencia
                                de fuego superior y velocidad, su capacidad para realizar maniobras ágiles lo convierte
                                en el adversario perfecto contra los cazas TIE del Imperio. Ha sido crucial en varias
                                batallas climáticas en la galaxia, destacando en "La Batalla de Yavin".</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/destructorestelar.jpg" alt="Imagen1">
                            <img src="../img/naves/destructorestelar-fotor-bg-remover-2024093017311.png" alt="Imagen1">
                        </div>
                    </div>



                    <div id="info3" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Caza estelar Ala-X</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado, integrado con el sistema de la
                                    flota.</li>
                                <li><strong>Coste</strong>: 150,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Incom Corporation.</li>
                                <li><strong>Especificaciones técnicas</strong>: Hiperimpulsor clase 1.</li>
                                <li><strong>Tamaño</strong>: 12.5 metros.</li>
                                <li><strong>Facción</strong>: Alianza Rebelde / Nueva República.</li>
                                <li><strong>Tipo</strong>: Caza estelar.</li>
                                <li><strong>Velocidad</strong>: 1.0 (híper) / 1,050 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: 4 blásteres láser, torpedos de protones.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El TIE Fighter, utilizado por el Imperio Galáctico, es
                                conocido por su inconfundible diseño de esferas y alas hexagonales. Aunque es rápido y
                                maniobrable, carece de escudos, lo que lo hace vulnerable en combate. Su función
                                principal es la de interceptor, ataques rápidos y reconocimiento, y es un símbolo del
                                poder del Imperio. La masa de estos cazas en el espacio destaca el autoritarismo y la
                                amenaza que representa el Imperio frente a la Rebelión.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/cazaestelar.jpg" alt="Imagen1">
                            <img src="../img/naves/cazaestelar-fotor-bg-remover-20240930173825.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info4" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Caza estelar TIE</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Básico, sin hiperimpulsor.</li>
                                <li><strong>Coste</strong>: 40,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Sienar Fleet Systems.</li>
                                <li><strong>Especificaciones técnicas</strong>: Dos motores de iones (Twin Ion Engines)</li>
                                <li><strong>Tamaño</strong>: 6.3 metros.</li>
                                <li><strong>Facción</strong>: Imperio Galáctico.</li>
                                <li><strong>Tipo</strong>: Caza estelar.</li>
                                <li><strong>Velocidad</strong>: 1.0 (híper) / 1,200 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Dos blásteres láser.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Destructor Estelar es una de las naves más icónicas del
                                Imperio Galáctico, temido por su tamaño y potencia de fuego. Con una longitud de 1,600
                                metros, es una nave capital que sirve como buque insignia y centro de comando. Está
                                diseñado para intimidar a los enemigos y posee una armada de cazas TIE, tanto para
                                ataques terrestres como espaciales. Su presencia en el espacio denota la fuerza militar
                                del Imperio y su capacidad para controlar la galaxia.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/cazas-tie.webp" alt="Imagen1">
                            <img src="../img/naves/cazas-tie-fotor-bg-remover-20240930174126.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info5" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Silenciador TIE de Kylo Ren</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado, con capacidades de sigilo.</li>
                                <li><strong>Coste</strong>: 200,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Sienar-Jaeger.</li>
                                <li><strong>Especificaciones técnicas</strong>: Capaz de entrar en hiperspacio, con un sistema de hipermotor avanzado.</li>
                                <li><strong>Tamaño</strong>: 14.8 metros.</li>
                                <li><strong>Facción</strong>: Primer Orden.</li>
                                <li><strong>Tipo</strong>: Caza estelar.</li>
                                <li><strong>Velocidad</strong>: 1.0 (híper) / 1,500 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Blásteres de energía, torpedos.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El TIE Interceptor es una versión avanzada del TIE Fighter,
                                ofreciendo mayor velocidad y agilidad. Su diseño aerodinámico y alas en forma de punta
                                lo hacen más letal en combate, permitiéndole enfrentarse a cazas rebeldes con eficacia.
                                Equipado con blásteres de energía y torpedos, es un favorito entre los pilotos del
                                Imperio. Su papel fundamental en la batalla refuerza la imagen del Imperio como un poder
                                militar formidable en la galaxia.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/tiekylo.jpg" alt="Imagen1">
                            <img src="../img/naves/tiekylo-fotor-bg-remover-20240930174527.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info6" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Razor Crest</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado, con múltiples sistemas de
                                    navegación estelar.</li>
                                <li><strong>Coste</strong>: 75,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Crest Shipwrights.</li>
                                <li><strong>Especificaciones técnicas</strong>: Motores hyperspace y motores de subluminal para viajes espaciales y maniobras dentro de la atmósfe</li>
                                <li><strong>Tamaño</strong>: 21 metros.</li>
                                <li><strong>Facción</strong>: Neutro / Cazarrecompensas.</li>
                                <li><strong>Tipo</strong>: Carguero / Transporte.</li>
                                <li><strong>Velocidad</strong>: 0.8 (híper) / 800 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Cañones láser, lanzadores de misiles.</li>
                            </ul>
                            <p><strong>Descripción</strong>: La Razor Crest es una nave de transporte de
                                cazarrecompensas utilizada por Din Djarin en "The Mandalorian". Aunque tiene un aspecto
                                robusto y desgastado, cuenta con tecnología avanzada y capacidades de combate. Sus
                                múltiples compartimientos permiten el transporte de víctimas y bienes, mientras que su
                                sistema de navegación le permite evitar peligros en el espacio. Esta nave emblemática se
                                ha convertido en un símbolo de la independencia y el estilo de vida de los
                                cazarrecompensas.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/razorcrest.jpg" alt="Imagen1">
                            <img src="../img/naves/razorcrest-fotor-bg-remover-20240930174829.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info7" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Slave I</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado, equipada con tecnología de sigilo.
                                </li>
                                <li><strong>Coste</strong>: 200,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Firespray-31.</li>
                                <li><strong>Especificaciones técnicas</strong>: Generalmente operada por un solo piloto (Boba Fett)</li>
                                <li><strong>Tamaño</strong>: 21.5 metros.</li>
                                <li><strong>Facción</strong>: Neutro / Cazarrecompensas.</li>
                                <li><strong>Tipo</strong>: Nave de caza.</li>
                                <li><strong>Velocidad</strong>: 0.6 (híper) / 1,200 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Blásteres láser, misiles.</li>
                            </ul>
                            <p><strong>Descripción</strong>: La Slave I es una nave icónica perteneciente a los
                                cazarrecompensas Jango y Boba Fett. Su diseño distintivo y su capacidad para volar en
                                múltiples orientaciones la hacen única. Equipado con tecnología avanzada de sigilo, es
                                ideal para misiones de infiltración y captura. La potencia de su armamento, que incluye
                                blásteres láser y misiles, la convierte en un formidable oponente en la batalla. Es un
                                símbolo de la astucia y el ingenio de sus pilotos.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/slave1.webp" alt="Imagen1">
                            <img src="../img/naves/slave1-fotor-bg-remover-2024093017522.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info8" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Destructor Estelar Interdictor</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado con tecnología de interdicción.</li>
                                <li><strong>Coste</strong>: 175.000.000 créditos.</li>
                                <li><strong>Fabricante</strong>: Kuat Drive Yards.</li>
                                <li><strong>Especificaciones técnicas</strong>: Sistemas de escudos que protegen la nave de ataques y daños.</li>
                                <li><strong>Tamaño</strong>: 1,600 metros.</li>
                                <li><strong>Facción</strong>: Imperio Galáctico.</li>
                                <li><strong>Tipo</strong>: Nave capital.</li>
                                <li><strong>Velocidad</strong>: 0.75 (híper) / 60 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Cañones Turbo Laser, Cañones de Defensa, Proyectores de Campo Gravitacional.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Destructor Estelar Interdictor es una formidable nave
                                capital utilizada por el Imperio para interrumpir los viajes hiperespaciales de las
                                naves enemigas. Con un diseño similar al del Destructor Estelar convencional, está
                                equipada con generadores de interdicción que generan campos gravitacionales, obligando a
                                las naves a salir del hiperespacio. Su rol clave en las tácticas imperialistas la
                                convierte en un pilar del dominio galáctico, reflejando la estrategia de control militar
                                del Imperio.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/interdictor.jpg" alt="Imagen1">
                            <img src="../img/naves/interdictor-fotor-bg-remover-20240930175435.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info9" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Tantive IV</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Sistema de navegación estelar.</li>
                                <li><strong>Coste</strong>: 100,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Corellian Engineering Corporation.</li>
                                <li><strong>Especificaciones técnicas</strong>: Motores hiperspacial, Motores de subluz</li>
                                <li><strong>Tamaño</strong>: 150 metros.</li>
                                <li><strong>Facción</strong>: Alianza Rebelde.</li>
                                <li><strong>Tipo</strong>: Naves de transporte.</li>
                                <li><strong>Velocidad</strong>: 0.6 (híper) / 800 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Blásteres láser.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Tantive IV es una nave de transporte utilizada por la
                                Alianza Rebelde, famosa por su papel en "Una nueva esperanza". Con un diseño elegante y
                                ligero, es utilizada para misiones de diplomacia y transporte de información esencial.
                                Aunque está equipada para la defensa, su velocidad es su mayor ventaja. La nave
                                simboliza la lucha de la Rebelión y su búsqueda por la libertad en una galaxia dominada
                                por el Imperio, siendo un icono de la resistencia.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/MP-Tantive.webp" alt="Imagen1">
                            <img src="../img/naves/MP-Tantive-fotor-bg-remover-2024093017579.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info10" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>El Fantasma</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Sistema estelar modificado.</li>
                                <li><strong>Coste</strong>: 365.000 créditos imperiales.</li>
                                <li><strong>Fabricante</strong>: Cañón Starfighter.</li>
                                <li><strong>Especificaciones técnicas</strong>: Transporte de la tripulación, actividades de contrabando</li>
                                <li><strong>Tamaño</strong>: 16 metros.</li>
                                <li><strong>Facción</strong>: Alianza Rebelde.</li>
                                <li><strong>Tipo</strong>: Caza estelar.</li>
                                <li><strong>Velocidad</strong>: 1.0 (híper) / 1,000 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Blásteres láser, torpedos.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Fantasma es una nave estelar utilizada por la
                                tripulación de "Star Wars Rebels". Con un diseño distintivo y capacidades de
                                ocultamiento, es multifuncional, sirviendo tanto para combate como para transporte. La
                                nave es un símbolo de la lucha por la libertad y la resistencia contra el Imperio. Con
                                una tripulación diversa de héroes rebeldes, el Fantasma se convierte en un refugio
                                seguro y un punto de partida para misiones audaces en la galaxia.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/espiritu.webp" alt="Imagen1">
                            <img src="../img/naves/espiritu-fotor-bg-remover-202409301841.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info11" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Y-Wing</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Avanzado, integrado.</li>
                                <li><strong>Coste</strong>: 150,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Koensayr Manufacturing.</li>
                                <li><strong>Especificaciones técnicas</strong>: Tripulación 2 (piloto y artillero)</li>
                                <li><strong>Tamaño</strong>: 16.9 metros.</li>
                                <li><strong>Facción</strong>: Alianza Rebelde.</li>
                                <li><strong>Tipo</strong>: Bombardero.</li>
                                <li><strong>Velocidad</strong>: 1.0 (híper) / 1,000 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Cañones láser, torpedos de protones.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Y-Wing es un bombardero estelar muy utilizado por la
                                Alianza Rebelde durante la Guerra Civil Galáctica. Su robustez y capacidad de carga lo
                                hacen ideal para misiones de asalto y bombardeo en combate. Equipado con tecnología
                                avanzada, su diseño es óptimo para la resistencia y el sacrificio. A pesar de ser
                                considerado menos ágil que otros cazas, su fiabilidad y potencia de fuego lo hacen
                                crucial en batallas decisivas, simbolizando el espíritu de lucha de la Rebelión.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/y-wing.jpg" alt="Imagen1">
                            <img src="../img/naves/y-wing-fotor-bg-remover-2024093018647.png" alt="Imagen1">
                        </div>
                    </div>




                    <div id="info12" class="info-block">
                        <div class="containerinfo">

                            <h3><strong>Ala-B</strong></h3>

                            <ul>
                                <li><strong>Sistema de navegación</strong>: Standard de la época.</li>
                                <li><strong>Coste</strong>: 90,000 créditos.</li>
                                <li><strong>Fabricante</strong>: Incom Corporation.</li>
                                <li><strong>Especificaciones técnicas</strong>: Motores hiperspacial, Motores de subluz</li>
                                <li><strong>Tamaño</strong>: 11.5 metros.</li>
                                <li><strong>Facción</strong>: Nueva República.</li>
                                <li><strong>Tipo</strong>: Caza estelar.</li>
                                <li><strong>Velocidad</strong>: 1.7 (híper) / 1,050 km/h (sublumínica).</li>
                                <li><strong>Armamento</strong>: Cañones láser, torpedos de protones.</li>
                            </ul>
                            <p><strong>Descripción</strong>: El Ala-B es un moderno caza estelar utilizado por la Nueva
                                República, diseñado para mejorar las capacidades de combate. Con un diseño ágil, cuenta
                                con un sistema de navegación avanzado y armamento letal, incluyendo cañones láser y
                                torpedos. Usado por pilotos experimentados, combina velocidad y potencia de fuego en un
                                paquete compacto. Esta nave se ha destacado en misiones clave, reflejando la evolución y
                                adaptación de la Nueva República en su lucha por la paz y seguridad en la galaxia.</p>
                        </div>
                        <div class="draggableimagenreal">
                            <img src="../img/naves/ala-b2.jpg" alt="Imagen1">
                            <img src="../img/naves/ala-b2-fotor-bg-remover-20240930181056.png" alt="Imagen1">
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



    <script src="../js/naves.js"></script>
</body>

</html>
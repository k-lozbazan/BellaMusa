
<?php
    $destino="klozbzan@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];

    $contenido="Nombre: " .$nombre . "\nCorreo: " .$correo . "\nTelefono: " .$telefono . "\nMensaje: " . $mensaje;

    mail($destino, "Asunto", $contenido);

    header("Location:index.html");


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Bella Musa | Salon Spa</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->


</head>

<body>
    <header>
        <div class="logo">
        </div>
        <div class="botones">
            <a href="#" class="boton">Inicio</a>
            <a href="#" class="boton">Nosotros</a>
            <a href="#" class="boton">Promociones</a>
            <a href="#" class="boton">Equipo</a>
            <a href="#" class="boton">Noticias</a>
            <a href="#" class="boton">Galería</a>
            <a href="#" class="boton">Contacto</a>
        </div>
        <div class="textos">
            <h1 class="titulo">Bella Musa</h1>
            <h3 class="subtitulo">Salon Spa</h3>

        </div>

        <div class="sesgo-abajo"></div>

    </header>
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Sobre Nosotros</h2>
                <h3 class="slogan">Excelente nivel e tención que te harán sentir como una Bella Musa</h3>
                <p class="parrafo">Nuestros servicios se basan en las últimas alternativas de diseño en peluquería, nuestros peindoslos realizamos con la delicadza de unaobrde arte. Además de nuestros tratamientos para bajar esos kilitos e más que nos deja muchas veces
                    como secuela el embarazo, o quizas por el desarreglo e nuestra alimentación. Pues aquí tenemos la solución con nuestos tramientos utilizando nuevas tecnologías.

                </p>
                <h2 class="slogan">Cavitación, vacuum y radiofrecuencia corporal</h2>
                <p class="parrafo">La cavitación es un proceso de ultrasonido para generar microcavidades (burbujas) que crecen hasta que implosionan o estallan. La longitud de onda de ultrasonido de 36khz remueve de manera segura la grasa localizada mediante la ruptura
                    de la membrana celular y la emulsión y descomposición de las moléculas grasas en grasas mas simples. Una vez emulsionada la grasa se transforma en una sustancia soluble que sera eliminada a través del sistema linfático y las vías urinarias.
                    La cavitación es utilizada en la reducción de la celulitis y en la reducción de grasa localizada y en un tiempo prudencial, acompañada de una dieta adecuada se pueden lograr resultados similares a la liposucción pero sin necesidad
                    de cirugía o pasar por el quirófano. Ayudando a disminuir centímetros de cintura, caderas, muslos, espalda, brazos y abdomen.</p>
                <a href="#" class="boton">Más Información</a>
            </div>
        </section>

        <section class="galeria">

            <!-- <div class="sesgo-arriba"></div> -->

            <div class="imagenes none">
                <img src="/img/peinado-1.jpg" alt="Fotografía de Siluetas 01">
            </div>
            <div class="imagenes">
                <img src="/img/peinado-2.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="/img/edith-1.jpg" alt="">
                <div class="encima">
                    <h2>Bella Musa</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="/img/peinado-7.jpg" alt="">

            </div>
            <div class="imagenes none">
                <img src="/img/peinado-5.jpg" alt="">
            </div>

            <!-- <div class="sesgo-abajo"> </div> -->

        </section>

        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Nuestro Equipo</h2>
                <h3 class="slogan">Conoce a nuestro equipo de trabajo</h3>
                <div class="cards">
                    <div class="card">
                        <img src="/img/foto-5.jpg" alt="">
                        <h4 class="slogan">Carlos Bazán</h4>
                        <p>Comenta aquí</p>
                    </div>
                    <div class="card">
                        <img src="/img/edith-1.jpg" alt="">
                        <h4 class="slogan">Edith Bravo</h4>
                        <p>Administradora del mejor salon de belleza de Huaral</p>
                    </div>
                    <div class="card">
                        <img src="/img/foto_8.jpg" alt="">
                        <h4 class="slogan">Carlos Bazán</h4>
                        <p>Comenta aquí</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="fondo">

            <div class="sesgo-arriba"></div>

            <div class="contenedor">
                <h2 class="titulo-patrocinador">Nuestros clientes</h2>
                <h3 class="subtitulo-patrocinadores">Conoce algunos de nuestros clientes</h3>
                <div class="clientes">
                    <div class="cliente">
                        <img src="/img/Logo Carlos Bazan.png" alt="">
                    </div>
                    <div class="cliente">
                        <img src="/img/Logo Carlos Bazan.png" alt="">
                    </div>
                    <div class="cliente">
                        <img src="/img/Logo Carlos Bazan.png" alt="">
                    </div>
                </div>
                <h3 class="subtitulo-patrocinadores especial">y muchos más clientes</h3>
            </div>

            <div class="sesgo-abajo-unico"></div>

        </section>
    </main>
    <footer>
        <div class="contenedor">

            <div class="footer">
                <!-- <form action="">
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="email" name="" id="" placeholder="Correo">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Ingrese su mensaje"></textarea>
                    <input type="submit" value="Enviar">
                </form> -->

                <div class="container">
                    <form action="enviar.php" method="POST">
                        <h2 class="titulo-footer">Contáctanos</h2>
                        <h3 class="subtitulo-footer">Separa tu cita aquí:</h3>
                        <p class="intro">Agradecemos elinteres por contactarse con nosotros. Si desea recibir mayor información sobre alguno de nuestros servicios, por favor, rellene el siguiente formulario</p>
                        <p>Contestaremos en la brevedad posible.</p>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                                <input type="email" name="correo" placeholder="Ingrese su correo electrónico" required>
                                <input type="text" name="telefono" placeholder="Ingrese sunúmerode teléfono" required>
                                <input type="text" name="empresa" placeholder="Ingreso opcional">
                                <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Escriba aquí su mensaje" required></textarea>
                                <input type="submit" value="Enviar" id="button">
                            </div>
                            <div class="alinear col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <br>
                                <p class="info">¡Deseas probar nuestros servicios? Ponte en cpntacto con nosotros mediante este formulario, y en la brevedad posible estaremos respindiendo tu separacióndecita, dandote así día, fecha y hora de atención para dicho servicio.</p>
                                <img src="/img/5.jpeg" class="img-rounded img-responsive" alt="">
                            </div>
                        </div>
                    </form>


                </div>





            </div>
        </div>
    </footer>
    <div class="pie">
        <h3 class="copyright">Todos los Derechos Reservados SOLUCIONES TI - PWD 2019</h3>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
</body>



</html>
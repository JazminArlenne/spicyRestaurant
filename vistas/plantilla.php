<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spicy Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "resources/head.php"; ?>

</head>

<body style="background: black!important;">
    <header>

        <section>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <img src="resources/img/logo.ico" width="5%" height="5%" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/spicyRestaurant">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?pagina=registro">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Order</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reservacion</a>
                            </li>


                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </section>


        <!--Aqui se encuentra la segunda seccion del header-->
        <section class="segundo-header mt-0" style="width: 100%; height: 340px; background: #ffffff url(resources/img/picante.jpg);  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ background-attachment: fixed; background-size: cover; position: relative;
        ">

        <div class="texto-segundo-header">
            <h1 class="pt-3 mb-5">Spicy Restaurant</h1>
        </div>

        <div class="wave" style=""><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.09,49.83 C219.66,160.36 351.77,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000;"></path></svg></div>

    </section>
    </header>
                <!--Aqui se encuentra el cuerpo del trabajo-->


        

            <!--Aqui se encuentra la primera seccion del header-->
        <?php 
                        if(isset($_GET["pagina"])){

                        if ($_GET["pagina"] == "registro" ||
                                $_GET["pagina"] == "principal" ||
                                $_GET["pagina"] == "ingreso" ||
                                $_GET["pagina"] == "iniciar" ||
                                $_GET["pagina"] == "salir") {

                                include "paginas/".$_GET["pagina"].".php";
                        }
                        else{
                            include "paginas/error404.php";
                        }

                }else{

                        include "paginas/inicio.php";
                }

                 ?>

    <footer class="informacion">

        <div class="wave-final"><svg viewBox="0 0 500 150" preserveAspectRatio="none" 
            ><path d="M0.00,49.98 C206.26,154.44 290.34,-13.31 505.36,71.53 L500.00,0.00 L0.00,0.00 Z"
            style="stroke: none; fill: #000;"></path></svg></div>

            <div class="bloques-informacion">
                <div class="about-us">
                    <h2>About us</h2>
                    <div class="contenido-about-us">
                        <nav class="menu-contenido-about-us">
                            <a href="#">Mision</a>
                            <br>
                            <a href="#">Vision</a>
                            <br>
                            <a href="#">Objetivo</a>
                            <br>
                        </nav>
                    </div>
                </div>

                <div class="location">
                    <h2>¿Donde estamos?</h2>
                    <div class="contenido-location">
                        <p>C/no se donde #000. Santo Domingo. RD</p>
                        <br>
                        <a href="#">Enlace Google Map</a>
                    </div>
                </div>

                <div class="contacto">
                    <h2>Contacto</h2>
                    <div class="contenido-contacto">
                        <nav>
                            <p><strong>Email:</strong> spicyrestaurant@gmail.com</p>
                            <br>
                            <p><strong>Telefono:</strong> 809 111 0987 <strong>ext:</strong>111
                            </nav>
                        </div>
                    </div>

                    <div class="logo-company">
                        <img src="resources/img/logo.ico">
                        <h2>Spicy Restaurant</h2>
                    </div>
                </div> 
        </footer>

    </body>
</html>

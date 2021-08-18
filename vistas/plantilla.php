<?php
session_start();

?>

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
        <section class="container-fluid info">
            <div class="info-direccion float-left">
                <small class="text-muted"><span class=""><i class="fas fa-map-marker-alt"></i></span> C/Santa Luna Esq. 27 feb, Santo Domingo</small>
            </div>

            <div class="info-derecho float-right">
                <small class="text-muted"><span class="info-telefono"><i class="fas fa-phone-alt"></i> 809-55-1111   |</span> <span class="info-horario"><i class="far fa-clock"></i> 9:00 am - 10:00 pm</span></small>       
            </div>
        </section>

        <!--Menu principal-->
        <section>
            <div class="container-fluid logobig">
                <img src="resources/img/logobig.png">
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark menu sticky-top">
                <div class="container-fluid">
                   <!-- <img src="resources/img/logo.ico" width="5%" height="5%" alt="">       -->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav contenido-menu">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/spicyRestaurant">Inicio</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?pagina=menu">Menu</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=reservacion">Reservacion</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?pagina=registro">Cuenta</a>
                            </li>


                        </ul>
                        <!--<form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>-->
                    </div>
                </div>
            </nav>
        </section>


        <!--Aqui se encuentra la segunda seccion del header-->
        <section class="segundo-header mt-0" style="width: 100%; height: 340px; background: #ffffff url(resources/img/picante.jpg);  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ background-attachment: fixed; background-size: cover; position: relative;
        ">

        <div class="texto-segundo-header pt-3 mb-5">
            <!--<h1 class="pt-3 mb-5">Spicy Restaurant</h1>-->
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
                                $_GET["pagina"] == "menu" ||
                                $_GET["pagina"] == "eliminar" ||
                                $_GET["pagina"] == "reservacion" ||
                                $_GET["pagina"] == "ingreso" ||
                                $_GET["pagina"] == "iniciar" ||
                                $_GET["pagina"] == "editar" ||
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

    <footer class="container-fluid m-0 p-0 informacion text-light">

            <div class="wave-final"><svg viewBox="0 0 500 150" preserveAspectRatio="none" 
                ><path d="M0.00,49.98 C206.26,154.44 290.34,-13.31 505.36,71.53 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none; fill: #000;"></path></svg></div>


                <div class="row mt-5 contenido-footer">
                    <div class="col-sm">
                    <img src="resources/img/logobig.png" width="80%" height="40%" style="border-radius:10px ;">

                    <div class="footer-info rounded contenedor-footer">
                        <p><span>Direccion:</span></p>
                        <p>C/santa Luna #23 Santo Domingo</p>
                        <p><span>Telefono:</span> 809-555-1111</p>
                        <p><span>Email:</span> email@spicy.com</p>
                    </div>
                    
                </div>

                <div class="col-sm">
                    <h2>Contactanos</h2>

                    <div class="container rounded pb-3 contenedor-footer">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Antoni Suarez">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <button class="btn btn-outline-light mt-2" type="button" id="button-addon2">Enviar</button>
                        </form>
                    </div>
                       
                </div>
                <div class="col-sm">
                    <h2>Newsletter</h2>

                    <div class="container rounded pb-3 text-white pt-2 contenedor-footer">
                        <p>Unete a nuestro newsletter y recibe correo de las nuevas novedades y promociones que tendremos para ti.</p>
                        <div class="input-group flex-nowrap">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Correo Electronico" aria-label="Correo Electronico" aria-describedby="addon-wrapping">
                          <div class="input-group-append">
                            <button class="btn btn-dark" type="button" id="button-addon2">Button</button>
                          </div>
                        </div>

                        
                    </div>

                </div>
            </div>
            <section class="container-fluid"> 
                <hr>
                <div class="container text-center pb-2">
                    <p ><span><i class="fab fa-creative-commons"></i></span> 2021 - Spicy Restaurant - Jazmin Moron | Politica de Privacidad </p>
                </div>
            </section>
 
        </footer>

    </body>
</html>

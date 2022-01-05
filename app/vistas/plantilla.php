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

<body class="container-fluid p-0" style="background: black!important;">

        <!--Menu principal-->
        <section class="sticky-top container-fluid m-0 p-0" style="background: black!important;">
            <div class=" logobig">
                <img src="resources/img/logobig.png" style="width: 30%;">
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark menu">
                <div class="container-fluid">
                   
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav contenido-menu">
                            
                            <li class="nav-item">
                                <a class="nav-link active hover-3" aria-current="page" href="/">Inicio</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link hover-3" aria-current="page" href="index.php?pagina=menu">Menu</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link hover-3" href="index.php?pagina=reservacion">Reservacion</a>
                            </li>
                            <li class="separador-menu"><span>|</span></li>
                            <li class="nav-item">
                                <a class="nav-link hover-3" href="index.php?pagina=registro">Cuenta</a>
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
        <section class="segundo-header container-fluid m-0 p-0" style=" height: 340px; background: #ffffff url(resources/img/picante.jpg);  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #f56117be, #0b486bdc) url(resources/img/picante.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ background-attachment: fixed; background-size: cover; position: relative;
        ">

            <div class="texto-segundo-header pt-3 mb-5">
                <!--<h1 class="pt-3 mb-5">Spicy Restaurant</h1>-->
            </div>

            <div class="wave" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.09,49.83 C219.66,160.36 351.77,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #000;"></path></svg></div>

        </section>
    
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


            <div class="row container mt-5 contenido-footer">
                <div class="col-sm">
                    <img src="resources/img/logobig.png" width="85%" height="30%" style="border-radius:10px;">

                    <div class="footer-info rounded contenedor-footer">
                        <p><span>Direccion:</span></p>
                        <p>C/santa Luna #23 Santo Domingo</p>
                        <p><span>Telefono:</span> 809-555-1111</p>
                        <p><span>Email:</span> email@spicy.com</p>
                    </div>
                </div>
        
                <div class="col-sm">
                    <h2 class="text-center">Contactanos</h2>

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
                    <h2 class="text-center">Newsletter</h2>

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

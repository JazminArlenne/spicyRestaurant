
<div class="container-fluid">
                <div class="container-fluid pt-5 justify-content-center">
                <h2 class="text-center mt-3 pt-4 mb-4 pb-4  text-white">Hola</h2>

        </div>
                <div class="container">
                        <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET["pagina"])): ?>

                        <?php if ($_GET["pagina"] == "registro"): ?>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                                </li>

                        <?php else: ?>
                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                </li>

                        <?php endif ?>


                        <?php if ($_GET["pagina"] == "ingreso"): ?>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                                </li>

                        <?php else: ?>
                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                </li>

                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "inicio"): ?>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=iniciar">Inicio</a>
                                </li>

                        <?php else: ?>
                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=iniciar">Inicio</a>
                                </li> 

                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "salir"): ?>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                                </li>

                        <?php else: ?>
                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                                </li> 

                        <?php endif ?>

                        <?php else: ?>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                                </li>

                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                </li>

                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=iniciar">Inicio</a>
                                </li> 
                                
                                <li class="nav-item">
                                        <a class="nav-link" href="/spicyRestaurant">Salir</a>
                                </li>

                <?php endif ?>


        <?php 
                        if(isset($_GET["pagina"])){

                        if ($_GET["pagina"] == "registro" ||
                                $_GET["pagina"] == "ingreso" ||
                                $_GET["pagina"] == "inicio" ||
                                $_GET["pagina"] == "salir") {

                                include "paginas/".$_GET["pagina"].".php";
                        }

                }else{

                        include "paginas/iniciar.php";
                }

                 ?>

                        </ul>
                </div>
        </div>

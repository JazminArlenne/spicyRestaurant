<section class="mt-5 pb-5" style="background: black;">

    <div class="container-fluid pt-5 justify-content-center">
        <h2 class="text-center mt-2 pt-4 mb-4 pb-4 text-white">Ingreso</h2>
    </div>

    <div class="container-fluid">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=iniciar">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

            </ul>

        </div>

    </div>


    <!--=================
    Inicio
    ==================-->
    <div class="container-fluid">

        <div class="container rounded d-flex justify-content-center text-center">
            <form class="mt-4 p-4 bg-light rounded" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" name="ingresoEmail">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ingresoEmail">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" name="ingresoPassword">Contrasena</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" class="form-control " id="exampleInputPassword1" name="ingresoPassword">    
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>


                <?php 
                    $ingreso = new controladorFormularios();

                    $ingreso->ctrIngreso();
                    /*
                    
                    echo $registro;*/


                ?>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form> 
        </div>    	
    </div>
</section>
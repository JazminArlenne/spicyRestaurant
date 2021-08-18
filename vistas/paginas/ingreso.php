<section class="pb-5" style="background: black;">

    <h2 class="titulo-algunos-platos">| Iniciar Sesion</h2>


    <div class="container-fluid mt-5">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php?pagina=registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning text-dark" href="index.php?pagina=ingreso">Ingreso</a>
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

                <button type="submit" class="btn btn-warning">Entrar</button>
            </form> 
        </div>    	
    </div>
</section>
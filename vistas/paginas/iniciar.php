<?php 


if(!isset($_SESSION["validarIngreso"])){

        echo '<script> window.location = "index.php?pagina=ingreso"; </script>';
        
        return;
}else{

        if($_SESSION["validarIngreso"] != "ok"){
                echo '<script> window.location = "index.php?pagina=ingreso"; </script>';
                return;
        }
}


$usuarios = controladorFormularios::ctrSeleccionarRegistros(null, null);
/*echo '<pre>';print_r($usuarios); echo '</pre>';*/

?>


<section class="mt-5 pb-5 " style="background: black;">

        <div class="container-fluid pt-5 justify-content-center">
                <h2 class="text-center mt-3 pt-4 mb-4 pb-4  text-white">Inicio</h2>

        </div>


        <div class="container-fluid">
                <div class="container">
                        <ul class="nav nav-justified py-2 nav-pills">
                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=iniciar">Inicio</a>
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

                <div class="container mt-5 bg-white rounded">
                        <table class="table">
                                <thead>
                                        <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Acciones</th>

                                        </tr>
                                </thead>
                                <tbody>

                                        <?php foreach ($usuarios as $key => $value): ?>

                                                <tr>
                                                <td><?php echo ($key + 1); ?></td>
                                
                                                <td><?php echo $value["nombre"] ?></td>
                                                
                                                <td><?php echo $value["email"] ?></td>

                                                <td><?php echo $value["fecha"] ?></td>
      

                                                <td>
                                                        <div class="btn-group">
                                                                <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>"class="btn btn-warning">Editar</a>

                                                                <a class="btn btn-danger">Eliminar</a>
                                                        </div>
                                                </td>
                                        </tr>                                        

                                         <?php endforeach ?>
                                        
                                </tbody>
                        </table>
                </div>    	
        </div>
</section>



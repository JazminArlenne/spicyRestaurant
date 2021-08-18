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


<section class="pb-5 " style="background: black;">

        <h2 class="titulo-algunos-platos">| Inicio</h2>

        <!--=================
        Inicio
        ==================-->
        <div class="container-fluid mt-5">

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
                                                                <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                </svg></a>

                                                                <a href="index.php?pagina=eliminar&id=<?php echo $value["id"]; ?>"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                </svg></a>
                                                        </div>
                                                </td>
                                        </tr>                                        

                                         <?php endforeach ?>
                                        
                                </tbody>
                        </table>
                </div> 

                <a class="btn btn-outline-danger btn-lg ml-5" href="index.php?pagina=salir" style="float: right; margin-right: 94px;">Salir</a>

        </div>
</section>



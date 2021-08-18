<?php 

if (isset($_GET['id'])){

	$item = "id";
	$valor = $_GET['id'];
	$usuario = controladorFormularios::ctrSeleccionarRegistros($item, $valor);
}					
				
?>


<section class="pb-5 " style="background: black;">
	<h2 class="titulo-algunos-platos">| Editar usuario</h2>

		<a class="btn btn-outline-danger btn-lg ml-5" href="index.php?pagina=iniciar" style="float: right; margin-right: 94px;">volver</a>

	
<!--=================
	registro
==================-->
	<div class="container-fluid ">

		<div class="d-flex justify-content-center text-center mt-5">

			<form class="p-4 bg-light rounded" method="post">
				<div class="mb-3">
					
					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-user"></i> 	
                        </span>
                        
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nombre" name="actualizarNombre" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre">
                    </div>

				</div>
				<div class="mb-3">

					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-envelope"></i>
                        </span>
						
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" name="actualizarEmail" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba el Email">
                        
                    </div>

				</div>
				<div class="mb-3">

					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-lock"></i>
                        </span>
						
						<input type="password" class="form-control" id="exampleInputPassword1" name="actualizarPassword" placeholder="Escriba su nueva contrasena">

						<input type="hidden" name="passwordActual" value="<?php echo $usuario['password']; ?>">

						<input type="hidden" name="idUsuario" value="<?php echo $usuario['id']; ?>">


                    </div>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Acepto las politicas de privacidad</label>
				</div>


				<?php 

					$actualizar = new controladorFormularios();
					$actualizar->ctrActualizarRegistro();

				?>

				<button type="submit" class="btn btn-primary">Actualizar
				</button>
			</form>
		</div>    	
	</div>

</section>
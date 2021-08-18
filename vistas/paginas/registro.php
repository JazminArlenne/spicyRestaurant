<?php
	
	if(isset($_SESSION["validarIngreso"])){

        echo '<script> window.location = "index.php?pagina=iniciar"; </script>';
        
        return;
}

?>


<section class="pb-5 " style="background: black;">
	<h2 class="titulo-algunos-platos">| Registrate</h2>
	

	<div class="container-fluid mt-5">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link bg-warning text-dark" href="index.php?pagina=registro">Registro</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="index.php?pagina=ingreso">Ingreso</a>
				</li>
			
			</ul>
		</div>

	</div>

	<!--=================
	registro
	==================-->
	<div class="container-fluid ">

		<div class="d-flex justify-content-center text-center mt-5">

			<form class="p-4 bg-light rounded" method="post">
				<div class="mb-3">
					<label for="nombre" class="form-label">Nombre</label>
					
					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-user"></i> 	
                        </span>
                        
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nombre" name="registroNombre">
                    </div>

				</div>
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>

					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-envelope"></i>
                        </span>
						
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" name="registroEmail">
                        
                    </div>

				</div>
				<div class="mb-3">
					<label for="pwd" class="form-label">Contrasena</label>

					<div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                        	<i class="fas fa-lock"></i>
                        </span>
						
						<input type="password" class="form-control" id="exampleInputPassword1" name="registroPassword">
                    </div>
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Acepto las politicas de privacidad</label>
				</div>

				<?php 
					$registro = controladorFormularios::ctrRegistro();
					/*
					
					echo $registro;*/

					if($registro == "ok"){ 
						echo '<script>
							if (window.history.replaceState){
								window.history.replaceState(null, null, window.location.href);
							}
						</script>';

						echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
					}
				
				?>

				<button type="submit" class="btn btn-warning">Registrarse</button>
			</form>
		</div>    	
	</div>

</section>
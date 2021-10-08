<?php

class controladorFormularios{

	/*===============================
			Registros
	===============================*/

	static public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){


			$tabla = "registros";

			$datos = array("nombre" => $_POST["registroNombre"],
						   "email" => $_POST['registroEmail'],
						   "password" => $_POST['registroPassword']);


			$respuesta = modeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;
			/*
			return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>";*/

			return "ok";
		}
	}

	/*=========================================
		Seleccionar Registros
	===========================================*/
 
	static public function ctrSeleccionarRegistros($item, $valor){

		$tabla = "registros";

		$respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;
	}


	/*=========================================
		Actualizar Registros
	===========================================*/

	public function ctrActualizarRegistro(){
		if (isset($_POST["actualizarNombre"])) {
			
			if($_POST['actualizarPassword'] != ""){

				$password = $_POST["actualizarPassword"];	
			}else{
				$password = $_POST["passwordActual"];
			}

			$tabla = "registros";

			$datos = array("id" => $_POST["idUsuario"],
							"nombre" => $_POST["actualizarNombre"],
						   "email" => $_POST['actualizarEmail'],
						   "password" => $password);


			$respuesta = modeloFormularios::mdlActualizarRegistros($tabla, $datos);

			if($respuesta == "ok"){
				echo '<script>
							if (window.history.replaceState){
								window.history.replaceState(null, null, window.location.href);
							}
						</script>';

						echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';
			}

			return $respuesta;
		}
	}

	/*=========================================
		eliminar Registros
	===========================================*/

	public function ctrEliminarRegistro(){
		if (isset($_GET["id"])) {
			

			$tabla = "registros";

			$datos = array("id" => $_GET["id"] );


			$respuesta = modeloFormularios::mdlEliminarRegistros($tabla, $datos);

			if($respuesta == "ok"){
				echo '<script>
							if (window.history.replaceState){
								window.history.replaceState(null, null, window.location.href);
							}
						</script>';

				echo '<script> window.location = "index.php?pagina=iniciar"; </script>';
			}

			return $respuesta;
		}
	}


	/*=========================================
		Ingreso
	===========================================*/

	public function ctrIngreso(){

		if(isset($_POST['ingresoEmail'])){

			$tabla = "registros";
			$item = "email";
			$valor = $_POST["ingresoEmail"];


			$respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);


			if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){


				$_SESSION["validarIngreso"] = "ok";


				echo '<script>
							if (window.history.replaceState){
								window.history.replaceState(null, null, window.location.href);
							}

							window.location = "index.php?pagina=iniciar";
						</script>';
	
			}else{
				echo '<script>
							if (window.history.replaceState){
								window.history.replaceState(null, null, window.location.href);
							}
						</script>';

				echo '<div class="alert alert-warning">Usuario o contrasena no valido</div>';


			}
		}
	}
}
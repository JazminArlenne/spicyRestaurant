<?php 


require_once "conexion.php";



Class modeloFormularios{
 
	
	static public function mdlRegistro($tabla, $datos){
		#statement = declaracion
		$stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)");

		#binparam()

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

		if ($stmt->execute()){
			return "ok";

		}else{
			print_r(conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;


	}

	/*=========================================
		Seleccionar Registros
	===========================================*/

	static public function mdlSeleccionarRegistros($id=null){
		
		$tabla = "registros";
		
		$consulta = "select * from $tabla ORDER BY id DESC";
		$stmt = conexion::conectar()->prepare($consulta);

		if(!empty($id)){
			$consulta = "select * from $tabla where id = :id ORDER BY id DESC";
			$stmt = conexion::conectar()->prepare($consulta);

			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		
			if ($stmt->execute()){
				$respuesta = $stmt->fetch();
				return $respuesta;

			}else{
				print_r(conexion::conectar()->errorInfo());

			}

			$stmt->execute();
			$respuesta = $stmt->fetchAll();
			
			return $respuesta;
		}else{
		
			$stmt->execute();
			$respuesta = $stmt->fetchAll();
			
			return $respuesta;
		}
		
		$stmt->close();

		$stmt = null;

	}	

	
	static public function mdlIngreso($email){
		
		$tabla = "registros";

		$consulta = "select * from $tabla where email = :email order by id DESC";
		$stmt = conexion::conectar()->prepare($consulta);

		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		
		if ($stmt->execute()){
			$respuesta = $stmt->fetch();
			return $respuesta;

		}else{
			print_r(conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;

	}	



	/*=========================================
		ACtualizar Registros
	===========================================*/

	static public function mdlActualizarRegistros($tabla, $datos){

		$stmt = conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email=:email, password=:password WHERE id =:id");

		#binparam()

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_INT  );

		if ($stmt->execute()){
			return "ok";

		}else{
			print_r(conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;
	}	

	/*=========================================
		Eliminar Registros
	===========================================*/

	static public function mdlEliminarRegistros($tabla, $datos){

		$stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE id =:id");

		#binparam()

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

		if ($stmt->execute()){
			return "ok";

		}else{
			print_r(conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;
	}	
}

/*$conexion = conexion::conectar();
echo '<pre>'; print_r($conexion); echo "</pre>";


static public function mdlSeleccionarRegistro(){
		$tabla = "registros";

		$respuesta = modeloFormularios::mdl
	}*/
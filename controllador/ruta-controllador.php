<?php

class controladorRuta{

	public  $__PATH__ = "/vistas";

	public function ctrRutaPagina(){

		if(isset($_GET["pagina"])){

			if ($_GET["pagina"] == "registro" ||
				$_GET["pagina"] == "ingreso" ||
				$_GET["pagina"] == "iniciar" ||
				$_GET["pagina"] == "salir") {

				include "paginas/".$_GET["pagina"]."php";
			}

		}else{

			include "paginas/inicio.php";
		}

	}
}


	
<?php 

if (isset($_GET['id'])){

	$eliminar = new controladorFormularios();
	$eliminar->ctrEliminarRegistro();

}					
				
?>
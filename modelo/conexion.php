<?php

class conexion{

	static public function conectar(){

		#PDO("nombre del servidor, Nombre de la base de datos", "nombre adm","contrasena")

		$link = new PDO("mysql:host=localhost;dbname=spicy-usuarios", "jazmin", "1234");

		$link->exec("set names utf8");

		return $link;
	}	
}
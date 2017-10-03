<?php 
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("data", "sistema_escolar");


	//connection object
	$ConnectObject = new mysqli(host, user, pass, data) 
	or die("Error al conectarse a la base de datos.");

 ?>
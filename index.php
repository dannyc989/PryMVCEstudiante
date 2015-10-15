<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	require_once "Config/Autoload.php";

	//require_once "Models/Estudiante.php";

	Config\Autoload::run();
	$est = new Models\Estudiante();
	//$est->hola();
	//$est = new Models\Estudiante();
	//$est->hola();
	//new Models\Seccion();

?>
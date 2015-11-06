<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	require_once "Config/Autoload.php";
	define('URL', "http://localhost/codigofacilito/PryMVCEstudiante/");

	//require_once "Models/Estudiante.php";

	Config\Autoload::run();
	require_once "Views/template.php";
	//new Config\Request();
	Config\Enrutador::run(new Config\Request());
	
/*	$est = new Models\Estudiante();
    $est->set('id',1);
	$datos = $est->view();
	print $datos['nombre'];

	$est = new Models\Estudiante();
	$datos = $est->listar();

    print  "</br>";
    print  "</br>";
	while ($row =  $datos->fetch_assoc()) {
		print $row['nombre'];
		print  "</br>";
	};
*/
	//print $datos;

	//print $datos['nombre'];

/*	foreach($datos as $key){
	 	print $key['nombre'];
	 }
*/
	//$est->hola();
	//$est = new Models\Estudiante();
	//$est->hola();
	//new Models\Seccion();

?>
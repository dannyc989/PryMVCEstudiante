<?php namespace Views;

	$template = new Template();

	class Template{
		public function __construct(){

?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administración de estudiantes</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">

	</head>
	<body>

<?php
		}

		public function __destruct(){
?>

	<footer class="navbar-fixed-bottom">
		Todos los derechos reservados &copy 2015 <br>
		Danny Crespin ~ @dannyc989 | <b>DPCR</b>
	</footer>
	</body>
	</html>

<?php
		}

	}

?>
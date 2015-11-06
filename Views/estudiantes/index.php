<H3>Vista del Estudiante Principal</H3>

<?php
	//$estudiantes = new Controllers\estudiantesController();
	//$datos = $estudiantes->index();

	while ($row =  $datos->fetch_assoc()) {
		print $row['nombre'];
		print  "</br>";
	}
 //pilas
?>
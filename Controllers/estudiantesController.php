<?php namespace Controllers;
	
	use Models\Estudiante as Estudiante;

	class estudiantesController{

		private $estudiante;

		public function __construct(){
			$this->estudiante = new Estudiante();
		}

		public function index(){
			//print("hola estudiantesController");
			$datos = $this->estudiante->listar();
			return $datos;
		}


	}

	//public $estudiantes = new estudiantesController();

?>
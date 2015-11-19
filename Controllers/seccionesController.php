<?php namespace Controllers;
	
	use Models\Seccion as Seccion;

	class seccionesController{

		private $objSeccion;

		public function __construct(){
			$this->objSeccion = new Seccion();
		}

		public function index(){
			$datos = $this->objSeccion->listar();
			return $datos;
		}

		public function editar(){
			echo "editar_secciones<br> ";
		}


	}

?>
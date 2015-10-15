<?php namespace Models;
	class Conexion{
		private $datos = $arrayName = array(
				"host"=>"localhost",
				"user"=>"root",
				"pass"=>"",
				"db"=>"proyecto"
			);

		private $con;

		public function __construct(){
			$this->datos = new \mysqli($this->datos['host'], 
				$this->datos['user'],$this->datos['pass'],$this->datos['db']
				);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function ConsultaRetorno($sql){
			$datos=$this->con->query($sql);
			return $datos;
		}

	}
?>
<?php namespace Models;
	class Seccion{

		const tabla = "secciones";
		private $id;
		private $nombre;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo,$contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM " . tabla;
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql= "INSERT INTO " . tabla . "
				  (id,nombre)
				   VALUES(null,'{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM " . tabla . " WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);

		}


		public function edit(){
			$sql = "UPDATE FROM " . tabla . " SET nombre = '{$this->nombre}'
			 WHERE id = '{$this->id}'
			";
			$this->con->consultaSimple($sql);
		}


		public function view(){
			$sql = "SELECT * FROM " . tabla . "
					WHERE id = '{$this->id}'
			";

			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;

		}

	}
?>
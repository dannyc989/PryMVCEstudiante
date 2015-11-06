<?php namespace Models;
	class Conexion{
		private $datos = array(
				"host"=>"localhost",
				"user"=>"root",
				"pass"=>"",
				"db"=>"proyecto"
			);

		private $con;

		public function __construct(){
			$this->con = new \mysqli($this->datos['host'], 
				$this->datos['user'],$this->datos['pass'],$this->datos['db']
				);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
			
/*			while ($row =  $datos->fetch_assoc()) {
				$out[] = $row;
			};

		    print json_encode($out);
		    print  "</br>";*/

/*			for ($num_fila = $datos->num_rows - 1; $num_fila >= 0; $num_fila--) {
			    $datos->data_seek($num_fila);
			    $fila = $datos->fetch_assoc();
			    $out[] = $fila;
			    print json_encode($out);
			    print  "</br>";
			    //print " id = " . $fila['id'] . "\n";
			}*/

			
		}

	}
?>
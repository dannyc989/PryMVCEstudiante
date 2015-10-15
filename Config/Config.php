<?php namespace Config;
	class Autoload{
		public stactic function run(){
			spl_autoload_register(function ($class){
				$ruta->str_replace("\\", "/", $class) . ".php";
				print $ruta;
			  }
			)
		}
	}
?>

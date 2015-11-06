<?php namespace Config;
	class Enrutador{
		public static function run($request){
			$controlador = $request->getControlador()."Controller";
			//print($controlador);
			$ruta = ROOT."Controllers".DS.$controlador.".php";
			//print($ruta);
			$metodo = $request->getMetodo();
			//print($metodo);
			if($metodo=="index.php"){
				$metodo = "index";
			}

			$argumento = $request->getArgumento();

			if(is_readable($ruta)){
				require_once $ruta;
				$mostrar = "Controllers\\".$controlador;//pongo "Controllers\\" haciendo referencia al namespace

				$controlador = new $mostrar;
				
				if (!isset($argumento)){
					$datos = call_user_func(array($controlador,$metodo));
				}else{
					$datos = call_user_func_array(array($controlador,$metodo),$argumento);
				}
			}

			//Cargar Vista
			$ruta = ROOT."Views".DS. $request->getControlador().DS.$request->getMetodo().".php";
			//print $ruta;
			if(is_readable($ruta)){
				require_once $ruta;
			}else{
				print "No se encontró la ruta";
			}
		}
	}
?>
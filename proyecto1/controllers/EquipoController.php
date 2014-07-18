<?php
	class EquipoController{
		
		public $muestra_errores = false;
		function __construct(){
			 
		}


		public function insertaEquipo($datos,$archivos){
			echo"<pre>";
			print_r($datos);

			print_r($archivos);
			echo"</pre>";

			
			$equipo = new Equipo(); 
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_idpais($datos['idpais']);
			$equipo->set_escudo($archivos['escudo']);
			if (count($equipo->errores)>0) {
				print_r($equipo->errores);
				
				die();
			}
			else {
				move_uploaded_file($archivos['escudo']['tmp_name'],
					"../img/".$archivos['escudo']['name']);
			}
			
			
			$equipo->inserta($equipo->get_atributos());
			
		}

	}


?>
<?php
	class RevistaController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaRevista($datos,$archivos){
			echo "<pre>";
		 	print_r($datos);
		 	print_r($archivos);
		  	echo"</pre>";
			$revista = new Revista();
			$revista->set_nombre($datos['nombre']);
			$revista->set_portada($archivos['portada']);
			$revista->set_fecha($datos['fecha']);
			$revista->set_volumen($datos['volumen']);
			$revista->set_titulo($datos['titulo']);
			$revista->set_subtitulo($datos['subtitulo']);
			$revista->set_numero($datos['numero']);
			$revista->set_clave($datos['clave']);
			$revista->set_directorio($datos['directorio']);
			$revista->set_editorial($datos['editorial']);
			$revista->set_id_status($datos['id_status']);
			
			if(count($revista->errores)>0){
				print_r($revista->errores);

			die();
			}
			else {
				move_uploaded_file($archivos['portada']['tmp_name'],
					"../img/".$archivos['portada']['name']);
			}

			$revista->inserta($revista->get_atributos());
		}

	}
?>
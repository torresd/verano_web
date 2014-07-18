<?php
	class ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}

		public function insertaArticulo($datos,$archivos){
			echo "<pre>";
		 	print_r($datos);
		 	print_r($archivos);

		  	echo"</pre>";
			$articulo = new Articulo();
			
			$articulo->set_nombre($datos['nombre']);
		    $articulo->set_resumen($datos['resumen']);
		    $articulo->set_abstract($datos['abstract']);
		    $articulo->set_introduccion($datos['introduccion']);
		    $articulo->set_metodologia($datos['metodologia']);
		    $articulo->set_contenido($datos['contenido']);
		    $articulo->set_fecha_creacion($datos['fecha_creacion']);
		    $articulo->set_archivo_pdf($archivos['archivo_pdf']);
		    $articulo->set_id_status($datos['id_status']);
		    $articulo->set_conclusiones($datos['conclusiones']);
		    $articulo->set_agradecimientos($datos['agradecimientos']);
		    $articulo->set_referencias($datos['referencias']);
			
			if(count($articulo->errores)>0){
				print_r($articulo->errores);
							die();

			}
			else {
				move_uploaded_file($archivos['archivo_pdf']['tmp_name'],
					"../img/".$archivos['archivo_pdf']['name']);
			}

			$articulo->inserta($articulo->get_atributos());
		}

	}
?>
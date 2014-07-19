<?php
	class ArticuloController extends Articulo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Articulo();
			
		}

		public function insertaArticulo($datos,$archivos){
			/*echo "<pre>";
		 	print_r($datos);
		 	print_r($archivos);

		  	echo"</pre>";
			$articulo = new Articulo();*/
			
			$this->set_nombre($datos['nombre']);
		    $this->set_resumen($datos['resumen']);
		    $this->set_abstract($datos['abstract']);
		    $this->set_introduccion($datos['introduccion']);
		    $this->set_metodologia($datos['metodologia']);
		    $this->set_contenido($datos['contenido']);
		    $this->set_fecha_creacion($datos['fecha_creacion']);
		    $this->set_archivo_pdf($archivos['archivo_pdf']);
		    $this->set_id_status($datos['id_status']);
		    $this->set_conclusiones($datos['conclusiones']);
		    $this->set_agradecimientos($datos['agradecimientos']);
		    $this->set_referencias($datos['referencias']);
			
			if(count($this->errores)>0){
				/*print_r($this->errores);
							die();*/
				$this-> muestra_errores=true;

			}
			else {
				move_uploaded_file($archivos['archivo_pdf']['tmp_name'],
					"../img/".$archivos['archivo_pdf']['name']);
				$this->inserta($this->get_atributos());
			}

			
		}

	}
?>
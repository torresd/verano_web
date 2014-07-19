<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Integrante();
			 
		}
		

		public function insertaIntegrante($datos,$archivos){
			
			
			$this->set_nombre($datos['nombre']);
			$this->set_apellido($datos['apellido']);
			$this->set_peso($datos['peso']);
			$this->set_estatura($datos['estatura']);
			$this->set_edad($datos['edad']);
			$this->set_foto($archivos['foto']);
			$this->set_idequipo($datos['idequipo']);
			
			
			if (count($this->errores)>0) {
				$this-> muestra_errores=true;
			}
			else {
				move_uploaded_file($archivos['foto']['tmp_name'],
					"../img/".$archivos['foto']['name']);
				$this->inserta($this->get_atributos());
			}
			
			
			
			
		}

	}


?>

<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'idestadio';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'ciudad'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $ciudad;
    
    
    function Estadio(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") le faltan o le sobran caracteres (2-30 caracteres)";
        }

        
        $this->nombre = trim($valor);
        
    }

    public function get_idciudad(){
        return $this->ciudad;
    } 

    public function set_idciudad($valor){

        $er = new Er();
        
        if ( !$er->valida_idciudad($valor) ){
            $this->errores[] = "Este id (".$valor.") es invalido";
        }

        
        $this->ciudad = trim($valor);
        
    }



    
    
    
}

?>

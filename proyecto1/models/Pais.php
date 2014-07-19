<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idcontinente'=>array(),
        'bandera'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idcontinente;
    private $bandera;
    
    function Pais(){
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
        else {
                  $this->nombre = trim($valor);
  
        }

        
        
    }

    public function get_idcontinente(){
        return $this->idcontinente;
    } 

    public function set_idcontinente($valor){

        $er = new Er();
        
        if ( !$er->valida_id(trim($valor)) ){
            $this->errores[] = "Numero de continente no valido";
        }
        else
        {
            $this->idcontinente = trim($valor);
        }

        
        
        
    }

    public function get_bandera(){
        return $this->bandera;
    } 

    public function set_bandera($valor){

        $er = new Er();
        if ( (( !$er->valida_img($valor['type']))) )
        {
            $this->errores[] = "Este tipo de archivo no es valido";
        }
        else
            if(!$er->valida_tam($valor['size']))
            {
                $this->errores[] = "Este tamanio de archivo no es valido";
            
            }
                else
                {
                    $this->bandera = trim($valor['name']);
                }
        
    }

    
    


    
    
    
}

?>

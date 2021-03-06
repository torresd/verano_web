<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'idequipo';
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
        'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idpais;
    private $escudo;
       
    
    function Equipo(){
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

        else
        {
                    $this->nombre = trim($valor);

        }
        
    }


    public function get_idpais(){
        return $this->idpais;
    } 

    public function set_idpais($valor){

        $er = new Er();
        
        if ( !$er->valida_id($valor) ){
            $this->errores[] = "Numero de pais no valido";
        }
        else
        {
            $this->idpais = trim($valor);
        }

        
        
        
    }

    public function get_escudo(){
        return $this->escudo;
    } 

    public function set_escudo($valor){

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
                    $this->escudo = trim($valor['name']);
                }
        
    }
    
    


    
    
    
}

?>

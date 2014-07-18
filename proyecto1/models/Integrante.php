<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'edad'=>array(),
        'idequipo'=>array()
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $edad;
    private $idequipo;
       
    
    function Integrante(){
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

    public function get_apellido(){
        return $this->apellido;
    } 

    public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_apellido($valor) ){
            $this->errores[] = "Este apellido (".$valor.") le faltan o le sobran caracteres (2-30 caracteres)";
        }

        
        $this->apellido = trim($valor);
        
    }
    
    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){

        /*$er = new Er();
        
        if ( !$er->valida_peso($valor) ){
            $this->errores[] = "Este peso (".$valor.") no cumple el formato xx.xx";
        }*/

        
        $this->peso = trim($valor);
        
    }

    public function get_estatura(){
        return $this->estatura;
    } 

    public function set_estatura($valor){

        /*$er = new Er();
        
        if ( !$er->valida_estatura($valor) ){
            $this->errores[] = "Esta estatura (".$valor.") no cumple el formato xx.xx";
        }*/

        
        $this->estatura = trim($valor);
        
    }

    public function get_foto(){
        return $this->foto;
    } 

    public function set_foto($valor){

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
                    $this->foto = trim($valor['name']);
                }
        
    }

    public function get_idequipo(){
        return $this->idequipo;
    } 

    public function set_idequipo($valor){

        $er = new Er();
        
        if ( !$er->valida_id($valor) ){
            $this->errores[] = "Numero de equipo no valido";
        }
        else {
            $this->idequipo = trim($valor);
        }

        
        
        
    }

    public function get_edad(){
        return $this->edad;
    } 

    public function set_edad($valor){

        $er = new Er();
        
        if ( !$er->valida_id($valor) ){
            $this->errores[] = "Edad invalidad";
        }

        else
        {
        $this->edad = trim($valor);    
        }
        
        
    }    
    
    
}

?>

<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(

        
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
        'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
        'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'id_status'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstract;
    private $introduccion;
    private $metodologia;
    private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $id_status;
    private $conclusiones;
    private $agradecimientos;
    private $referencias;
    
       
    
    function Articulo(){
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
        
        if ( !$er->valida_nombre(trim($valor)) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from articulo where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }

    public function get_resumen(){
        return $this->resumen;
    } 

    public function set_resumen($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Este resumen  no es valido";
        }
        else{
            $this->resumen = trim($valor);
        }
        
    }

    public function get_abstract(){
        return $this->abstract;
    } 

    public function set_abstract($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Este abstract  no es valido";
        }
        else{
            $this->abstract = trim($valor);
        }
        
    }

    public function get_introduccion(){
        return $this->introduccion;
    } 

    public function set_introduccion($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Esta introduccion  no es valido";
        }
        else{
            $this->introduccion = trim($valor);
        }
        
    }

    public function get_metodologia(){
        return $this->metodologia;
    } 

    public function set_metodologia($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Esta metodologia  no es valido";
        }
        else{
            $this->metodologia = trim($valor);
        }
        
    }

    public function get_contenido(){
        return $this->contenido;
    } 

    public function set_contenido($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Este contenido  no es valido";
        }
        else{
            $this->contenido = trim($valor);
        }
        
    }

    public function get_fecha_creacion(){
        return $this->fecha_creacion;
    } 

    public function set_fecha_creacion($valor){

            $this->fecha_creacion = $valor;
        
    }

    public function get_archivo_pdf(){
        return $this->archivo_pdf;
    } 

    public function set_archivo_pdf($valor){

         $er = new Er();
        if ( (( !$er->valida_pdf($valor['type']))) )
        {
            $this->errores[] = "Este tipo de (".$valor['type'].") archivo no es valido";
        }
        else
            if(!$er->valida_tam($valor['size']))
            {
                $this->errores[] = "Este tamanio (".$valor['size'].")bits de archivo no es valido";
            
            }
                else
                {
                    $this->archivo_pdf = trim($valor['name']);
                }

             
        
    }

    public function get_id_status(){
        return $this->id_status;
    }
    
    public function set_id_status($valor){
        $er = new Er();
        
        if ( !$er->valida_id(trim($valor)) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        else{
            $this->id_status = trim($valor);
        }
    }

    public function get_conclusiones(){
        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Esta conclusion  no es valido";
        }
        else{
            $this->conclusiones = trim($valor);
        }
        
    }

    public function get_agradecimientos(){
        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Estos agradecimientos  no son validos";
        }
        else{
            $this->agradecimientos = trim($valor);
        }
        
    }

    
    public function get_referencias(){
        return $this->referencias;
    } 

    public function set_referencias($valor){

            $er = new Er();
        
        if ( !$er->valida_texto(trim($valor)) ){
            $this->errores[] = "Estas referencias  no es valido";
        }
        else{
            $this->referencias = trim($valor);
        }
        
    }    


    
    
    
}

?>
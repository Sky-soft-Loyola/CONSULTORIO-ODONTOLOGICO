<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/consultorio-odontologico/class/persona.php");
class Acompanante extends Persona{

    //atributos
    private $nombre_completo;
    private $parentesco;
 

    public function __construct($ci,$nombre_completo,$celular,$parentesco,$direccion)
    {
        parent::__construct($ci,$celular,$direccion,);
        $this->nombre_completo = strtoupper($nombre_completo);
        $this->parentesco = strtoupper($parentesco);
        
    }

    public function mostrar_acompanante(){
        echo("<b>Datos del acompanante</b><br>");
        echo ($this->mostrar_variables());
        echo ($this->getNombre_completo()."<br>");
        echo ($this->getParentesco()."<br>");
       
    }

    //Encapsuladores
    //get


    public function getNombre_completo(){
        return $this->nombre_completo;
    }

    public function getParentesco(){
        return $this->parentesco;
    }

    //set 

    public function setNombre_completo($nombre_completo){
        $this->nombre_completo=$nombre_completo;
    }

    public function setParentesco($parentesco){
        $this->parentesco=$parentesco;
    }



}


?>
<?php
require_once ("./persona.php");

class Acompañante extends Persona{

    //atributos
    private $paciente;
    private $nombre_completo;
    private $parentesco;
 

    public function __construct($paciente, $nombre_completo,$parentesco,$ci,$celular,$direccion)
    {
        parent::__construct($ci,$celular,$direccion,);
        $this->paciente = $paciente;
        $this->nombre_completo = $nombre_completo;
        $this->parentesco = $parentesco;
        
    }

    public function mostrar_informacion(){
        echo("<b>Datos del acompanante</b><br>");
        echo ($this->mostrar_variables());
        echo ($this->getNombre_completo()."<br>");
        echo ($this->getParentesco()."<br>");
        echo("<b>Datos del paciente</b><br>");
        $this->paciente->mostrar();

    }

    //Encapsuladores
    //get

    public function getPaciente(){
        return $this->paciente;
    }

    public function getNombre_completo(){
        return $this->nombre_completo;
    }

    public function getParentesco(){
        return $this->parentesco;
    }

    //set 
    public function setPaciente($paciente){
        $this->paciente=$paciente;
    }

    public function setNombre_completo($nombre_completo){
        $this->nombre_completo=$nombre_completo;
    }

    public function setParentesco($parentesco){
        $this->parentesco=$parentesco;
    }



}


?>
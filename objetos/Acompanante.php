<?php

class Acompanante{

    private $nombre_completo;
    private $celular;
    private $direccion;
    private $parentesco;


    public function __construct($nombre_completo,$celular,$direccion,$parentesco)
    {
        $this->nombre_completo=$nombre_completo;
        $this->celular=$celular;
        $this->direccion=$direccion;
        $this->parentesco=$parentesco;
    }


    public function getNombreCompleto(){
        return $this->nombre_completo;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getParentesco(){
        return $this->parentesco;
    }


    public function setNombreCompleto($nombre_completo){
        $this->nombre_completo=$nombre_completo;
    }
    public function setCelular($celular){
        $this->celular=$celular;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setParentesco($parentesco){
        $this->parentesco=$parentesco;
    }


}
?>
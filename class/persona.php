<?php 
class Persona{
//ATRIBUTOS
    private  $ci;
    private  $celular;
    private  $direccion;

//CONSTRUCTOR
    public function __construct($ci, $celular, $direccion)
    {
        $this->ci = $ci;
        $this->celular= $celular;
        $this->direccion= strtoupper($direccion);
    }

    public function mostrar_variables(){
        echo ($this->getCi() . "<br>");
        echo ($this->getCelular()."<br>");
        echo ($this->getDireccion()."<br>");
    }


    //ENCAPSULADORES


    // get 
    public function getCi(){
        return $this->ci;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    // set

    public function setCi($ci){
        $this->ci = $ci;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }


}

?>
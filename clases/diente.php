<?php 
class Dientes{
//ATRIBUTOS
    private  $numero_diente = array();
    private  $tratamiento;


//CONSTRUCTOR
    public function __construct($numero_diente,  $tratamiento)
    {
        $this->numero_diente = $numero_diente;
        $this->tratamiento = $tratamiento;

  
    }

    public function mostrar_historial(){
        echo("<b>Datos del Diente</b><br>");
        echo ($this->getNumero_diente()."<br>");
        echo ($this->getTratamiento()."<br>");
  
    }
   

    //ENCAPSULADORES


    // get 
    
    public function getNumero_diente(){
        return $this->numero_diente;
    }
    
    public function getTratamiento(){
        return $this->tratamiento;
    }


    // set

    public function setNumero_diente($numero_diente){
        $this->numero_diente = $numero_diente;
    }
    public function setTratamiento($tratamiento){
        $this->tratamiento = $tratamiento;
    }

  

}

?>
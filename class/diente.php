<?php 
class Dientes{
//ATRIBUTOS
    private  $numero_diente=0;
    private  $tratamiento="";


//CONSTRUCTOR
    public function __construct($diente=0,$tratamiento="")
    {
        $this->numero_diente=$diente;
        $this->tratamiento=$tratamiento;

  
    }
   

    public function mostrar_diente(){
        echo("<b>Datos del Diente</b><br>");
        echo ($this->getNumero_diente()."<br>");
        echo ($this->getTratamiento()."<br>");
  
    }
   

    //metedo para insertar datos 
    public function insertar_diente($numero_diente,$tratamiento){
        $this->setNumero_diente($numero_diente);
        $this->setTratamiento($tratamiento);

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
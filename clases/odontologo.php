<?php
require_once ("./persona.php");

class Odontologo extends Persona{

//atributos
    private $contrasena;
    private $nombre_completo;
    private $especialidad;

  
    
    public function __construct($contrasena,$nombre_completo,$especialidad,$ci,$celular,$direccion)
    {
        parent::__construct($ci,$celular,$direccion);
        $this->contrasena = $contrasena;
        $this->nombre_completo = $nombre_completo;
        $this->especialidad = $especialidad;
  
    }

    public function mostrar_odontologo(){
        echo ($this->mostrar_variables());
        echo($this-> getContrasena()."<br>");
        echo($this-> getNombre_completo()."<br>");
        echo($this-> getEspecialidad()."<br>");
        $this->mostrar_variables();
        
    }


//Encapsuladores
//get
    public function getContrasena(){ 
        return $this->contrasena;    
    }       
    public function getNombre_completo(){ 
        return $this->nombre_completo;    
    }
    public function getEspecialidad(){ 
        return $this->especialidad;    
    }
   


    // set
    public function setContrasena($contrasena){ 
            $this->contrasena = $contrasena;    
    }
    public function setNombre_completo($nombre_completo){ 
            $this->nombre_completo = $nombre_completo;    
    }
    public function setEspecialidad($especialidad){ 
            $this->especialidad = $especialidad;    
    }
    

}

?>
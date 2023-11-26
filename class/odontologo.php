<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/consultorio-odontologico/class/persona.php");

class Odontologo extends Persona{

//atributos
    private $contrasena;
    private $nombre_completo;
    private $especialidad;

  
    
    public function __construct($ci,$contrasena, $nombre_completo, $celular, $direccion, $especialidad)
    {
        parent::__construct($ci,$celular,$direccion);
        $this->contrasena = $contrasena;
        $this->nombre_completo = strtoupper($nombre_completo);
        $this->especialidad = strtoupper($especialidad);
  
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
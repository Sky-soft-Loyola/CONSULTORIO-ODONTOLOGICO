<?php
require_once ("./persona.php");

class Paciente extends Persona{

//atributos
    private $nombre;
    private $ap_materno;
    private $ap_paterno;
    private $fecha_nacimiento;
    private $correo;
    private $genero;
    private $nacionalidad;
    private $ocupacion;
    private $estado_civil;
    
    public function __construct($nombre,$ap_materno,$ap_paterno,$fecha_nacimiento,$correo,$genero,$nacionalidad,$ocupacion,$estado_civil,$ci,$celular,$direccion)
    {
        parent::__construct($ci,$celular,$direccion);
        $this->nombre = $nombre;
        $this->ap_materno = $ap_materno;
        $this->ap_paterno = $ap_paterno;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->correo = $correo;
        $this->genero = $genero;
        $this->nacionalidad = $nacionalidad;
        $this->ocupacion = $ocupacion;
        $this->estado_civil = $estado_civil;
  
    }

    public function mostrar(){
        echo($this-> getNombre()."<br>");
        echo($this-> getAp_materno()."<br>");
        echo($this-> getAp_paterno()."<br>");
        echo($this-> getFecha_nacimiento()."<br>");
        echo($this-> getCorreo()."<br>");
        echo($this-> getGenero()."<br>");
        echo($this-> getNacionalidad()."<br>");
        echo($this-> getOcupacion()."<br>");
        echo($this-> getEstado_civil()."<br>");
        $this->mostrar_variables();
        
    }


//Encapsuladores
//get
    public function getNombre(){ 
        return $this->nombre;    
    }        public function getAp_materno(){ 
        return $this->ap_materno;    
    }
    public function getAp_paterno(){ 
        return $this->ap_paterno;    
    }
    public function getFecha_nacimiento(){ 
        return $this->fecha_nacimiento;    
    }
    public function getCorreo(){ 
        return $this->correo;    
    }
    public function getGenero(){ 
        return $this->genero;    
    }
    public function getNacionalidad(){ 
        return $this->nacionalidad;    
    }
    public function getOcupacion(){ 
        return $this->ocupacion;  
    }
    public function getEstado_civil(){ 
        return $this->estado_civil;    
    }


    // set
    public function setNombre($nombre){ 
            $this->nombre = $nombre;    
    }
    public function setAp_materno($ap_materno){ 
            $this->ap_materno = $ap_materno;    
    }
    public function setAp_paterno($ap_paterno){ 
            $this->ap_paterno = $ap_paterno;    
    }
    public function setFecha_nacimiento($fecha_nacimiento){ 
            $this->fecha_nacimiento = $fecha_nacimiento;    
    }
    public function setCorreo($correo){ 
            $this->correo = $correo;    
    }
    public function setGenero($genero){ 
            $this->genero = $genero;    
    }
    public function setNacionalidad($nacionalidad){ 
            $this->nacionalidad = $nacionalidad;    
    }
    public function setOcupacion($ocupacion){ 
            $this->ocupacion = $ocupacion;  
    }
    public function setEstado_civil($estado_civil){ 
            $this->estado_civil = $estado_civil;    
    }

  

}

?>
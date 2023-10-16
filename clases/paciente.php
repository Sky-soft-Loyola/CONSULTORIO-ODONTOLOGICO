
<?php
require_once ("./persona.php");

class Paciente extends Persona{

//atributos
    private $nombre;
    private $ap_paterno;
    private $ap_materno;
    private $fecha_nacimiento;
    private $correo;
    private $genero;
    private $nacionalidad;
    private $ocupacion;
    private $estado_civil;
    private $acompanante;
    private $antecedentes;
  
    
    public function __construct( $antecedentes,$acompanante, $nombre,$ap_paterno,$ap_materno,$fecha_nacimiento,$correo,$genero,$nacionalidad,$ocupacion,$estado_civil,$ci,$celular,$direccion)
    {
        parent::__construct($ci,$celular,$direccion);
        $this->acompanante= $acompanante;
        $this->$antecedentes= $antecedentes;
        $this->nombre = $nombre;
        $this->ap_paterno = $ap_paterno;
        $this->ap_materno = $ap_materno;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->correo = $correo;
        $this->genero = $genero;
        $this->nacionalidad = $nacionalidad;
        $this->ocupacion = $ocupacion;
        $this->estado_civil = $estado_civil;
  
    }

    

    public function mostrar_paciente(){
        echo("<b>Datos del paciente</b><br>");
        echo ($this->mostrar_variables());
        echo($this-> getNombre()."<br>");
        echo($this-> getAp_paterno()."<br>");
        echo($this-> getAp_materno()."<br>");
        echo($this-> getFecha_nacimiento()."<br>");
        echo($this-> getCorreo()."<br>");
        echo($this-> getGenero()."<br>");
        echo($this-> getNacionalidad()."<br>");
        echo($this-> getOcupacion()."<br>");
        echo($this-> getEstado_civil()."<br>");
        echo("<b>Datos del acompañante</b><br>");
        $this->acompanante->mostrar_acompanante();
        echo("<b>Datos del antecedentes</b><br>");
        $this->antecedentes->mostrar_antecedentes();
        
    }


//Encapsuladores
//get

     public function getAcompanante(){ 
        return $this->acompanante;    
    }       
     public function getAntecedentes(){ 
        return $this->antecedentes;    
    }
    public function getNombre(){ 
        return $this->nombre;    
    }       
     public function getAp_paterno(){ 
        return $this->ap_paterno;    
    }
    public function getAp_materno(){ 
        return $this->ap_materno;    
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
    public function setAcompanante($acompanante){
        $this->acompanante=$acompanante;
    }
    public function setAntecedentes($antecedentes){
        $this->antecedentes=$antecedentes;
    }
    public function setNombre($nombre){ 
            $this->nombre = $nombre;    
    }
    public function setAp_paterno($ap_paterno){ 
            $this->ap_paterno = $ap_paterno;    
    }
    public function setAp_materno($ap_materno){ 
            $this->ap_materno = $ap_materno;    
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
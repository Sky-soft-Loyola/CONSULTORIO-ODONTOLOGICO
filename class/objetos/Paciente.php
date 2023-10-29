<?php




class Paciente{

    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $ci;
    private $direccion;
    private $celular;
    private $correo;
    private $ocupacion;
    private $nacionalidad;
    private $estado_civil;


    public function __construct($nombre,$apellido_paterno,$apellido_materno,$ci,$direccion,$celular,$correo,$ocupacion,$nacionalidad,$estado_civil)
    {
        $this->nombre=$nombre;
        $this->apellido_paterno=$apellido_paterno;
        $this->apellido_materno=$apellido_materno;
        $this->ci=$ci;
        $this->direccion=$direccion;
        $this->celular=$celular;
        $this->correo=$correo;
        $this->ocupacion=$ocupacion;
        $this->nacionalidad=$nacionalidad;
        $this->estado_civil=$estado_civil;
    }

    public function ver_pacientes(){
        echo $this->nombre."<br>";
        echo $this->apellido_paterno."<br>";
        echo $this->apellido_materno."<br>";
        echo $this->ci."<br>";
        echo $this->direccion."<br>";
        echo $this->celular."<br>";
        echo $this->correo."<br>";
        echo $this->ocupacion."<br>";
        echo $this->nacionalidad."<br>";
        echo $this->estado_civil."<br>";
    }


    #encapsuladores get
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellidopaterno(){
        return $this->apellido_paterno;
    }

    public function getApellidomaterno(){
        return $this->apellido_materno;
    }

    public function getCi(){
        return $this->ci;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getOcupacion(){
        return $this->ocupacion;
    }

    public function getNacionalida(){
        return $this->nacionalidad;
    }
    
    public function getEstadocivil(){
        return $this->estado_civil;
    }

    # encapsuladores set
    public function setNombre($nombre){
         $this->nombre=$nombre;
    }
    
    public function setApellidopaterno($apellido_paterno){
         $this->apellido_paterno=$apellido_paterno;
    }

    public function setApellidomaterno($apellido_materno){
         $this->apellido_materno=$apellido_materno;
    }

    public function setCi($ci){
         $this->ci=$ci;
    }

    public function setDireccion($direccion){
         $this->direccion=$direccion;
    }

    public function setCelular($celular){
         $this->celular=$celular;
    }

    public function setCorreo($correo){
         $this->correo=$correo;
    }

    public function setOcupacion($ocupacion){
         $this->ocupacion=$ocupacion;
    }

    public function setNacionalida($nacionalidad){
         $this->nacionalidad=$nacionalidad;
    }
    
    public function setEstadocivil($estado_civil){
         $this->estado_civil=$estado_civil;
    }



}


$paciente= new Paciente("juan","medina","mancilla",124505,"asasdasdda",73728149,"jasdasd@asd.fos","estudiante","boliviano","soltero");
$paciente->ver_pacientes();

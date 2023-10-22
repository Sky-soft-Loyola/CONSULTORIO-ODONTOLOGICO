<?php 
class Historial_clinico{
//ATRIBUTOS
    private  $cod_atencion;
    private  $fecha;
    private  $dientes;
    private  $estado_diente;
    private  $tratamiento;
    private  $observacion;
    private  $paciente;
    private  $odontologo;

//CONSTRUCTOR
    public function __construct($odontologo,$paciente,$cod_atencion, $fecha,$estado_diente, $dientes,  $tratamiento, $observacion)
    {
        $this->paciente = $paciente;
        $this->odontologo= $odontologo;
        $this->cod_atencion = $cod_atencion;
        $this->fecha= $fecha;
        $this->dientes= $dientes;
        $this->estado_diente = $estado_diente;
        $this->tratamiento = $tratamiento;
        $this->observacion= $observacion;
  
    }

    public function mostrar_historial(){
        echo ($this->getCod_antencion()."<br>");
        echo ($this->getFecha() . "<br>");
        echo ($this->getDientes()."<br>");
        echo ($this->getEstado_diente() . "<br>");
        echo ($this->getTratamiento()."<br>");
        echo ($this->getObservacion()."<br>");
        echo("<b>Datos del acompañante</b><br>");
        $this->paciente->mostrar_paciente();
        echo("<b>Datos del antecedentes</b><br>");
        $this->odontologo->mostrar_odontologo();

    }
   

    //ENCAPSULADORES


    // get 
    public function getPaciente(){
        return $this->paciente;
    }
    public function getOdontologo(){
        return $this->odontologo;
    }
    public function getCod_antencion(){
        return $this->cod_atencion;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getDientes(){
        return $this->dientes;
    }
    public function getEstado_diente(){
        return $this->estado_diente;
    }
    public function getTratamiento(){
        return $this->tratamiento;
    }
    public function getObservacion(){
        return $this->observacion;
    }

    // set

    public function setPaciente($paciente){
        $this->paciente = $paciente;
    }
    public function setOdontologo($odontologo){
        $this->odontologo = $odontologo;
    }
    public function setCod_antencion($cod_antencion){
        $this->cod_atencion = $cod_antencion;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setDientes($dientes){
        $this->dientes = $dientes;
    }
    public function setEstado_diente($estado_diente){
        $this->estado_diente = $estado_diente;
    }
    public function setTratamiento($tratamiento){
        $this->tratamiento = $tratamiento;
    }
    public function setObservacion($observacion){
        $this->observacion = $observacion;
    }
  

}

?>
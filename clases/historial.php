<?php 

class Historial_clinico{
//ATRIBUTOS
    private  $cod_atencion;
    private  $fecha;
    private  $paciente;
    private  $odontologo;
    private  $lista_dientes;

//CONSTRUCTOR
    public function __construct($odontologo,$paciente,$cod_atencion, $fecha, $lista_dientes)
    {
        $this->paciente = $paciente;
        $this->odontologo= $odontologo;
        $this->cod_atencion = $cod_atencion;
        $this->fecha = $fecha;
        $this->lista_dientes = $lista_dientes;
  
    }

    public function mostrar_historial(){
        echo ($this->getCod_antencion()."<br>");
        echo ($this->getFecha() . "<br>");
        echo ($this->getLista_diente() . "<br>");
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
    public function getLista_diente(){
        return $this->lista_dientes;
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
    public function setLista_diente($lista_dientes){
        $this->lista_dientes = $lista_dientes;
    }

}

?>
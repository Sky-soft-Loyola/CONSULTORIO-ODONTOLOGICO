<?php 
class Antecedentes_medicos{
//ATRIBUTOS
    private  $cod_antecedentes;
    private  $alergias;
    private  $medicacion;
    private  $patologia;
    private  $observacion;
    private  $tratamiento_medico;

//CONSTRUCTOR
    public function __construct($cod_antecedentes, $alergias, $medicacion, $patologia, $observacion, $tratamiento_medico)
    {
        $this->cod_antecedentes = $cod_antecedentes;
        $this->alergias= $alergias;
        $this->medicacion= $medicacion;
        $this->patologia = $patologia;
        $this->observacion= $observacion;
        $this->tratamiento_medico= $tratamiento_medico;
    }



    }
 
    public function mostrar_antecedentes(){
        echo ($this->getCod_antecedentes()."<br>");
        echo ($this->getAlergias() . "<br>");
        echo ($this->getMedicacion()."<br>");
        echo ($this->getPatologia() . "<br>");
        echo ($this->getObservacion()."<br>");
        echo ($this->getTratamiento_medico()."<br>");
    }


    //ENCAPSULADORES


    // get 
    public function getCod_antecedentes(){
        return $this->cod_antecedentes;
    }
    public function getAlergias(){
        return $this->alergias;
    }
    public function getMedicacion(){
        return $this->medicacion;
    }
    public function getPatologia(){
        return $this->patologia;
    }
    public function getObservacion(){
        return $this->observacion;
    }
    public function getTratamiento_medico(){
        return $this->tratamiento_medico;
    }

    // set

    public function setCod_antecedentes($cod_antecedentes){
        $this->cod_antecedentes = $cod_antecedentes;
    }
    public function setMedicacion($medicacion){
        $this->medicacion = $medicacion;
    }
    public function setMedicacion($patologia){
        $this->direccion = $direccion;
    }
    public function setpatologia($patologia){
        $this->patologia = $patologia;
    }
    public function setObservacion($observacion){
        $this->observacion = $observacion;
    }
    public function setTratamiento_medico($tratamiento_medico){
        $this->tratamiento_medico = $tratamiento_medico;
    }

}

?>
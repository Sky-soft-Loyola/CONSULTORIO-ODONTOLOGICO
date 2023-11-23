<?php 
class Antecedentes_medicos{
//ATRIBUTOS
    private  $cod_antecedentes;
    private  $alergias;
    private  $medicacion;
    private  $patologia;
    private  $tratamiento_medico;

//CONSTRUCTOR
    public function __construct($cod_antecedentes, $alergias, $medicacion, $patologia, $tratamiento_medico)
    {
        $this->cod_antecedentes = $cod_antecedentes;
        $this->alergias= strtoupper($alergias);
        $this->medicacion= strtoupper($medicacion);
        $this->patologia = strtoupper($patologia);

        $this->tratamiento_medico= strtoupper($tratamiento_medico);
    }




    public function mostrar_antecedentes(){
        echo ($this->getCod_antecedentes()."<br>");
        echo ($this->getAlergias() . "<br>");
        echo ($this->getMedicacion()."<br>");
        echo ($this->getPatologia() . "<br>");
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
    
    public function setpatologia($patologia){
        $this->patologia = $patologia;
    }
    public function setTratamiento_medico($tratamiento_medico){
        $this->tratamiento_medico = $tratamiento_medico;
    }

}

?>
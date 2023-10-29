<?php

    class Antecedentes{

        private $patologia;
        private $embarazo;
        private $alergia;
        private $tratamiento;
        private $medicamento;
        private $observaciones;

        public function __construct($patologia,$embarazo,$alergia,$tratamiento,$medicamento,$observaciones)
        {
            $this->patologia = $patologia;
            $this->embarazo = $embarazo;
            $this->alergia = $alergia;
            $this->tratamiento = $tratamiento;
            $this->medicamento = $medicamento;
            $this->observaciones = $observaciones;
            
        }

        #ENCAPSULADORES
        public function getPatologia(){
            return $this->patologia;
            
        }
        public function getEmbarazo(){
            return $this->embarazo;
            
        }
        public function getAlergia(){
            return $this->alergia;
            
        }
        public function getTratamiento(){
            return $this->tratamiento;
            
        }
        public function getMedicamento(){
            return $this->medicamento;
            
        }
        public function getObservasiones(){
            return $this->observaciones;
            
        }


        public function setPatologia($patologia){
            $this->patologia=$patologia;
            
        }
        public function setEmbarazo($embarazo){
            $this->embarazo=$embarazo;
            
        }
        public function setAlergia($alergia){
            $this->alergia=$alergia;
            
        }
        public function setTratamiento($tratamiento){
            $this->tratamiento=$tratamiento;
            
        }
        public function setMedicamento($medicamento){
            $this->medicamento=$medicamento;
            
        }
        public function setObservasiones($observaciones){
            $this->observaciones=$observaciones;
            
        }
        
    }

$antec = new Antecedentes("sadas","sdaasd","asdasddas","asdasdasd","asdasddsa","asasdsda");
echo $antec->getPatologia();
?>
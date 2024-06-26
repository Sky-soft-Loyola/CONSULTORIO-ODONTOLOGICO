<?php
require_once("paciente.php");
require_once("antecedente.php");
require_once("odontologo.php");
require_once("acompanante.php");
require_once("historial.php");
class Conexion{
    
    //atributos
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "clinica_odonto";
    private $conexion;

    //metodo constructor 
    public function __construct(){
        $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conexion = new pdo($connectionString,$this->user,$this->password);
            $this->conexion->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa <br>";
        }   catch(Exception $e){
          //  $this->conexion="Error de conexión";
            echo "ERROR: ".$e->getMessage();
        }     
    }
    
    // metodo para insertar antecedentes a la base de datos
    public function insertar_antecedente($paciente){
        $paciente->getAntecedentes()->setCod_antecedentes($this->clave_primaria_antecedente());
        $sql="INSERT INTO antecedentes_medicos (cod_antecedente, alergias, medicacion, patologia, tratamiento_medico) VALUES (?,?,?,?,?);";
        $insert = $this->conexion->prepare($sql);    
        $arrData = array($paciente->getAntecedentes()->getCod_antecedentes(),
                         $paciente->getAntecedentes()->getAlergias(),
                         $paciente->getAntecedentes()->getMedicacion(),
                         $paciente->getAntecedentes()->getPatologia(),
                         $paciente->getAntecedentes()->getTratamiento_medico());     
                         
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("Error antecedentes <hr>".$e."<hr>");
        }         
    }

    // metodo para insertar acompañantes a la base de datos
    public function insertar_acompanante($acompanante){
        if($acompanante->getCi()!=null){
            if($this->comprobar_acompanante($acompanante->getCi())){
                $sql="INSERT INTO acompanante (ci_acompanante, nombre_completo, celular, parentesco, direccion) VALUES  (?,?,?,?,?);";
                $insert = $this->conexion->prepare($sql);    
                $arrData = array($acompanante->getCi(),
                                $acompanante->getNombre_completo(),
                                $acompanante->getCelular(),
                                $acompanante->getParentesco(),
                                $acompanante->getDireccion());         
                                
                try{
                    $insert->execute($arrData);
                } catch (Exception $e){
                    echo("Error acompañante<hr>".$e."<hr>");
                }    
            }
        }      
    }

    // metodo para insertar pacientes a la base de datos
    public function insertar_paciente($paciente){
        if ($this->comprobar_paciente($paciente->getCi())){
            
        $sql="INSERT INTO `paciente` (`ci_paciente`, `nombre`, `ap_paterno`, `ap_materno`, `fecha_nacimiento`, `correo`, `celular`, `direccion`, `genero`, `nacionalidad`, `ocupacion`, `estado_civil`, `ci_acompanante`, `cod_antecedente`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $insert = $this->conexion->prepare($sql);    
        // Comprobamos si no tiene un acompañante el paciente
        if ($paciente->getAcompanante()->getCi()==null){
            $acompanante = NULL;
        }
        else
        {
            $acompanante =$paciente->getAcompanante()->getCi();
        }
        $arrData = array($paciente->getCi(),
                         $paciente->getNombre(),
                         $paciente->getAp_paterno(),
                         $paciente->getAp_materno(),
                         $paciente->getFecha_nacimiento(),
                         $paciente->getCorreo(),
                         $paciente->getCelular(),
                         $paciente->getDireccion(),
                         $paciente->getGenero(),
                         $paciente->getNacionalidad(),
                         $paciente->getOcupacion(),
                         $paciente->getEstado_civil(),
                         $acompanante,
                         $paciente->getAntecedentes()->getCod_antecedentes());         
                        
        
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("<br><b>error paciente</b><hr>".$e."<hr>");
        }          
        }
    }


    // metodo para insertar al odontologo a la base de datos
    public function insertar_odontologo($odontologo){
        if ($this->comprobar_odontologo($odontologo->getCi()))
        {
        $sql="INSERT INTO odontologo ( ci_doctor, contraseña, nombre_completo, celular, direccion, especialidad) VALUES (?,?,?,?,?,?);";
        $insert = $this->conexion->prepare($sql);    
        $arrData = array($odontologo->getCi(),
                         $odontologo->getContrasena(),
                         $odontologo->getNombre_completo(),
                         $odontologo->getCelular(),
                         $odontologo->getDireccion(),
                         $odontologo->getEspecialidad());              
               
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("Error odontologo");
        }  }       
    }

    // metodo para insertar el historial a la base de datos
    public function insertar_historial($historial_clinico){
        $historial_clinico->setCod_atencion($this->clave_primaria_historial());
        $paciente = $historial_clinico->getPaciente();
        $sql="INSERT INTO historial_clinico (cod_atencion, fecha, diente, tratamiento, ci_doctor, ci_paciente) VALUES (?, ?, ?, ?, ?, ?);";
        foreach( $historial_clinico->getLista_diente() as $diente){
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($historial_clinico->getCod_atencion(),
                            $historial_clinico->getFecha(),
                            $diente->getNumero_diente(),
                            $diente->getTratamiento(),
                            $historial_clinico->getOdontologo(),
                            $paciente->getCi());
                            
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("<br><b>error historial</b><hr>".$e."<hr>");
        }          
        //return null;
        }
    }

    //Metodo para comprobar
    ////Odontologo
    
    public function comprobar_odontologo($ci_doctor=0){
        /**
         * Devulve un valor booleano, segun a la verificacion realizada en la base de datos con el carnet de identidad del odontologo
         * 
         * @param int $ci_doctor= 0
         * @return boolean
         */
        $sql="SELECT * FROM `odontologo` WHERE `ci_doctor` = %d";
        $select=sprintf($sql,$ci_doctor);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice=0;
        while ($doctor=$resultados->fetch()){
            $datos[$indice]['ci_doctor']=$doctor['ci_doctor'];
       
        }
        if (empty($datos)){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function comprobar_inicio_sesion($ci_doctor=0,$password=""){
        /**
         * Devulve un valor booleano, segun a la verificacion realizada en la base de datos con el carnet de identidad del odontologo y su carnte
         * 
         * @param int $ci_doctor= 0
         * @param string $password=0
         * @return boolean
         */
        $sql="SELECT * FROM `odontologo` WHERE `ci_doctor` = %d AND `contraseña` LIKE '%s'" ;
        $select=sprintf($sql,$ci_doctor,$password);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice=0;
        while ($doctor=$resultados->fetch()){
            $datos[$indice]['ci_doctor']=$doctor['ci_doctor'];
       
        }
        if (empty($datos)){
            return true;
        }else{
            return false;
        }
        
    }  

    public function comprobar_paciente($ci_paciente=0){
        $sql="SELECT * FROM `paciente` WHERE `ci_paciente` = %d";
        $select=sprintf($sql,$ci_paciente);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice=0;
        while ($paciente=$resultados->fetch()){
            $datos[$indice]['ci_paciente']=$paciente['ci_paciente'];
       
        }
        if (empty($datos)){
            return true;
        }else{
            return false;
        }
    }   
    public function comprobar_acompanante($ci_acompanante=0){
        $sql="SELECT * FROM `acompanante` WHERE `ci_acompanante` = %d";
        $select=sprintf($sql,$ci_acompanante);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice=0;
        while ($paciente=$resultados->fetch()){
            $datos[$indice]['ci_acompanante']=$paciente['ci_acompanante'];
       
        }
        if (empty($datos)){
            return true;
        }else{
            return false;
        }
    }   


    public function clave_primaria_antecedente(){
        $sql=" SELECT count(*) as cantidad FROM `antecedentes_medicos`";
        $resultados = $this->conexion->prepare($sql);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = 0;
        while ($cantidad=$resultados->fetch()){
            $datos=$cantidad['cantidad'];
       
        }
        return $datos+1;
        
    }

    public function clave_primaria_historial(){
        $sql=" SELECT * FROM `historial_clinico` GROUP BY cod_atencion";
        $resultados = $this->conexion->prepare($sql);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = 0;
        while ($cantidad=$resultados->fetch()){
            $datos+=1;
       
        }
        return $datos+1;
        
    }



    public function getConexion(){
        return $this->conexion;
    }


}




$conect = new conexion();


?>
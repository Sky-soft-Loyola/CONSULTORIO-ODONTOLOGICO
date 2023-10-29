<?php
require_once("paciente.php");
require_once("antecedente.php");
require_once("odontologo.php");
require_once("acompanante.php");
require_once("historial.php");
class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "clinica_odonto";
    private $conexion;
// str   --- class
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
    
    public function insertar_Antecedente($paciente){
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
            echo("Ya existe este registro antecedentes");
        }         
    }

    public function insertar_Acompanante($acompanante){
        if($acompanante->getCi()!=null){
          
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
                echo("Ya existe este registro acompañante");
            }    
        }      
    }

    public function insertar_paciente($paciente){
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
                        
        print_r($arrData) ;              
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("<br><b>Ya existe este registro paciente</b>");
        }          
    }


    public function insertar_Odontologo($odontologo){
        $sql="INSERT INTO odontologo ( ci_doctor, contraseña, nombre_completo, celular, direccion, especialidad) VALUES (?,?,?,?,?,?);";
        $insert = $this->conexion->prepare($sql);    
        $arrData = array($odontologo->getCi(),
                         $odontologo->getContrasena(),
                         $odontologo->getNombre_completo(),
                         $odontologo->getCelular(),
                         $odontologo->getDireccion(),
                         $odontologo->getEspecialidad());     
                        // INSERT INTO `odontologo` (`ci_doctor`, `contraseña`, `nombre_completo`, `celular`, `direccion`, `especialidad`) VALUES ('1234567', '1234', 'maria fernanda lopez mamani', '22445566', 'av busch la paz', 'pediatria');              
               
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("Ya existe este registro odontologo");
        }         
    }

    public function insertar_historial($historial_clinico){
        $aux=$historial_clinico->getLista_diente();
        $odontologo = $historial_clinico->getOdontologo();
        $paciente = $historial_clinico->getPaciente();
        $sql="INSERT INTO historial_clinico (cod_atencion, fecha, estado_dientes, dientes, tratamiento, ci_doctor, ci_paciente) VALUES (?, ?, ?, ?, ?, ?, ?);";
        for($i=0;$i<= count($aux);$i++){
            $insert = $this->conexion->prepare($sql);
            $arrData = array($historial_clinico->getCod_antencion(),
                            $historial_clinico->getFecha(),
                            $aux[$i]->getNumero_diente(),
                            $aux[$i]->getTratamiento(),
                            
                            $odontologo->getCi(),
                            $paciente->getCi());
        }
        
        
       // $ci_acompanante = $paciente->getAcompanante() ? $paciente->getAcompanante()->getCi() : null;
                            
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("<br><b>Ya existe este registro historial</b>");
        }          
    }

    public function insertar_Usuario($paciente){
        //crear este metodo
    }


    public function getConexion(){
        return $this->conexion;
    }


}



//$antecendente=new Antecedentes_medicos(61004,"comidas","medicacion","patologia","observacion","tratamiento");
//$paciente=new Paciente($antecendente,null,"jose","medina","avceran","2023/01/10","asasdas@asdad.ss","M","Bolivia","estudiante","solterio",124250296,73728149,"asdasdas");

$conect = new conexion();
//$conect->insertar_Antecedente($paciente);





?>
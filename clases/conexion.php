<?php
require_once("paciente.php");
require_once("antecedente.php");
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
        $sql="INSERT INTO antecedentes_medicos (cod_antecedente, alergias, medicacion, patologia, observacion, tratamiento_medico) VALUES (?,?,?,?,?,?);";
        $insert = $this->conexion->prepare($sql);    
        $arrData = array($paciente->getAntecedentes()->getCod_antecedentes(),
                         $paciente->getAntecedentes()->getAlergias(),
                         $paciente->getAntecedentes()->getMedicacion(),
                         $paciente->getAntecedentes()->getPatologia(),
                         $paciente->getAntecedentes()->getObservacion(),
                         $paciente->getAntecedentes()->getTratamiento_medico());     
                         
        try{
            $insert->execute($arrData);
        } catch (Exception $e){
            echo("Ya existe este registro");
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
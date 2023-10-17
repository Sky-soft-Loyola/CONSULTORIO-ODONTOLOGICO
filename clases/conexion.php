<?php

class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "clinica_odonto";
    private $conect;

    public function __construct(){
        $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect = new PDO($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        }   catch(Exception $e){
            $this->conect="Error de conexión";
            echo "ERROR: ".$e->getMessage();
        }     
    }
    public function insertar_Antecedente($paciente){
        $sql="INSERT INTO 'antecedentes_medicos'('cod_antecedente','alergias','medicacion','patologia','observacion',tratamiento_medico') Values(?,?,?,?,?);";
        $insert = $this->conect->prepare($sql);
        $lista_datos = array($paciente->antecedentes->cod_antecedentes,
                            $paciente->antecedentes->alergias,
                            $paciente->antecedentes->medicacion,
                            $paciente->antecedentes->patologia,
                            $paciente->antecedentes->observacion,
                            $paciente->antecedentes->tratamiento_medico,);
        $resInsert = $insert->execute($lista_datos);
        echo($resInsert);
    }

  //  public function insertar_Usuario($paciente){
  //  $sql=
//}
}
$conect = new conexion();
?>
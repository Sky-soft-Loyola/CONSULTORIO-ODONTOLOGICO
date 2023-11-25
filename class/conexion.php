<?php
require_once("../page/php/Path_constantes.php");
/*require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['paciente']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['antecendente']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['odontologo']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['acompanante']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['historial']);
*/
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
        }  
        return true;
        }else{
            return false;
        }
               

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


    public function obtener_lista_pacientes(){
        $sql="SELECT ci_paciente,nombre,ap_paterno,ap_materno,celular,correo FROM `paciente` ORDER BY `paciente`.`ap_paterno` ASC";
        $resultados = $this->conexion->prepare($sql);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice = 0;
        while ($pacientes=$resultados->fetch()){
            $datos[$indice]['ci_paciente']=$pacientes['ci_paciente'];
            $datos[$indice]['nombre']=$pacientes['nombre'];
            $datos[$indice]['ap_paterno']=$pacientes['ap_paterno'];
            $datos[$indice]['ap_materno']=$pacientes['ap_materno'];
            $datos[$indice]['celular']=$pacientes['celular'];
            $datos[$indice]['correo']=$pacientes['correo'];
            $indice++;
        }
        return $datos;
    }

    public function obtener_datos_paciente($ci_paciente){
        $sql=" SELECT * FROM antecedentes_medicos as AM INNER JOIN paciente as P on AM.cod_antecedente=P.cod_antecedente where P.ci_paciente = %d";
        $select=sprintf($sql,$ci_paciente);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        while ($paciente=$resultados->fetch()){
            $datos=$paciente;
        }

        $sql="SELECT A.* from acompanante as A INNER JOIN paciente as P on A.ci_acompanante = P.ci_acompanante WHERE ci_paciente= %d";
        $select=sprintf($sql,$ci_paciente);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        while ($paciente=$resultados->fetch()){
           $datos['ci_acompanante']=$paciente['ci_acompanante'];       
           $datos['nombre_completo']=$paciente['nombre_completo'];
           $datos['celular_acompanante']=$paciente['celular'];
           $datos['parentesco']=$paciente['parentesco'];
           $datos['direccion_acompanante']=$paciente['direccion'];
        }
        return $datos;
    }

    public function obtener_historial_consultas_paciente($ci_paciente){
        $sql="SELECT * FROM `historial_clinico` WHERE ci_paciente=%d;";
        $select=sprintf($sql,$ci_paciente);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice = 0;
        while ($paciente=$resultados->fetch()){
            $datos[$indice]=$paciente;
            $indice++;
        }
        return $datos;
    }


    public function datos_generales_historial_consultas($ci_paciente){
        $sql="SELECT `cod_atencion`, `fecha`, `ci_doctor` FROM `historial_clinico` WHERE `ci_paciente`=%d GROUP BY cod_atencion";
        $select=sprintf($sql,$ci_paciente);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        $indice = 0;
        while ($paciente=$resultados->fetch()){
            $datos[$indice]=$paciente;
            $indice++;
        }
        return $datos;
    }
    public function obtener_datos_odontologo($ci_doctor) {
        $sql="SELECT ci_doctor,nombre_completo,especialidad FROM `odontologo` WHERE ci_doctor=%d;";
        $select=sprintf($sql,$ci_doctor);
        $resultados = $this->conexion->prepare($select);
        $resultados->setFetchMode(PDO::FETCH_ASSOC);
        $resultados->execute();
        $datos = array();
        while ($odontologo=$resultados->fetch()){
            $datos=$odontologo;
        }
        return $datos;
      }

      // metodo para insertar pacientes a la base de datos
    
    
    
    public function actualizar_paciente($paciente){

        $sql="UPDATE `paciente` SET `nombre` = '%s', `ap_paterno` = '%s', `ap_materno` = '%s', `correo` = '%s', `celular` = '%s', `direccion` = '%s', `ocupacion` = '%s', `estado_civil` = '%s' WHERE `paciente`.`ci_paciente` = %d;";

        $sql=sprintf($sql,$paciente->getNombre(),$paciente->getAp_paterno(),$paciente->getAp_materno(),$paciente->getCorreo(),$paciente->getCelular(),$paciente->getDireccion(),$paciente->getOcupacion(),$paciente->getEstado_civil(),$paciente->getCi());

        $actulizar = $this->conexion->prepare($sql);           
        try{
            $actulizar->execute();
        } catch (Exception $e){
            echo("<br><b>error paciente</b><hr>".$e."<hr>");
        }          

        
    }

    public function actualizar_datos_odontologo ($odontologo){

        $sql="UPDATE `odontologo` SET `contraseña` = '%s', `nombre_completo` = '%s', `celular` = '%d', `direccion` = '%s', `especialidad` = '%s' WHERE `odontologo`.`ci_doctor` = %d;";

        $sql=sprintf($sql,$odontologo->getContrasena(),$odontologo->getNombre_completo(),$odontologo->getCelular(),$odontologo->getDireccion(),$odontologo->getEspecialidad(), $odontologo->getCi());

        $actulizar = $this->conexion->prepare($sql);           
        try{
            $actulizar->execute();
        } catch (Exception $e){
            echo("<br><b>error odontologo</b><hr>".$e."<hr>");
        }          
}


public function actualizar_datos_acompanante ($acompanante){

    $sql="UPDATE `acompanante` SET `nombre_completo` = '%s', `celular` = '%d', `parentesco` = '%s', `direccion` = '%s' WHERE `acompanante`.`ci_acompanante` = %d;";

    $sql=sprintf($sql,$acompanante->getNombre_completo(),$acompanante->getCelular(),$acompanante->getParentesco(),$acompanante->getDireccion(),$acompanante->getCi());

    $actulizar = $this->conexion->prepare($sql);           
    try{
        $actulizar->execute();
    } catch (Exception $e){
        echo("<br><b>error acompañante</b><hr>".$e."<hr>");
    }          
}


    public function getConexion(){
        return $this->conexion;
    }





}





$conect = new conexion();


?>
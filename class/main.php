<?php
session_start();
require ("../page/php/Path_constantes.php");
require ("./acompanante.php");
require ("./paciente.php");
require ("./odontologo.php");
require ("./historial.php");
require ("./antecedente.php");
require("./diente.php");
require_once("./conexion.php");
//print_r ($_SESSION);


if (isset($_SESSION['btn_Dato2'])){
  
    $acompanante = new Acompanante($_SESSION['ci_acompanante'],$_SESSION['nombre_completo_acompanante'],$_SESSION['celular_acompanante'],$_SESSION['parentesco'],$_SESSION['direccion_acompanante']);
    $antecedentes_medicos = new Antecedentes_medicos(0,$_SESSION['alergias'],$_SESSION['medicacion'],$_SESSION['patologia'],$_SESSION['tratamiento_medico']);
    $paciente = new Paciente($antecedentes_medicos,$acompanante,$_SESSION['paciente']['ci_paciente'],$_SESSION['paciente']['nombre'],$_SESSION['paciente']['ap_paterno'],$_SESSION['paciente']['ap_materno'],$_SESSION['paciente']['fecha_nacimiento'],$_SESSION['paciente']['correo'],$_SESSION['paciente']['celular_paciente'],$_SESSION['paciente']['genero'],$_SESSION['paciente']['nacionalidad'],$_SESSION['paciente']['ocupacion'],$_SESSION['paciente']['estado_civil'],$_SESSION['paciente']['direccion_paciente']);
    $lista_dientes=array();
    $index=0;
    foreach($_SESSION['dientes'] as $diente){

        $tratamiento=$_SESSION['tratamiento']['Tratamiento'][$index];
        $dientes= new Dientes();
        $dientes -> insertar_diente($diente,$tratamiento);
        array_push($lista_dientes,$dientes);
        $index++;
    }
    $historial_clinico = new Historial_clinico($_SESSION['ci_odontologo'],$paciente,0,date('Y-m-d'),$lista_dientes);
    $conect->insertar_acompanante($acompanante);
    $conect->insertar_antecedente($paciente);
    $conect->insertar_paciente($paciente);
    $conect->insertar_historial($historial_clinico);
    $ci=$_SESSION['ci_odontologo'];
    $login=true;
    print_r($_SESSION);
    session_unset();
    $_SESSION['ci_odontologo']=$ci;
    $_SESSION['login']=$login;
    header("Location:".$_SERVER['Index']);
}

if (isset($_POST['btn_Registrar_Odontologo'])){
    $odontologo = new Odontologo($_POST['ci_doctor'],$_POST['contrasena'],$_POST['nombre_completo_odontologo'],$_POST['celular_odontologo'],$_POST['direccion_odontologo'],$_POST['especialidad']);
    $conect->insertar_odontologo($odontologo);
    header("Location:".$_SERVER['login']);

}

if(isset($_POST['btn_Iniciar_Sesion'])){
    print_r($_POST);
    if (!$conect->comprobar_inicio_sesion($_POST['ci'],$_POST['password'])){
        $_SESSION['ci_odontologo']=$_POST['ci'];
        echo("<hr>".$conect->comprobar_inicio_sesion($_POST['ci'],$_POST['password']));
        $_SESSION['login']=true;
        print_r($_SESSION);
        header("Location:".$_SERVER['Index']);
        
    }else{
        header("Location:".$_SERVER['login']);
    }
}


$datos=$conect->obtener_lista_pacientes();

/*foreach($datos as $paciente){
    echo "ci_paciente:".$paciente['ci_paciente']."<br>";
    echo "nombre:".$paciente['nombre']."<br>";
    echo "ap_paterno:".$paciente['ap_paterno']."<br>";
    echo "ap_materno:".$paciente['ap_materno']."<br>";
    echo "celular:".$paciente['celular']."<br>";
    echo "correo:".$paciente['correo']."<br>";
    echo "<hr>";
}
echo "<hr>";


foreach ($datos as $llave=>$datos){
    echo $llave."=".$datos."<br>";
}*/

$datos=$conect->obtener_datos_paciente(77777);
if(!empty($datos['ci_acompanante'])){
    $acompanante=new Acompanante($datos['ci_acompanante'],$datos['nombre_completo'],$datos['celular_acompanante'],$datos['parentesco'],$datos['direccion_acompanante']);
}else{
    $acompanante=null;
}

$antecedentes_medicos =new Antecedentes_medicos($datos['cod_antecedente'],$datos['alergias'],$datos['medicacion'],$datos['patologia'],$datos['tratamiento_medico']);
$paciente = new Paciente($antecedentes_medicos,$acompanante,$datos['ci_paciente'],$datos['nombre'],$datos['ap_paterno'],$datos['ap_materno'],$datos['fecha_nacimiento'],$datos['correo'],$datos['celular'],$datos['genero'],$datos['nacionalidad'],$datos['ocupacion'],$datos['estado_civil'],$datos['direccion']);




$datos=$conect->datos_generales_historial_consultas(77777);
$lista_consultas=array();
$indice=0;
foreach($datos as $consulta){
    $lista_consultas[$indice]= array(
        "cod_atencion" => $consulta['cod_atencion'],
        "ci_doctor" => $consulta['ci_doctor'],
        "fecha" => $consulta['fecha'],
        "dientes" => array()
    );
    $indice++;
}


$datos=$conect->obtener_historial_consultas_paciente(77777);

for ($index=0;$index<count($lista_consultas);$index++){
    $indice=0;
    foreach ($datos as $key => $value) {
        if($lista_consultas[$index]['cod_atencion']==$value['cod_atencion']){
            $lista_consultas[$index]['dientes'][$indice]=new Dientes($value['diente'],$value['tratamiento']);
            $indice++; 
        }
    }
}



?>



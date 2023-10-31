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

?>



<br>
<?php

require ("./acompanante.php");
require ("./paciente.php");
require ("./odontologo.php");
require ("./historial.php");
require ("./antecedente.php");
require_once("./conexion.php");
//print_r ($_POST);

//$persona = new Persona($_POST['ci'],$_POST['celular'],$_POST['direccion']);
//echo ("Esta es la clase personas<br>");
//$persona->mostrar_variables();



echo ("<hr>Esta es la clase acompañante<br>");
$acompanante = new Acompanante($_POST['ci_acompanante'],$_POST['nombre_completo'],$_POST['celular_acompanante'],$_POST['parentesco'],$_POST['direccion_acompanante']);

$acompanante->mostrar_acompanante();

echo ("<hr>Esta es la clase odontologo<br>");
$odontologo = new Odontologo($_POST['ci_doctor'],$_POST['contrasena'],$_POST['nombre_completo'],$_POST['celular_odontologo'],$_POST['especialidad'],$_POST['direccion_odontologo']);

$odontologo->mostrar_odontologo();




echo ("<hr>Esta es la clase antecedentes medicos<br>");
$antecedentes_medicos = new Antecedentes_medicos($_POST['cod_antecedentes'],$_POST['alergias'],$_POST['medicacion'],$_POST['patologia'],$_POST['observacion'],$_POST['tratamiento_medico']);

$antecedentes_medicos->mostrar_antecedentes();


echo ("<hr>Esta es la clase paciente<br>");
$paciente = new Paciente($antecedentes_medicos,$acompanante,$_POST['nombre'],$_POST['ap_paterno'],$_POST['ap_materno'],$_POST['fecha_nacimiento'],$_POST['correo'],$_POST['genero'],$_POST['nacionalidad'],$_POST['ocupacion'],$_POST['estado_civil'],$_POST['ci_paciente'],$_POST['celular_paciente'],$_POST['direccion_paciente']);

$paciente->mostrar_paciente();
echo ("<hr>");
$conect->insertar_Antecedente($paciente);
echo ("<hr>Esta es la clase historial clinico<br>");
$historial_clinico = new Historial_clinico($odontologo,$paciente,$_POST['cod_atencion'],$_POST['fecha'],$_POST['dientes'],$_POST['estado_diente'],$_POST['tratamiento'],$_POST['observacion']);

$historial_clinico->mostrar_historial();

?>



<br>
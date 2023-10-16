<?php

require ("./acompanante.php");
require ("./paciente.php");
require ("./odontologo.php");
require ("./historial.php");
require ("./antecedentes.php");
//print_r ($_POST);

//$persona = new Persona($_POST['ci'],$_POST['celular'],$_POST['direccion']);
//echo ("Esta es la clase personas<br>");
//$persona->mostrar_variables();

echo ("<hr>Esta es la clase paciente<br>");
$paciente = new Paciente($acompanante,$antecedentes,$_POST['ci_paciente'],$_POST['nombre'],$_POST['ap_materno'],$_POST['ap_paterno'],$_POST['fecha_nacimiento'],$_POST['correo'],$_POST['genero'],$_POST['nacionalidad'],$_POST['ocupacion'],$_POST['estado_civil'],$_POST['direccion_paciente']);

$paciente->mostrar_paciente();



echo ("<hr>Esta es la clase acompañante<br>");
$acompanante = new Acompañante($_POST['ci_acompanante'],$_POST['nombre_completo'],$_POST['celular_acapanante'],$_POST['parentesco'],$_POST['direccion_acompanante']);

$acompanante->mostrar_acompanante();

echo ("<hr>Esta es la clase odontologo<br>");
$odontologo = new Odontologo($_POST['ci_doctor'],$_POST['contrasena'],$_POST['nombre_completo'],$_POST['celular_odontologo'],$_POST['especialidad'],$_POST['direccion_odontologo']);

$odontologo->mostrar_odontologo();


echo ("<hr>Esta es la clase historial clinico<br>");
$historial_clinico = new Historial_clinico($odontologo,$paciente,$_POST['cod_atencion'],$_POST['fecha'],$_POST['estado_dientes'],$_POST['dientes'],$_POST['tratamiento']);

$historial_clinico->mostrar_historial();


echo ("<hr>Esta es la clase antecedentes medicos<br>");
$antecedentes_medicos = new Antecedentes_medicos($_POST['cod_antecedente'],$_POST['alergias'],$_POST['medicacion'],$_POST['patologia'],$_POST['observacion'],$_POST['tratamiento_medico']);

$antecedentes_medicos->mostrar_antecedentes();
?>



<br>


<h1>hola mundo </h1>

<h2>
    commits
</h2>

<h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla inventore cum voluptate hic accusamus minus eius praesentium reprehenderit rerum animi perferendis possimus, a voluptatibus officia nisi, eaque distinctio id expedita. </h1>
<h2>
    holis
</h2>
<h2>
   prueba
</h2>sadasdasdasd
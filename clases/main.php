<?php

require ("./acompanante.php");
require ("./paciente.php");
//print_r ($_POST);

//$persona = new Persona($_POST['ci'],$_POST['celular'],$_POST['direccion']);
//echo ("Esta es la clase personas<br>");
//$persona->mostrar_variables();
echo ("<hr>Esta es la clase pacient<br>");
$paciente = new Paciente($_POST['nombre'],$_POST['ap_materno'],$_POST['ap_paterno'],$_POST['fecha_nacimiento'],$_POST['correo'],$_POST['genero'],$_POST['nacionalidad'],$_POST['ocupacion'],$_POST['estado_civil'],$_POST['ci_paciente'],$_POST['celular_paciente'],$_POST['direccion_paciente']);

$paciente->mostrar();



echo ("<hr>Esta es la clase acompañante<br>");
$acompanate = new Acompañante($paciente,$_POST['nombre_completo'],$_POST['parentesco'],$_POST['ci_acompanante'],$_POST['celular_acompanante'],$_POST['direccion_acompanante']);


$acompanate->mostrar_informacion();

?><br>


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
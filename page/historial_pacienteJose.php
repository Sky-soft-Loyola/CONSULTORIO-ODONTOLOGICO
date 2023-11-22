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





$datos=$conect->obtener_datos_paciente(9998877);
if(!empty($datos['ci_acompanante'])){
    $acompanante=new Acompanante($datos['ci_acompanante'],$datos['nombre_completo'],$datos['celular_acompanante'],$datos['parentesco'],$datos['direccion_acompanante']);
}else{
    $acompanante=null;
}

$antecedentes_medicos =new Antecedentes_medicos($datos['cod_antecedente'],$datos['alergias'],$datos['medicacion'],$datos['patologia'],$datos['tratamiento_medico']);
$paciente = new Paciente($antecedentes_medicos,$acompanante,$datos['ci_paciente'],$datos['nombre'],$datos['ap_paterno'],$datos['ap_materno'],$datos['fecha_nacimiento'],$datos['correo'],$datos['celular'],$datos['genero'],$datos['nacionalidad'],$datos['ocupacion'],$datos['estado_civil'],$datos['direccion']);




$datos=$conect->datos_generales_historial_consultas(9998877);
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


$datos=$conect->obtener_historial_consultas_paciente(9998877);

for ($index=0;$index<count($lista_consultas);$index++){
    $indice=0;
    foreach ($datos as $key => $value) {
        if($lista_consultas[$index]['cod_atencion']==$value['cod_atencion']){
            $lista_consultas[$index]['dientes'][$indice]=new Dientes($value['diente'],$value['tratamiento']);
            $indice++; 
        }
    }
}

$odontologo=$conect->obtener_datos_odontologo($lista_consultas[1]['ci_doctor']);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/html.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<?php
require_once ("../page/php/Path_constantes.php");
?>
 <div class="container">
 <h1 class="text-center">Historial Clinico</h1>
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>Paciente</legend>
                <div class="col">
                <label for="Nombre">Nombre</label>
                <input class="form form-control" readonly type="text" value="<?php echo $paciente->getNombre();?>">
                </div>
                <label for="Apellido_Paterno">Apellido_Paterno</label>
                <input class="form form-control" readonly type="text" value="<?php echo $paciente->getAp_paterno();?>">
                <label for="Apellido_Materno">Apellido_Materno</label>
                <input class="form form-control" readonly type="text" value="<?php echo $paciente->getAp_materno();?>">
            </fieldset>
        </div>

    </div>

    <?php 
    foreach($lista_consultas as $llave => $valor){
      
        ?>
        <div class="row">
            <fieldset>
                <legend>Consulta <?php echo $llave+1;?></legend>
                <label for="" class="form form-label m-2">Fecha</label> <input type="date" readonly class="form-control" value="<?php echo $valor['fecha'];?>">
                <label for="" class="form form-label m-2">Especialidad</label> <input type="text" readonly class="form-control" value="<?php echo $odontologo['especialidad'];?>">
                <label for="" class="form form-label m-2">nombre completo</label> <input type="text" readonly class="form-control" value="<?php echo $odontologo['nombre_completo'];?>">
            </fieldset>

            <?php 
            $j=0;
            for ($indice=1;$indice<=32;$indice++){
                
                if($indice==$valor['dientes'][$j]->getNumero_diente()){ 
                    ?>                
                    <div class="col"><input type="checkbox" checked title="<?php echo $valor['dientes'][$j]->getTratamiento();?>" disabled id=""><?php echo $indice;?></div>  
                <?php 
                if($j+1<count($valor['dientes'])){
                    $j++;     
                }
                
                }else{

                ?>   <div class="col"><input type="checkbox"  title="" disabled id=""><?php echo $indice;?></div>  
                
                <?php 
                
                if ($indice==16){
                    echo "</div><div class='row'>";
                }}
                }
                ?>
           
            <?php echo "</div>"; }?>

        </div>






</body>
</html>
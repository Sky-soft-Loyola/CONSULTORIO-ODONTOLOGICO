<?php
session_start();
require ("../page/php/Path_constantes.php");
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['paciente']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['antecedente']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['odontologo']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['acompanante']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['historial']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['diente']);
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['conexion']);

$btn_colors=array(
    "Curacion"=>"btn-outline-danger",
    "Limpieza"=>"btn-outline-info",
    "Prostodoncia"=>"btn-outline-primary",
    "Endodoncia"=>"btn-outline-success",
    "Extracción"=>"btn-outline-warning",
);

$datos=$conect->obtener_datos_paciente($_GET['ci']);
$_SESSION['p_consulta']=$datos;
$_SESSION['p_consulta']["btn_nueva_consulta"]="";
if(!empty($datos['ci_acompanante'])){
    $acompanante=new Acompanante($datos['ci_acompanante'],$datos['nombre_completo'],$datos['celular_acompanante'],$datos['parentesco'],$datos['direccion_acompanante']);
}else{
    $acompanante=null;
}

$antecedentes_medicos =new Antecedentes_medicos($datos['cod_antecedente'],$datos['alergias'],$datos['medicacion'],$datos['patologia'],$datos['tratamiento_medico']);
$paciente = new Paciente($antecedentes_medicos,$acompanante,$datos['ci_paciente'],$datos['nombre'],$datos['ap_paterno'],$datos['ap_materno'],$datos['fecha_nacimiento'],$datos['correo'],$datos['celular'],$datos['genero'],$datos['nacionalidad'],$datos['ocupacion'],$datos['estado_civil'],$datos['direccion']);




$datos=$conect->datos_generales_historial_consultas($_GET['ci']);
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


$datos=$conect->obtener_historial_consultas_paciente($_GET['ci']);

for ($index=0;$index<count($lista_consultas);$index++){
    $indice=0;
    foreach ($datos as $key => $value) {
        if($lista_consultas[$index]['cod_atencion']==$value['cod_atencion']){
            $lista_consultas[$index]['dientes'][$indice]=new Dientes($value['diente'],$value['tratamiento']);
            $indice++; 
        }
    }
}

$odontologo=$conect->obtener_datos_odontologo($lista_consultas[0]['ci_doctor']);
$lista_consultas=array_reverse($lista_consultas);

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
        <div class="col"><a href="index.php" class="form-control btn btn-warning">Atras</a></div>
        <div class="col"><a href="<?php echo $_SERVER['Dientes'];?>" class="form-control btn btn-info">Nueva historia clinica</a></div>
    </div>
    <fieldset>
        <div class="row">
        
                    <legend>Paciente</legend>
                    <div class="col">
                    <label for="Nombre">Nombre</label>
                    <input class="form form-control" readonly type="text" value="<?php echo $paciente->getNombre();?>">
                    </div>
                    <div class="col">
                        <label for="Apellido_Paterno">Apellido_Paterno</label>
                        <input class="form form-control" readonly type="text" value="<?php echo $paciente->getAp_paterno();?>">
                    </div>
                    <div class="col">
                    <label for="Apellido_Materno">Apellido_Materno</label>
                    <input class="form form-control" readonly type="text" value="<?php echo $paciente->getAp_materno();?>">
                    </div>
        </div>  
    </fieldset>

    <?php 
    foreach($lista_consultas as $llave => $valor){
      
        ?>
        <div class="row mt-2 mb-2 pt-2 pb-2 border">
            <fieldset>
                <legend>Consulta <?php echo $llave+1;?></legend>
                <div class="row mb-2">
                    <div class="col">
                        <label for="" class="form form-label m-2">Fecha</label> <input type="date" readonly class="form-control" value="<?php echo $valor['fecha'];?>">
                    </div>
                    <div class="col">
                        <label for="" class="form form-label m-2">Especialidad</label> <input type="text" readonly class="form-control" value="<?php echo $odontologo['especialidad'];?>">
                    </div>
                    <div class="col">
                        <label for="" class="form form-label m-2">Odontologo</label> <input type="text" readonly class="form-control" value="<?php echo $odontologo['nombre_completo'];?>">
                    </div>
                    
                
                </div> 
            </fieldset>
            <?php 
            $j=0;
            for ($indice=1;$indice<=32;$indice++){
                
                if($indice==$valor['dientes'][$j]->getNumero_diente()){ 
                    ?><div class="col w-50">
                    <input type="checkbox" class="btn-check" checked  id="btn-check-outlined-<?php echo $llave."-".$indice;?>" autocomplete="off">
                    <label class="btn <?php echo $btn_colors[$valor['dientes'][$j]->getTratamiento()];?>" for="btn-check-outlined-<?php echo $llave."-".$indice;?>" title="<?php echo $valor['dientes'][$j]->getTratamiento();?>"><?php echo $indice;?></label>      
                    </div>  
                <?php 
                if($j+1<count($valor['dientes'])){
                    $j++;     
                }
                
                }else{

                ?>   <div class="col">
                    <input type="checkbox" class="btn-check" disabled id="btn-check-outlined-<?php echo $llave."-".$indice;?>" autocomplete="off">
                    <label class="btn btn-outline-info" for="btn-check-outlined-<?php echo $llave."-".$indice;?>" title=""><?php echo $indice;?></label>  
                    </div>  
                
                <?php 
                
                }
                if ($indice==16){
                    echo "<hr class='mt-2'>";
                }
                if ($indice==32){
                    echo "</div><div class='row'>";
                }

                }
                ?>
           
            <?php echo "</div>"; }?>

        </div>


   





</body>
</html>

    
   



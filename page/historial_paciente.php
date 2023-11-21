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

    
   



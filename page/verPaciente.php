<?php
require ("./php/Path_constantes.php");


?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Paciente</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../page/cssNav/estilos.css">
</head>
<body>
<?php 
    include_once ("../page/navegador.php");
    ?>
<?php

$paciente=$_SESSION['datos_paciente'];

?>
<section class="content">
    <div class="container mt-5">
    <div class="fondo-opaco">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>VER DATOS DEL PACIENTE</h2>

                  
                </div>
                <form action="<?php echo $_SERVER['Main']?>" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                      
                        <hr>
                        <a   href="historial_paciente.php?ci=<?php echo $paciente['ci_paciente']; ?>" class="btn btn-secondary">CREAR NUEVA CONSULTA</a>
                        <div class="form-group">
                          

                        <div class="mb-10 row">
                        
                          <label for="ci_paciente" class="col-sm-6 col-form-label neg">CARNET DE IDENTIDAD:</label>
                              <div class="col-sm-5  ">
                                <input type="text" class="form-control-plaintext neg" name="ci_paciente" value="<?php echo $paciente['ci_paciente']; ?>" readonly>
                          <br></div></div>

                          <div class="mb-10 row">
                                        <label for="nombre" class="col-sm-5 col-form-label neg">NOMBRE:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg " name="nombre" value="<?php echo $paciente['nombre']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ap_paterno" class="col-sm-5 col-form-label neg">APELLIDO PATERNO:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg " name="ap_paterno" value="<?php echo $paciente['ap_paterno']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ap_materno"class="col-sm-5 col-form-label neg">APELLIDO MATERNO:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg " name="ap_materno" value="<?php echo $paciente['ap_materno']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="fecha_nacimiento"  class="col-sm-5 col-form-label neg">FECHA DE NACIMIENTO:</label>
                                        <div class="col-sm-7">
                                        <input type="date" class="form-control-plaintext neg " readonly name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="correo" class="col-sm-5 col-form-label neg">CORREO ELECTRÓNICO:</label>
                                        <div class="col-sm-7">
                                        <input type="email" class="form-control-plaintext neg " name="correo" value="<?php echo $paciente['correo']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="celular" class="col-sm-5 col-form-label neg">CELULAR:</label>
                                        <div class="col-sm-7">
                                        <input type="number" class="form-control-plaintext neg  name="celular_paciente" value="<?php echo $paciente['celular']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="direccion" class="col-sm-5 col-form-label neg">DIRECCIÓN:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg" name="direccion_paciente" value="<?php echo $paciente['direccion']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">

                                        <label for="genero" class="col-sm-5 col-form-label neg">GÉNERO:</label>
                                        <div class="form-check col-sm-7">
                                        <input type="radio" class="form-check-control" disabled name="" value="M" <?php echo ($paciente['genero'] == 'M') ? 'checked' : ''; ?>>
                                        <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">MASCULINO</label><br>

                                        <input type="radio" class="form-check-control" disabled name="" value="F" <?php echo ($paciente['genero'] == 'F') ? 'checked' : ''; ?>>
                                        <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">FEMENINO</label>
                                      </div><br></div></div><br>

                          <div class="mb-10 row">
                                        <label for="nacionalidad" class="col-sm-5 col-form-label neg">NACIONALIDAD:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg " name="nacionalidad" value="<?php echo $paciente['nacionalidad']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ocupacion" class="col-sm-5 col-form-label neg">OCUPACIÓN:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg" name="ocupacion" value="<?php echo $paciente['ocupacion']; ?>" readonly>
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="estado_civil" class="col-sm-5 col-form-label neg">ESTADO CIVIL:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control-plaintext neg " name="estado_civil" value="<?php echo $paciente['estado_civil']; ?>" readonly>
                                        <br></div></div>

<!--DATOS HIDDEN --- ANTENCEDENTES-->
<input type="hidden" name="genero" value="<?php echo $paciente['genero'];?>">
<input type="hidden" name="cod_antecedente" value="<?php echo $paciente['cod_antecedente'];?>">

<div class="mb-10 row">
<label for="alergias" class="col-sm-5 col-form-label neg">ALERGIAS:</label>
<div class="col-sm-7">
<input type="text" class="form-control-plaintext neg " name="alergias" value="<?php echo $paciente['alergias']; ?>" readonly>
<br></div></div>

<div class="mb-10 row">
<label for="medicacion" class="col-sm-5 col-form-label neg">MEDICACÍON:</label>
<div class="col-sm-7">
<input type="text" class="form-control-plaintext neg" name="medicacion" value="<?php echo $paciente['medicacion']; ?>" readonly>
<br></div></div>

<div class="mb-10 row">
<label for="patologia" class="col-sm-5 col-form-label neg">PATOLOGÍA:</label>
<div class="col-sm-7">
<input type="text" class="form-control-plaintext neg " name="patologia" value="<?php echo $paciente['patologia']; ?>" readonly>
<br></div></div>

<div class="mb-10 row">
<label for="tratamiento_medico" class="col-sm-5 col-form-label neg">TRATAMIENTO MEDICO:</label>
<div class="col-sm-7">
<input type="text" class="form-control-plaintext neg " name="tratamiento_medico" value="<?php echo $paciente['tratamiento_medico']; ?>" readonly>
<br></div></div>
<input type="hidden" value="<?php echo ($paciente['ci_acompanante'] != null ) ? $paciente['ci_acompanante'] : 0; ?>" name="ci_acompanante">
<input type="hidden" value="<?php echo $paciente['nombre_completo'];?> " name="nombre_completo">
<input type="hidden" value="<?php echo $paciente['celular_acompanante'];?> " name="celular_acompanante">
<input type="hidden" value="<?php echo $paciente['parentesco'];?> " name="parentesco">
<input type="hidden" value="<?php echo $paciente['direccion_acompanante'];?> " name="direccion_acompanante">

<a  href="index.php" class="btn btn-secondary">VOLVER</a>
                                      
                                        
                                      </fieldset>
                                    </div>
                                    <hr>
                                  </div>
                                </div>
                              </div>
                           
                </form>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div></div>
    <?php
      require 'verAcompanante.php'; 
      ?>

      <hr>
</section>
  
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

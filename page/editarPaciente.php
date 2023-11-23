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

<section class="content">
    <div class="container mt-5">
    <div class="fondo-opaco">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>DATOS DEL PACIENTE</h2>
                </div>
                <form action="<?php echo $_SERVER['Main']?>" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <hr>
                        <div class="form-group">
                        <div class="mb-10 row">
                          <label for="ci_paciente" class="col-sm-6 col-form-label neg">CARNET DE IDENTIDAD:</label>
                              <div class="col-sm-3">
                                <input type="text" readonly class="form-control-plaintext neg" name="ci_paciente" value="<?php echo $paciente['ci_paciente']; ?>" readonly>
                          <br></div></div>

                          <div class="mb-10 row">
                                        <label for="nombre" class="col-sm-5 col-form-label neg">NOMBRE:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $paciente['nombre']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ap_paterno" class="col-sm-5 col-form-label neg">APELLIDO PATERNO:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_paterno" value="<?php echo $paciente['ap_paterno']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ap_materno"class="col-sm-5 col-form-label neg">APELLIDO MATERNO:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_materno" value="<?php echo $paciente['ap_materno']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="fecha_nacimiento"  class="col-sm-5 col-form-label neg">FECHA DE NACIMIENTO:</label>
                                        <div class="col-sm-7">
                                        <input type="date" class="form-control" readonly name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="correo" class="col-sm-5 col-form-label neg">CORREO:</label>
                                        <div class="col-sm-7">
                                        <input type="email" class="form-control" name="correo" value="<?php echo $paciente['correo']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="celular" class="col-sm-5 col-form-label neg">CELULAR:</label>
                                        <div class="col-sm-7">
                                        <input type="number" class="form-control" name="celular_paciente" value="<?php echo $paciente['celular']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="direccion" class="col-sm-5 col-form-label neg">DIRECCIÓN:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="direccion_paciente" value="<?php echo $paciente['direccion']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">

                                        <label for="genero" class="col-sm-5 col-form-label neg">GENERO:</label>
                                        <div class="form-check col-sm-7">
                                        <input type="radio" class="form-check-control" disabled name="" value="M" <?php echo ($paciente['genero'] == 'M') ? 'checked' : ''; ?>>
                                        <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">MASCULINO</label><br>

                                        <input type="radio" class="form-check-control" disabled name="" value="F" <?php echo ($paciente['genero'] == 'F') ? 'checked' : ''; ?>>
                                        <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">FEMENINO</label>
                                      </div><br></div></div><br>

                          <div class="mb-10 row">
                                        <label for="nacionalidad" class="col-sm-5 col-form-label neg">NACIONALIDAD:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nacionalidad" value="<?php echo $paciente['nacionalidad']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="ocupacion" class="col-sm-5 col-form-label neg">OCUPACIÓN:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ocupacion" value="<?php echo $paciente['ocupacion']; ?>">
                                        <br></div></div>

                          <div class="mb-10 row">
                                        <label for="estado_civil" class="col-sm-5 col-form-label neg">ESTADO CIVIL:</label>
                                        <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado_civil" value="<?php echo $paciente['estado_civil']; ?>">
                                        <br></div></div>

<!--DATOS HIDDEN --- ANTENCEDENTES-->
<input type="hidden" name="genero" value="<?php echo $paciente['genero'];?>">
<input type="hidden" name="cod_antecedente" value="<?php echo $paciente['cod_antecedente'];?>">
<input type="hidden" value="<?php echo $paciente['alergias'];?>" name="alergias">
<input type="hidden" value="<?php echo $paciente['medicacion'];?>" name="medicacion">
<input type="hidden" value="<?php echo $paciente['patologia'];?>" name="patologia">
<input type="hidden" value="<?php echo $paciente['tratamiento_medico'];?>" name="tratamiento_medico">

<input type="hidden" value="<?php echo ($paciente['ci_acompanante'] != null ) ? $paciente['ci_acompanante'] : 0; ?>" name="ci_acompanante">
<input type="hidden" value="<?php echo $paciente['nombre_completo'];?> " name="nombre_completo">
<input type="hidden" value="<?php echo $paciente['celular_acompanante'];?> " name="celular_acompanante">
<input type="hidden" value="<?php echo $paciente['parentesco'];?> " name="parentesco">
<input type="hidden" value="<?php echo $paciente['direccion_acompanante'];?> " name="direccion_acompanante">


                                        <input type="submit" value="Guardar" class="btn btn-info mt-12 text-light" name="btn_Actualizar">
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

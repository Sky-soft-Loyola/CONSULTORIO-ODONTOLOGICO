<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Paciente</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<?php
$paciente = array(
    'ci_paciente' => '123456',
    'nombre' => 'Juan',
    'ap_paterno' => 'Pérez',
    'ap_materno' => 'Gómez',
    'fecha_nacimiento' => '1990-01-01',
    'correo' => 'juan@example.com',
    'celular' => '12345678',
    'direccion' => 'Calle 123',
    'genero' => 'M',
    'nacionalidad' => 'Boliviana',
    'ocupacion' => 'Profesional',
    'estado_civil' => 'Soltero'
);

?>
<section class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>DATOS DEL PACIENTE</h2>
                </div>
                <form action="index.php" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <hr>
                        <div class="form-group">
                        <fieldset>
                            <label for="ci_paciente">CARNET DE IDENTIDAD:</label>
                            <input type="text" class="form-control" name="ci_paciente" value="<?php echo $paciente['ci_paciente']; ?>" readonly>
                              <br>
                            <label for="nombre">NOMBRE:</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $paciente['nombre']; ?>">
                              <br>
                            <label for="ap_paterno">APELLIDO PATERNO:</label>
                            <input type="text" class="form-control" name="ap_paterno" value="<?php echo $paciente['ap_paterno']; ?>">
                              <br>
                            <label for="ap_materno">APELLIDO MATERNO:</label>
                            <input type="text" class="form-control" name="ap_materno" value="<?php echo $paciente['ap_materno']; ?>">
                              <br>
                            <label for="fecha_nacimiento">FECHA DE NACIMIENTO:</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>">
                              <br>
                            <label for="correo">CORREO:</label>
                            <input type="email" class="form-control" name="correo" value="<?php echo $paciente['correo']; ?>">
                              <br>
                            <label for="celular">CELULAR:</label>
                            <input type="number" class="form-control" name="celular_paciente" value="<?php echo $paciente['celular']; ?>">
                              <br>
                            <label for="direccion">DIRECCIÓN:</label>
                            <input type="text" class="form-control" name="direccion_paciente" value="<?php echo $paciente['direccion']; ?>">
                              <br>
                            <label for="genero">GENERO:</label>
                            <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="M" <?php echo ($paciente['genero'] == 'M') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">MASCULINO</label><br>
                            <input type="radio" class="form-check-input" name="genero" value="F" <?php echo ($paciente['genero'] == 'F') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">FEMENINO</label>
                          </div>

                              <br>
                            <label for="nacionalidad">NACIONALIDAD:</label>
                            <input type="text" class="form-control" name="nacionalidad" value="<?php echo $paciente['nacionalidad']; ?>">
                              <br>
                            <label for="ocupacion">OCUPACIÓN:</label>
                            <input type="text" class="form-control" name="ocupacion" value="<?php echo $paciente['ocupacion']; ?>">
                              <br>
                            <label for="estado_civil">ESTADO CIVIL:</label>
                            <input type="text" class="form-control" name="estado_civil" value="<?php echo $paciente['estado_civil']; ?>">
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
    </div>
    <?php
      require 'verAcompanante.php'; 
      ?>
      <div class="card-footer d-grid  col-2 mx-auto text-center ">
        <button href="index.php" type="submit" class="btn btn-info sm-5 btn-lg">GUARDAR</button>
      </div>
      <hr>
</section>
  
  </form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Paciente</title>
  <link rel="stylesheet" href="../test/css/bootstrap.min.css">
  <link rel="stylesheet" href="../test/page/cssNav/estilos.css">
</head>
<body>
<?php 
    include_once ("../test/page/navegador.php");
    ?>
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
    <div class="fondo-opaco">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>EDITAR DATOS DEL PACIENTE</h2>
                </div>
                <form action="index.php" method="post">
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
                            <label for="fecha_nacimiento" class="col-sm-5 col-form-label neg">FECHA DE NACIMIENTO:</label>
                            <div class="col-sm-7">
                            <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>">
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
                            <input type="radio" class="form-check-control" name="genero" value="M" <?php echo ($paciente['genero'] == 'M') ? 'checked' : ''; ?>>
                            <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">MASCULINO</label><br>

                            <input type="radio" class="form-check-control" name="genero" value="F" <?php echo ($paciente['genero'] == 'F') ? 'checked' : ''; ?>>
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
  
  </form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../test/js/bootstrap.min.js"></script>
</body>
</html>

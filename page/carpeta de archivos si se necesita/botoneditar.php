<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver y Editar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <!--boton de Simulación de la tabla paciente*/ -->
  
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
<!--boton de Editar*/ -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">EDITAR</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS DE PACIENTE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../page/index.php" method="post">
                    
          <div class="mb-3">
          <fieldset>
            <div class="mb-10 row">
              <label for="ci_paciente" class="col-sm-6 col-form-label">CARNET DE IDENTIDAD:</label>
                  <div class="col-sm-3">
                    <input type="text" readonly class="form-control-plaintext" name="ci_paciente" value="<?php echo $paciente['ci_paciente']; ?>" readonly>
              </div></div>

              <div class="mb-10 row">
                            <label for="nombre" class="col-sm-5 col-form-label">NOMBRE:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="nombre" value="<?php echo $paciente['nombre']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="ap_paterno" class="col-sm-5 col-form-label">APELLIDO PATERNO:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="ap_paterno" value="<?php echo $paciente['ap_paterno']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="ap_materno"class="col-sm-5 col-form-label">APELLIDO MATERNO:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="ap_materno" value="<?php echo $paciente['ap_materno']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="fecha_nacimiento" class="col-sm-5 col-form-label">FECHA DE NACIMIENTO:</label>
                            <div class="col-sm-7">
                            <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="correo" class="col-sm-5 col-form-label">CORREO:</label>
                            <div class="col-sm-7">
                            <input type="email" class="form-control" name="correo" value="<?php echo $paciente['correo']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="celular" class="col-sm-5 col-form-label">CELULAR:</label>
                            <div class="col-sm-7">
                            <input type="number" class="form-control" name="celular_paciente" value="<?php echo $paciente['celular']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="direccion" class="col-sm-5 col-form-label">DIRECCIÓN:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="direccion_paciente" value="<?php echo $paciente['direccion']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="genero">GENERO:</label>
                            <div class="form-check col-sm-7">
                            <input type="radio" class="form-check-control" name="genero" value="M" <?php echo ($paciente['genero'] == 'M') ? 'checked' : ''; ?>>
                            <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">MASCULINO</label><br>

                            <input type="radio" class="form-check-control" name="genero" value="F" <?php echo ($paciente['genero'] == 'F') ? 'checked' : ''; ?>>
                            <label class="col-sm-5 col-form-check-label" for="flexRadioDefault1">FEMENINO</label>
                          </div></div></div>

              <div class="mb-10 row">
                            <label for="nacionalidad" class="col-sm-5 col-form-label">NACIONALIDAD:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="nacionalidad" value="<?php echo $paciente['nacionalidad']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="ocupacion" class="col-sm-5 col-form-label">OCUPACIÓN:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="ocupacion" value="<?php echo $paciente['ocupacion']; ?>">
                            </div></div>

              <div class="mb-10 row">
                            <label for="estado_civil" class="col-sm-5 col-form-label">ESTADO CIVIL:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" name="estado_civil" value="<?php echo $paciente['estado_civil']; ?>">
                            </div></div>
                          </fieldset>

                          <?php
                          require_once("../page/verAcompanante.php");
                          ?>
                          <div class="modal-footer">
        <button type="button" href="../page/editarAcompanante.php" class="btn btn-success" data-bs-dismiss="modal">EDITAR ACOMPAÑANTE</button>
        <button type="button" href="../page/index.php" class="btn btn-primary">GUARDAR</button>
      </div>


          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
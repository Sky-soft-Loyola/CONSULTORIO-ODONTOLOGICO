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
        <form action="index.php" method="post">
                    
          <div class="mb-3">
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
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" href="editarAcompanante.php" class="btn btn-success" data-bs-dismiss="modal">EDITAR ACOMPAÑANTE</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
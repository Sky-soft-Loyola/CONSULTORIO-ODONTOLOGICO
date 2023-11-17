<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Acompañante</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php

$acompanante = array(
    'ci_acompanante' => '654321',
    'nombre_completo' => 'Ana Pérez',
    'celular' => '87654321',
    'parentesco' => 'Amigo',
    'direccion' => 'Av. Principal'
);
?>
<section class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>DATOS DEL ACOMPAÑANTE</h2>
                </div>
                <form action="editarPaciente.php" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <hr>
                        <div class="form-group">
                        <div class="container mt-5">
                            <form action="guardar_edicion.php" method="post">
    
                            <fieldset>
                                <label for="ci_acompanante">CARNET DE IDENTIDAD DEL ACOMPAÑANTE:</label>
                                <input type="text" class="form-control" name="ci_acompanante" value="<?php echo $acompanante['ci_acompanante']; ?>"><br>

                                <label for="nombre_acompanante">NOMBRE COMPLETO DEL ACOMPAÑANTE:</label>
                                <input type="text" class="form-control" name="nombre_acompanante" value="<?php echo $acompanante['nombre_completo']; ?>"><br>

                                <label for="celular">CELULAR:</label>
                                <input type="number" class="form-control" name="celular_acompanante" value="<?php echo $acompanante['celular']; ?>"><br>

                                <label for="parentesco">PARENTESCO:</label>
                                <input type="text" class="form-control" name="parentesco" value="<?php echo $acompanante['parentesco']; ?>"><br>

                                <label for="direccion">DIRECCIÓN:</label>
                                <input type="text" class="form-control" name="direccion_acompanante" value="<?php echo $acompanante['direccion']; ?>"><br>

                            </fieldset>
                            </div>
                        <hr>
                      </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success btn-lg">GUARDAR</button>
                    </div>
                  </div>
                </form>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

  </form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

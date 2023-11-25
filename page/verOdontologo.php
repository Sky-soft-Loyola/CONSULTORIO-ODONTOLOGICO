<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Odontologo</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../page/cssNav/estilos.css">
</head>
<body>
<?php 
    include_once("./php/Path_constantes.php");
    include_once ("../page/navegador.php");
 
    $odontologo=$_SESSION['odonto'];
    
    ?>
<section class="content">
    <div class="container mt-5">
    <div class="fondo-opaco">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
                <div class="card bg-primary text-center text-light">
                    <h2>DATOS DEL ODONTOLOGO</h2>
                </div>
                <form action="index.php" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <hr>
                        <div class="form-group">

                        <fieldset>


                        <div class="mb-10 row">
                          <label for="ci_doctor" class="col-sm-5 col-form-label estilo-personalizado neg">CARNET DE IDENTIDAD DEL ODONTOLOGO:</label>
                          <div class="col-sm-7">
                          <input type="text" readonly readonly class="form-control-plaintext neg" name="ci_doctor" value="<?php echo $odontologo['ci_doctor']; ?>" readonly>
                          <br></div></div>

                          <div class="mb-10 row">
                          <label for="contrasena" class="col-sm-5 col-form-label estilo-personalizado neg">CONTRASEÑA:</label>
                          <div class="col-sm-7">
                          <input type="password" readonly class="form-control" name="contrasena" value="<?php echo $odontologo['contraseña']; ?>"><br>
                          </div></div>

                          <div class="mb-10 row">
                          <label for="nombre_completo" class="col-sm-5 col-form-label estilo-personalizado neg">NOMBRE COMPLETO DEL DOCTOR:</label>
                          <div class="col-sm-7">
                          <input type="text" readonly class="form-control" name="nombre_completo" value="<?php echo $odontologo['nombre_completo']; ?>"><br>
                          </div></div>

                          <div class="mb-10 row">
                          <label for="celular" class="col-sm-5 col-form-label estilo-personalizado neg">CELULAR:</label>
                          <div class="col-sm-7">
                          <input type="number" readonly class="form-control" name="celular_odontologo" value="<?php echo $odontologo['celular']; ?>"><br>
                          </div></div>


                          <div class="mb-10 row">
                          <label for="direccion" class="col-sm-5 col-form-label estilo-personalizado neg">DIRECCIÓN:</label>
                          <div class="col-sm-7">
                          <input type="text" readonly class="form-control" name="direccion_odontologo" value="<?php echo $odontologo['direccion']; ?>"><br>
                          </div></div>


                          <div class="mb-10 row">
                          <label for="especialidad" class="col-sm-5 col-form-label estilo-personalizado neg">ESPECIALIDAD:</label>
                          <div class="col-sm-7">
                          <input type="text" readonly class="form-control" name="especialidad" value="<?php echo $odontologo['especialidad']; ?>"><br>
                          </div></div>

                        </fieldset>


                      </div>
                    </div>
                  </div>
                  <div class="container mt-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?php echo $_SERVER['editar_odonto'];?>" class="btn btn-warning mt-12">EDITAR</a>
        <a href="index.php" type="submit" class="btn btn-danger mt-12">CANCELAR</a>
                </form>
                

</div>

<script>
    function confirmarEdicion() {
        // Utiliza la función confirm() de JavaScript
        var confirmacion = confirm('¿Está seguro de editar estos datos?');

        // Si el usuario hace clic en "Aceptar", la acción se realizará
        if (confirmacion) {
            window.location.href = "../page/index.php";
        }

        // Devuelve false para evitar que el enlace se siga automáticamente
        return false;
    }
</script>

                <hr>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div></div>
</section>

  </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>
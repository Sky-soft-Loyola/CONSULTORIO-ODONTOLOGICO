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
                <form action="<?php echo $_SERVER['Main'];?>" method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <hr>
                        <div class="form-group">

                        <fieldset>


                        <div class="mb-5 row">
                          <label for="contrasena"  class="col-sm-5 col-form-label estilo-personalizado neg">CONTRASEÑA ACTUAL:</label>
                          <div class="col-sm-7">
                          <input type="password" required  class="form-control" name="contrasena" id="contrasena" value="">
                          
                          </div> 
                        </div>

                        <div class="mb-5 row">
                          <label for="contrasena" class="col-sm-5 col-form-label estilo-personalizado neg">NUEVA CONTRASEÑA:</label>
                          <div class="col-sm-7">
                          <input type="password" required  class="form-control" name="nueva_contra" id="nueva_contra" value="">
                          
                          </div>
                        </div>

                        <div class="mb-5 row">
                          <label for="contrasena" class="col-sm-5 col-form-label estilo-personalizado neg">REPITA NUEVA CONTRASEÑA:</label>
                          <div class="col-sm-7">
                          <input type="password" required  class="form-control" name="r_nueva_contra" id="r_nueva_contra" value="">
                          
                          </div>
                        </div>


                        </fieldset>


                      </div>
                    </div>
                  </div>
                  <div class="container mt-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        
        <a href="index.php" type="submit" class="btn btn-danger mt-12">Atras</a>
        <input type="submit" onclick="return confirmarEdicion()" name="btn_editarcontra" class="btn btn-warning mt-12">
                </form>
                

</div>

<script>
    function confirmarEdicion() {

        // Utiliza la función confirm() de JavaScript
        var confirmacion = confirm('¿Está seguro de editar estos datos?');
        var contra= document.getElementById("contrasena").value;
        var a_contra= "<?php echo $odontologo['contraseña'];?>";
        var n_contra= document.getElementById("nueva_contra").value;
        var r_n_contra= document.getElementById("r_nueva_contra").value;
      
        // Si el usuario hace clic en "Aceptar", la acción se realizará
        if (a_contra==contra){
            if(n_contra==r_n_contra){
                    if(confirmacion){
                        return true;
                    }else{
                      return false;
                    }
                }else{
                  alert("Debe repetir la contraseña nueva");
                  return false;   
                }
        }else{
        alert("Contraseña actual incorrecta");
        return false;
        }  
        
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
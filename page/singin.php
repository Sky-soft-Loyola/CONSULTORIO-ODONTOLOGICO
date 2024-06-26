<?php
require_once ("./php/Path_constantes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/Dato2.css">
</head>
<body>
  <div class="container">
    <div class="row " style="background-color: rgba(0,0,0,0.6); border-radius:15px;">
      <div class="col">
        <section class="" >
        <form class="form" action="<?php echo $_SERVER['Main'] ?>" method="post">
          <h1 class="text-center text-light" >Regitrese</h1>
          <div class="row">
            <div class="col-3 col-md-6 offset-md-3" >
              <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="ci_doctor" required id="floatingInput" placeholder="Carnet de Identidad">
                  <label for="floatingInput">Carnet de identidad</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="nombre_completo_odontologo" id="floatingPassword" placeholder="Nombre Completo">
                  <label for="floatingPassword">Nombre Completo</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="celular_odontologo" id="floatingPassword" placeholder="Celular">
                  <label for="floatingPassword">Celular</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="contrasena" id="floatingPassword" placeholder="Contraseña">               
                  <label for="floatingPassword">Contraseña</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="direccion_odontologo" id="floatingPassword" placeholder="Direccion">
                  <label for="floatingPassword">Direccion</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="especialidad" id="floatingPassword" placeholder="Especialida">
                  <label for="floatingPassword">Especialidad</label>
                </div>

                
              </div>
              <input type="submit" class="btn btn-success" name="btn_Registrar_Odontologo">
          </div>
        </form>  
        </section>


      </div>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
</body>
</html>
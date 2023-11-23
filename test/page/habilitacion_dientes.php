<?php



require_once("./php/Path_constantes.php");
session_start();

if (empty($_SESSION['dientes'])){
    header('Location:'.$_SERVER['Dientes']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Dientes</h2>

        <form action="./php/session.php" method="post">
        <table class="table" border="1px">
            <tr>
                <td>Dientes</td>
                <td>Tratamiento</td>
            </tr>

            <?php
            foreach($_SESSION['dientes'] as $diente){
              
                echo '<tr>
                <td>Diente '. $diente .' </td>
                <td ><div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select class="form-select"  name="Tratamiento[]" id="inputGroupSelect01" required>
                  <option value="" disabled selected>SELECCIONE EL TIPO DE TRATAMIENTO</option>
                  <option value="Curacion">Curacion</option>  
                  <option value="Limpieza">Limpieza</option>
                  <option value="Prostodoncia">Prostodoncia</option>  
                  <option value="Endodoncia">Endodoncia</option>
                  <option value="Extracción">Extracción</option>
                  
                </select></td>
            </tr>';



            }  
            
            
            ?>
            
</div>

            
        </table>

        <a href="<?php echo $_SERVER['Dientes'];?>" type="submit" class="btn btn-danger" name="btn_Habilitacion_Atras">Atras</a>
        <button type="submit" class="btn btn-success" name="btn_Habilitacion_Enviar">Enviar</button>
        </form>
    </div>

    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
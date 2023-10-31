<?php
require_once("./php/Path_constantes.php");
$_SESSION['login']=false;
session_start();
if(!$_SESSION['login']){
    header("location:".$_SERVER['login']);
}
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
<body class="p-5">
<div class="container-fluid " style="background-color: rgba(0,0,0,0.6); ">
    <div class="row">
        <div class="col">
            <h1 class="text-light text-center">
                Consultorio odontologico
            </h1>
            <a href="<?php echo $_SERVER['Dato'];?>" class="btn btn-info text-light ">Registrar Nuevo Paciente</a>
            <a href="<?php echo $_SERVER['session']?>?btn_CerrarSesion=true" class="btn btn-danger text-light ">Cerrar Sesion</a>
        </div>
    </div>
    

</div>    
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
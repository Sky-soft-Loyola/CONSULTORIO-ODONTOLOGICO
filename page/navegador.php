<?php
//credenciales de acceso
$_SESSION['login']=false;
session_start();
if(!$_SESSION['login']&& $_SESSION['odontologo']==null){
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
    <link rel="stylesheet" href="../page/cssNav/estilobody.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid mr-3">
    <a class="navbar-brand" href="./index.php">CLINICA ODONTOLOGICA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           ODONTOLOGO
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $_SERVER['Main'];?>?btn_verOdontologo=">CUENTA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./php/session.php?btn_CerrarSesion=true">CERRAR SESIÓN</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../page/Dato.php">REGISTRAR PACIENTE</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
   
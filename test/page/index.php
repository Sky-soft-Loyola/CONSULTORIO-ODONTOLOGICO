<?php
include_once("./php/Path_constantes.php");
require_once($_SERVER['DOCUMENT_ROOT'].$_SERVER['conexion']);
$lista=$conect->obtener_lista_pacientes();

// Simulación de datos de usuarios

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../page/cssNav/estilos.css">
</head>
<body>
    <?php 
    include_once ("../page/navegador.php");


    ?>

    <div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div class="text-center mt-3 estilo-personalizado neg">
                                <img src="<?php echo $_SERVER['Img'].'logo2.jpeg'?>" alt="Foto de perfil" class="img-fluid rounded-circle">
                                <h5><p>ODONTOLOGO:</p><?php echo $_SESSION['odontologo']['nombre_completo'];?></h5>
                                <p>CI Usuario: <?php echo $_SESSION['odontologo']['ci_doctor'];?></p>
                            </div>
                        </li>
                        
                        <div class="d-grid gap-2">
                             <a class="btn btn-primary" href="./php/session.php?btn_CerrarSesion=true" type="button">Cerrar sesion</a>
                             <!--<button class="btn btn-primary" type="button">Lista de usuarios</button>-->
                        </div>
                    </ul>
                </div>
            </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Lista de Pacientes</h6>
                
                <form method="get" name="index_busqueda">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="search_ci" id="input_busqueda" placeholder="Buscar por CI" aria-label="Buscar por CI" aria-describedby="button-search" value="">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="buscar" id="btn_buscar">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <?php if (empty($_SESSION['lista_pacientes'])) { ?>
                        
                        <p>No se encontraron resultados</p>
                        
                        <center>
                            <img src="<?php echo $_SERVER['Img'];?>resultados.png" alt="Foto" width="250"><br>
                        <a class="btn btn-primary mt-3" type="button" href="<?php echo $_SERVER['Dato']?>">Registrar Usuario</a>
                        </center>
                    <?php }else { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>CI</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO PATERNO</th>
                                    <th>APELLIDO MATERNO</th>
                                    <th>CORREO</th>
                                    <th>CELULAR</th>
                                    
                                    <th>ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                foreach ($lista as $llave=>$usuario) { ?>
                                    <tr>
                                        <td id="numero"><?php echo $llave+1; ?></td>
                                        <td id="carnet"><?php echo $usuario['ci_paciente']; ?></td>
                                        <td id="nombre"><?php echo $usuario['nombre']; ?></td>
                                        <td id="apellido_paterno"><?php echo $usuario['ap_paterno']; ?></td>
                                        <td id="apellido_materno"><?php echo $usuario['ap_materno']; ?></td>
                                        <td id="correo"><?php echo $usuario['correo']; ?></td>
                                        <td id="celular"><?php echo $usuario['celular']; ?></td>
                                        
                                        <td>
                                        <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">VER</a>                                        
                                        <!-- Boton editar con validación , utilizando bootstrap -->
                                        <a href="<?php echo $_SERVER['Main']."?ci=".$usuario['ci_paciente'];?>" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">EDITAR</a>
                                        
                                        </td>
                                        
                                    </td>
                                        <td><!-- Acciones aquí --></td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>
                
            </div>
        </main>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<script>
    var lista = <?php echo json_encode($lista)?>
    const formulario = document.querySelector('#input_busqueda');
    const button = document.querySelector('#btn_buscar');

    const filtrar= () =>{
        console.log(formulario.value);
    }

    boton.addEventListner('click',filtrar)
</script>
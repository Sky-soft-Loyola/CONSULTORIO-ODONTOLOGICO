<?php
include_once("./php/Path_constantes.php");
// Simulación de datos de usuarios
$usuarios = array(
    array('N°' => 1, 'CI' => '1234567','Nombre' => 'Juan','Apellido Paterno' => 'Pérez', 'Apellido Materno' => 'González',  'Correo' => 'juan@gmail.com', 'Celular' => '75457545'),
    array('N°' => 2, 'CI' => '9876543', 'Nombre' => 'María', 'Apellido Paterno' => 'Gómez', 'Apellido Materno' => 'López',  'Correo' => 'Maria@gmail.com', 'Celular' => '75124121')
    // ... más usuarios aquí
);



// Simulación de búsqueda por CI
$searchedCI = isset($_POST['search_ci']) ? $_POST['search_ci'] : '';

// Filtro de usuarios por CI

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div class="text-center mt-3">
                                <img src="<?php echo $_SERVER['Img'].'logo2.jpeg'?>" alt="Foto de perfil" class="img-fluid rounded-circle">
                                <h5>ODONTOLOGO</h5>
                                <p>ID Usuario: 12345</p>
                            </div>
                        </li>
                        <div class="d-grid gap-2">
                             <button class="btn btn-primary" type="button">Cerrar sesion</button>
                             <button class="btn btn-primary" type="button">Lista de usuarios</button>
                        </div>
                    </ul>
                </div>
            </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Lista de Pacientes</h6>
                
                <form method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="search_ci" placeholder="Buscar por CI" aria-label="Buscar por CI" aria-describedby="button-search" value="<?php echo $searchedCI; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-search">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="mt-3">
                    <?php if (empty($usuarios)) : ?>
                        <p>No se encontraron resultados</p>
                        
                        <center>
                            <img src="<?php echo $_SERVER['Img'];?>resultados.png" alt="Foto" width="250"><br>
                        <button class="btn btn-primary mt-3" type="button" href="crear_usuario.php">Registrar Usuario</button>
                        </center>
                    <?php else : ?>
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
                                <?php foreach ($usuarios as $llave=>$usuario) { ?>
                                    <tr>
                                        <td><?php echo $usuario['N°']; ?></td>
                                        <td><?php echo $usuario['CI']; ?></td>
                                        <td><?php echo $usuario['Nombre']; ?></td>
                                        <td><?php echo $usuario['Apellido Paterno']; ?></td>
                                        <td><?php echo $usuario['Apellido Materno']; ?></td>
                                        <td><?php echo $usuario['Correo']; ?></td>
                                        <td><?php echo $usuario['Celular']; ?></td>
                                        
                                        <td>
                                        <a href="ver.php" class="btn btn-primary" role="button" data-bs-toggle="button">VER</a>
                                        
                                        <!-- Boton editar con validación , utilizando bootstrap -->
                                        
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">EDITAR
                                        </button>

                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">EDITAR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Esta seguro de editar los datos del paciente
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-warning">Editar</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
                                        </td>
                                        <!-- Boton eliminar con validación, utilizando bootstrap 
                                        <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">ELIMINAR
                                        </button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Esta seguro de eliminar paciente
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>-->
                                    </td>
                                        <td><!-- Acciones aquí --></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
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

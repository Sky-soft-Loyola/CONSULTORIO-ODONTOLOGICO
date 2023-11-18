<?php include_once("./php/Path_constantes.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Aplicación</a>
        
        <!-- Contenido del Navbar -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <!-- Botones de Registro y Lista -->
            <ul class="navbar-nav mr-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Registrar Paciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista de Opciones</a>
                </li>
            </ul>

            <!-- Etiqueta de Búsqueda -->
            <form class="form-inline">
                <label class="mr-2">Buscar:</label>
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <!-- Perfil de Usuario -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="perfilImagen" src="../img/logo2.jpeg" alt="Perfil" class="img-fluid rounded-circle" width="30" height="30">
                        <span id="perfilID">ID del Usuario</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" onclick="cambiarImagen()">Cambiar Imagen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Script Personalizado para Cambiar la Imagen -->
    <script>
        function cambiarImagen() {
            var nuevaImagen = prompt("Introduce la URL de la nueva imagen:");
            
            if (nuevaImagen !== null) {
                document.getElementById("perfilImagen").src = nuevaImagen;
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../estilos/Dato.css">
	<title>Dato</title>
</head>
<body background="">
	<div class="container">
		<form action="./php/session.php" method="post">
			<h2>Formulario de Registro</h2>
			<div class="contenedor">
				<div class="input-box">
					<label for="name">Nombre</label>
					<input type="text" placeholder="Nombre" name="paciente[nombre]" required>
				</div>
				<div class="input-box">
					<label for="Nacionalidad">Nacionalidad</label>
					<input type="text" placeholder="Nacionalidad" name="paciente[nacionalidad]" required>
				</div>
				<div class="input-box">
					<label for="Apellido Paterno">Apellido Paterno</label>
					<input type="text" placeholder="Apellido Paterno" name="paciente[ap_paterno]" required>
				</div>
				<div class="input-box">
					<label for="Fecha de nacimiento">Fecha de nacimiento</label>
					<input type="date" placeholder="Fecha de nacimiento" min="1990-12-25" name="paciente[fecha_nacimiento]" required>
				</div>
				<div class="input-box">
					<label for="Apellido Materno">Apellido Materno</label>
					<input type="text" placeholder="Apellido Materno" name="paciente[ap_materno]" required>
				</div>
				<div class="input-box">
					<label for="Celular">Celular</label>
					<input type="number" placeholder="Celular" name="paciente[celular_paciente]" required>
				</div>
				<div class="input-box">
					<label for="Ocupacion">Ocupacion</label>
					<input type="text" placeholder="Ocupacion" name="paciente[ocupacion]" required>
				</div>

				<div class="input-box">
					<label for="Direccion">Direccion</label>
					<input type="text" placeholder="Direccion" name="paciente[direccion_paciente]" required>
				</div>
				<div class="input-box">
					<label for="Correo Electronico">Correo Electronico</label>
					<input type="email" placeholder="Correo Electronico" name="paciente[correo]" required>
				</div>
				<div class="input-box">
					<label for="Estado Civil">Estado Civil</label>
					<input type="text" placeholder="Estado Civil" name="paciente[estado_civil]" required>
				</div>
				<div class="input-box">
					<label for="Carnet">Carnet</label>
					<input type="number" placeholder="Carnet" name="paciente[ci_paciente]" required>
				</div>
				<span class="gender-title">Genero</span>
				<div class="gender-category">
					<input type="radio" value="M" name="paciente[genero]" id="Masculino">
					<label for="Masculino">Masculino</label>
					<input type="radio" value="V" name="paciente[genero]" id="Femenino">
					<label for="Femenino">Femenino</label>
				</div>
			</div>
			<div class="button-container">
				<button type="submit" name="btn_Dato1"><a > Siguiente</a></button>
				
			</div>
		</form>
	</div>
</body>
</html>
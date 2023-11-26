<?php
require_once("./php/Path_constantes.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			box-sizing: border-box;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: url(https://img.freepik.com/psd-gratis/ilustracion-3d-dentista-dientes-cepillo-dientes_23-2150081444.jpg?size=626&ext=jpg&ga=GA1.1.2133919350.1698200570&semt=sph) no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
		}
		.wrapper {
			width: 420px;
			background: rgba(0,0,0,0.4);
			border: 2px solid rgba(255, 255, 255, .2);
			background-filter: blur(20px);
			box-shadow: 0 0 10px rgba(0, 0, 0, .9);
			color: #000000;
			border-radius: 10px;
			padding: 30px 40px;
		}
		.wrapper h1 {
			font-size: 36px;
			text-align: center;
		}
		.wrapper .input-box{
			position: relative;
			width: 100%;
			height: 50px;
			margin: 30px 0;
			color: #07abff;
		}
		.input-box input {
			width: 100%;
			height: 100%;
			background-image: linear-gradient(to right, #000000,#5a5a5a);
			border: none;
			outline: none;
			border: 2px solid rgba(255, 255, 255, .5);
			border-radius: 40px;
			font-size: 16px;
			color: #40F8FF;
			padding: 20px 45px 20px 20px;
		}
		.input-box bx bx-hide{
			color: #40F8FF;
		}
		.bx-hide{
			cursor: pointer;
		}
		.input-box input:: placeholder {
			color: #fff;
		}
		.input-box i {
			position: absolute;
			right: 20px;
			top: 50%;
			transform: translateY(-50%);
			font-size: 20px;
		}
		.wrapper .btn1 {
			width: 100%;
			height: 45px;
			background-image: linear-gradient(to right, #40F8FF,#0C356A);
			border: none;
			outline: none;
			border-radius: 40px;
			box-shadow: 0 0 10px rgba(0, 0, 0, .1);
			cursor: pointer;
			font-size:16px;
			color: #000000;
			font-weight: 600;
		}
		.wrapper .btn1:hover{
		background-image: linear-gradient(to right, #0C356A,#40F8FF);
		}
		.wrapper .btn1 a{
			text-decoration: none;
			color: #000000;
		}
		.wrapper .btn2 {
			background-image: linear-gradient(to right, #40F8FF,#0C356A);
			align-items: center;
			width: 100%;
			padding: 10px 50px;
			border-radius: 40px;
			box-shadow: 0 0 10px rgba(0, 0, 0, .1);
			font-size: 14px;
			font-weight: 900;
		}
		.wrapper .btn2:hover{
		background-image: linear-gradient(to right, #0C356A,#40F8FF);
		}
		.wrapper .btn2 a{
			text-decoration: none;
			text-align: center;
			align-items: center;
			padding: 10px 35px;
			font-weight: 795;
			color: #000000;
		}
		.wrapper .text {
			text-align: center;
			width: 100%;
			height: 30px;
			margin-top: 10px;
			color: #000000;
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<form action="<?php echo $_SERVER['Main'];?>" method="post">
			<h1>Inicio de Sesión</h1>
			<div class="input-box">
				<input type="text" name="ci" placeholder="Usuario" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Contraseña" id="password" checked>
				<i class='bx bx-hide' id="eyeicon"></i>
			</div>
			<button type="submit" class="btn1" name="btn_Iniciar_Sesion"> Iniciar sesión</button>	

			<div class="text">
				<h5>¿Olvidaste tu contraseña?</h5>
			</div>

			<div class="btn2">
				<a href="<?php echo $_SERVER['singin'];?>" class="bt">Crear cuenta nueva</a>
			</div>
		</form>
	</div>
	<script>
		let eyeicon = document.getElementById("eyeicon");
		let password = document.getElementById("password");

		eyeicon.onclick = function(){
			if (password.type == "password"){
				password.type = "text";
				eyeicon.classList.add('bx-show-alt');
			}else{
				password.type = "password";
				eyeicon.classList.remove('bx-show-alt');
				
			}
		}
	</script>
</body>
</html>
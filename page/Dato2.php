
<br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../estilos/Dato2.css">
	<title></title>
	<style type="text/css">
		.table, thead, tr, th{
			table-layout: fixed;
			background: rgba(0,0,0,0.2);
	}
	</style>
</head>
<body>
	<table border="3">
		<thead>
			<tr>
				<th>
					<div class="title">
						<h4>Antecedentes Patologicos</h4>
					</div>
					<div class="contenedor">
						<div class="col11">
							&nbsp;&nbsp;
							<input type="checkbox" name="patologias[]" id="Anemia">
							<label for="Anemia">Anemia</label>	
						</div>
						<div class="col12">
							<input type="checkbox" name="patologias[]" id="Enf. Gastricas">
							<label for="Enf. Gastricas">Enf. Gastricas</label>	
						</div>
					</div>

					<div class="contenedor">
						<div class="col13">
							&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="patologias[]" id="Asma">
							<label for="Asma">Asma&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	
						</div>

						<div class="col4">
							<input type="checkbox" name="patologias[]" id="Hepatitis">
							<label for="Hepatitis">Hepatitis&nbsp;&nbsp;&nbsp;</label>	
						</div>
					</div>
					<div class="contenedor">
						<div class="col15">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="patologias[]" id="Cardiopatia">
							<label for="Cardiopatia">Cardiopatia</label>	
						</div>

						<div class="col16">
							<input type="checkbox" name="patologias[]" id="Hipertension">
							<label for="Hipertension">Hipertension&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	
						</div>
					</div>
					<div class="contenedor">
						<div class="col17">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="patologias[]" id="Diabetes Mel.">
							<label for="Diabetes Mel.">Diabetes Mel.</label>	
						</div>

						<div class="col18">
							<input type="checkbox" name="patologias[]" id="Tuberculosis">
							<label for="Tuberculosis">Tuberculosis</label>	
						</div>
					</div>
					<div class="contenedor">
						<div class="col19">
							<input type="checkbox" name="patologias[]" id="Epilepsia">
							<label for="Epilepsia">Epilepsia&nbsp;&nbsp;&nbsp;</label>	
						</div>
						<div class="col20">
							<input type="checkbox" name="patologias[]" id="VIH">
							<label for="VIH">VIH&nbsp;</label>	
						</div>
					</div>
					<div class="contenedor">
						<div class="col21">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" id="Medicacion">
							<label for="Medicacion">Medicacion</label>	
						</div>
						<div class="input-box1">
							<input type="radio" name="gender" id="Otros">
							<label for="Otros">Otros&nbsp;</label>
							<input type="text" placeholder="" required>
						</div>
					</div>
					<div class="contenedor1">
						<div class="col4">
							<h4>Alergias</h4>
							<div class="input-box2">
								<input type="text" placeholder="" required>
							</div>
						</div>
						<div class="col4">
							<h4>Tratamiento Medico</h4>
							<div class="input-box2">
								<input type="text" placeholder="" required>
							</div>
						</div>
					</div>			
				</th>
				<th>
					<div class="acompañante">
						<h4>Acompañante</h4>
					</div>
					<div class="acom">
						<input type="radio" name="gender" id="Si">
						<label for="Si">Si</label>
						<input type="radio" name="gender" id="No">
						<label for="No">No</label>
					</div>
					<form action="#">
						<div class="contenedor2">
							<div class="input-box">
								<span class="Nombre">Nombre Completo &nbsp;&nbsp;&nbsp;&nbsp;</span>
								<input type="text" placeholder="Nombre Completo" required>	
							</div>
							<div class="input-box">
								<label for="Celular">Celular&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="number" placeholder="Celular" name="Celular" required>
							</div>
							<div class="input-box">
								<label for="Direccion">Direccion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="text" placeholder="Direccion" name="Direcccion" required>
							</div>
							<div class="input-box">
								<label for="Parentezco">Parentezco&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="text" placeholder="Parentezco" name="Parentezco" required>
							</div>
							<div class="bot">
								<a href="Registro.html" class="btn2">Cancelar</a>
								<a href="" class="btn1">Sigiente</a>
							</div>		
						</div>				
					</form>
				</th>
			</tr>
		</thead>
	</table>
</body>
</html>
<?php
//session_start();
//print_r($_POST);
?>
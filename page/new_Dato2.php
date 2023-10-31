<?php
session_start();
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/Dato2.css">

    <title>Registro de Paciente</title>
  </head>
  <body>
    <div style="background-color: rgba(0,0,0,0.6); border-radius:15px;" class="container bag text-ligth">
      <form action="php/session.php" method="post">
      <div class="row">
            <h2 class="text-center text-light">Registro de Paciente</h2>
            <div class="col">
                <h2 class="text-center text-light">Antecedentes Médicos</h2>
                    <div class="row">
                        <fieldset class="m-2">
                            <legend>
                                <h3 class="text-light">Patologias</h3>
                            </legend>
                            <div class="row row-cols-1 row-cols-lg-2">
                                <div class="col">
                                        <input type="checkbox" class="form-check-input" value="Anemia" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Anemia</label><br>
                                        <input type="checkbox" class="form-check-input" value="Asma" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Asma</label><br>
                                        <input type="checkbox" class="form-check-input" value="Cardiopatia" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Cardiopatía</label><br>
                                        <input type="checkbox" class="form-check-input" value="Diabetes" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Diabetes</label><br>
                                        <input type="checkbox" class="form-check-input" value="Epilepsia" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Epilepsia</label><br>
                                        
                                </div>    
                            
                                <div class="col">
                                        <input type="checkbox" class="form-check-input" value="Enfermedades Gastricas" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Enfermedades Gástricas</label><br>
                                        <input type="checkbox" class="form-check-input" value="Hepatitis" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Hepatitis</label><br>
                                        <input type="checkbox" class="form-check-input" value="Hipertension" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Hipertension</label><br>
                                        <input type="checkbox" class="form-check-input" value="Tuberculosis" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">Tuberculosis</label><br>
                                        <input type="checkbox" class="form-check-input" value="VIH" name="patologias[]" id="">
                                        <label class="text-light form-check-label" for="">VIH</label><br>
            
                                        <div class="form-floating mt-3">
                                            <textarea class="form-control" name="patologias[]" id="textarea_patologia" ></textarea>
                                            <label for="textarea_patologia">Otros</label>
                                            </div>                      
                            </div>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="m-2">
                            <legend>
                                <h3 class="text-light">Alergias</h3>
                            </legend>
                        <div class="form-floating">
                                            <textarea class="form-control" name="alergias" id="textarea_alergias" ></textarea>
                                            <label for="textarea_alergias">Alergias del paciente</label>
                                            </div>  

                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="m-2">
                            <legend>
                                <h3 class="text-light">Medicación</h3>
                            </legend>
                            
                            <div class="form-floating">
                                            <textarea class="form-control" name="medicacion" id="textarea_tratamiento" ></textarea>
                                            <label for="textarea_tratamiento">Medicaciones que se encuentra el paciente</label>
                                            </div>  
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="m-2 mb-3">
                            <legend>
                                <h3 class="text-light">Tratamiento Medico</h3>
                            </legend>
                            
                            <div class="form-floating">
                                            <textarea class="form-control" name="tratamiento_medico" id="textarea_tratamiento" ></textarea>
                                            <label for="textarea_tratamiento">Tratamientos médico del paciente</label>
                                            </div>  
                        </fieldset>
                    </div>

            </div>
            <div class="col">
                <fieldset>
                    <legend>
                        <h2 class="text-center text-light">Acompañante</h2>
                    </legend>
                    <div class="row row-col-2">
                        <div class="col">
                            <label class="text-light form-label" for="">Nombre Completo</label>
                            <input name="nombre_completo_acompanante" class="form-control" type="text"><br>
                            <label class="text-light form-label" for="">Carnet de Identidad</label>
                            <input name="ci_acompanante" class="form-control" type="number"><br>
                            <label class="text-light form-label" for="">Celular</label>
                            <input name="celular_acompanante" class="form-control" type="number"><br>
                            <label class="text-light form-label" for="">Direccion</label>
                            <input name="parentesco" class="form-control" type="text"><br>
                            <label class="text-light form-label" for="">Parentesco</label>
                            <input name="direccion_acompanante" class="form-control" type="text"><br>
                            

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 m-2">
                                
                                <a href="index.php" class="btn btn-danger">Cancelar</a>
                        </div>
                        <div class="col-3 m-2">
                                <button class="btn btn-success" type="submit" name="btn_Dato2">Siguiente</button>
                        </div>                      
                    </div>

                </fieldset>
            </div>
        </div>
      </form>
    </div> 

   
    
  
  
  
  
  <script src="../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
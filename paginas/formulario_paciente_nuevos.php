<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/diente.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro historial medico</title>
  </head>
  <body>
    <div class="container-md ">
        <!--informacion personal-->
        <section>
        <div class="row md-5" >
                <form action="./prueba.php" method="post" id="form1">
                <section class="section">
                <div class="card border-primary">
                    <card class="card-body">
                    <h3 class="text-center mb-2">FORMULARIO DE HISTORIAL CLÍNICO</h3>
                    <h5 class="card-header text-center mb-4">Información personal</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder=" ">
                                <label for="floatingInput">Nombre</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="apellido_paterno" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Apellido Paterno</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="apellido_materno" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Apellido Materno</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="ci_paciente" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Carnet de Identidad</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="direccion" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Direccion</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="number" class="form-control" name="celular" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Celular</label>
                            </div>
                    </div>
                        <div class="col">
                            <div class="form-floating mb-5">
                                <input type="date" class="form-control" name="fecha_nacimiento" id="floatingInput" placeholder=" ">
                                <label for="floatingInput">Fecha de Nacimiento</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="email" class="form-control" name="correo" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Correo Electronico</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="ocupacion" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Ocupación</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="nacionalidad" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Nacionalidad</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="estado_civil" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Estado Civil</label>
                            </div>
                            <div class="form-floating ">
                                <h6 class="mb-3">Genero</h6>
                                <div class="row text">
                                    <div class="col-2"></div>

                                    <div class="col-4">
                                        <input type="radio" class="btn-check" name="genero" value="M" id="option1" autocomplete="off" >
                                        <label class="btn btn-outline-primary" for="option1">Masculino</label></div>
                                    <div class="col-4">
                                        <input type="radio" class="btn-check" name="genero" id="option2" value="F" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="option2">Femenino</label></div>
                                        
                                </div>
                            </div>
                        </div>
                    </card>
                </div>  
                </section>            
                </div>
                
                <br>
                
        
                

        </section>
        <!--Seccion antecedentes medicos-->
        <section>
        <div class="row md-5">
         
                <div class="card border-danger mb-3">
                    <card class="card-body ">
                        <h5 class="card-header text-center mb-4">Antecedentes Médicos</h5>
                        <div class="row">
                            <div class="col">
                                <!--Seccion antecedentes patologicos-->
                                <div class="row">
                                    <h5>Antecedentes Patológicos</h5>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="anemia"  name="patologias" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ANEMIA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="asma" name="patologias" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ASMA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="cardiopatia" name="patologias" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                CARDIOPATÍA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="diabetes" name="patologias" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                DIABETES
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="epilepsia" name="patologias" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                EPILEPSIA
                                            </label>
                                        </div>
                                                                                                                                              
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="enfermedad gastrica" name="patologias" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    ENFERMEDADES &nbsp;GASTRICAS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="hepatitis" name="patologias" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    HEPATITIS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="hipertension" name="patologias" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    HIPERTENSIÓN
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="tuberculosis" name="patologias" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    TUBERCULOSIS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="vih" name="patologias" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    VIH
                                                </label>                                        
                                            
                                        </div>
                                </div>
                                </div>
                            
                            <div class="row">
                                <div class="col-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" >
                                    </div>
                                    <input type="textarea" class="form-control" name="patologias" aria-label="Text input with checkbox" placeholder="Otros">
                                </div>        
                                                    

                                </div>
                            </div>

                            <div class="row">
                                
                                    <h5>Embarazo</h5>
                                    

                                <div class="col-2">
                                    <input type="radio" class="btn-check" name="embarazo" value="si" id="option3" autocomplete="off" >
                                    <label class="btn btn-outline-primary" for="option3">Si</label></div>
                                <div class="col">
                                <input type="text" class="form-control" aria-label="Text input with radio button" name="embarazo"  for="option3" placeholder="semanas">
                                </div>
                                <div class="col">
                                    <input type="radio" class="btn-check" name="embarazo" id="option4" value="no" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="option4">No</label></div>

                                </div>   
                                <div class="row ">
                                
                                <h5 class="mt-2">Alergias</h5>
                                

                            <div class="col-2">
                                <input type="radio" class="btn-check" name="alergia" value="si" id="option5" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="option5">Si</label></div>
                            <div class="col">
                            <input type="text" class="form-control" aria-label="Text input with radio button" name="alergia"  for="option5" placeholder="espeficique">
                            </div>
                            <div class="col">
                                <input type="radio" class="btn-check" name="alergia" id="option6" value="no" autocomplete="off">
                                <label class="btn btn-outline-primary" for="option6">No</label></div>

                            </div>   
                               
                                                    

                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="tratamiento" style="height: 150px; resize:none"></textarea>
                                    <label for="floatingTextarea2">¿Está en algun tratamiento médico?</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="medicamento" style="height: 150px; resize:none"></textarea>
                                    <label for="floatingTextarea2">¿Consume algun medicamento?</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="obseracion" style="height: 150px; resize:none"></textarea>
                                    <label for="floatingTextarea2">Observaciones</label>
                                </div>
                            
                                </div>
                            </div>

                            </div>
                            
                            
                            
                        </div>
                    </card>
                
                </section>
                <div class="row md-5">
                    <div class="card borde-warning mb-3">
                    <card class="card-body text-center">
                        <h5 class="card-header">Acompañante</h5>
                        <div class="row">
                        <div class="row mt-3">
                                    <div class="col-2"></div>

                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check"  sel name="acompañante1" value="checked"  id="option7" autocomplete="off" >
                                        <label class="btn btn-outline-primary" for="option7">SI</label></div>
                                    <div class="col-4">
                                        <input type="checkbox" class="btn-check"  name="acompañante2" name="checked"  id="option8"  autocomplete="off">
                                        <label class="btn btn-outline-primary" for="option8">NO</label></div>

                                </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col">
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="nombre_acompanante" id="floatingInput" placeholder=" ">
                                <label for="floatingInput">Nombre Completo</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="ci_acompanante" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Carnet de Identidad</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="celular_acompanante" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Celular</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="direccion_acompanante" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Dirección</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input type="text" class="form-control" name="parentes_acompanante" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword">Parentesco</label>
                            </div>
                            
                    </div>
                        </div>

                    </card>
                    </div>
                </div>

        
             
    

                <div class="row">
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="submit" form="form1" name="enviar" value="Submit">Siguiente</button>
                        <button class="btn btn-danger" type="button">Cancelar</button>
                    </div>
                </form>
            </div>

            



            </div>
     
 
   
        

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
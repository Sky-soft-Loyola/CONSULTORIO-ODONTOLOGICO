<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/html.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
require_once ("./php/Path_constantes.php");
/*session_start();
print_r($_SESSION);
foreach($_SESSION as $clave){
    echo key($clave).".<br><hr>";
print_r($clave);
    echo key($clave).".<br><hr>";
}*/
?>
<body>

    <center>
        <h1>Registro del estado actual Odontologico</h1>
    </center>

    <div class="wrapper">
        <form action="<?php echo $_SERVER['session']?>" method="post">
<br>
            <center>
                <h1>Maxilar</h1>
            </center>

            <div class="Contenedor">

                <div class="txt-1">
                    <h2>Derecha</h2>
                </div>

                <div class="txt-2">
                    <h2>Izquierda</h2>
                </div>

            </div>


                    </ul>
                  
                <div class="input-box-2">
                    <div class="checkbox">
                    <ul>
                <table borde="1px" class ="checkbox">
                    <tr>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="1" id="diente1" for="diente1">
                            <label for="diente1">D- 1 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="2" id="diente2" for="diente2">
                            <label for="diente2">D- 2 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="3" id="diente3" for="diente3">
                            <label for="diente3">D- 3 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="4" id="diente4" for="diente4">
                            <label for="diente4">D- 4 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="5" id="diente5" for="diente5">
                            <label for="diente5">D- 5 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="6" id="diente6" for="diente6">
                            <label for="diente6">D- 6 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="7" id="diente7" for="diente7">
                            <label for="diente7">D- 7 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="8" id="diente8" for="diente8">
                            <label for="diente8">D- 8 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="9" id="diente9" for="diente9">
                            <label for="diente9">D- 9 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="10" id="diente10" for="diente10">
                            <label for="diente10">D- 10  </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="11" id="diente11" for="diente11">
                            <label for="diente11">D- 11 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="12" id="diente12" for="diente12">
                            <label for="diente12">D- 12 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="13" id="diente13" for="diente13">
                            <label for="diente13">D- 13 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="14" id="diente14" for="diente14">
                            <label for="diente14">D- 14 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="15" id="diente15" for="diente15">
                            <label for="diente15">D- 15 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="16" id="diente16" for="diente16">
                            <label for="diente16">D- 16 </label>    </li></td>
                    </tr>
                    <tr>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="17" id="diente17" for="diente17">
                            <label for="diente17">D- 17 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="18" id="diente18" for="diente18">
                            <label for="diente18">D- 18 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="19" id="diente19" for="diente19">
                            <label for="diente19">D- 19 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="20" id="diente20" for="diente20">
                            <label for="diente20">D- 20 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="21" id="diente21" for="diente21">
                            <label for="diente21">D- 21 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="22" id="diente22" for="diente22">
                            <label for="diente22">D- 22 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="23" id="diente23" for="diente23">
                            <label for="diente23">D- 23 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="24" id="diente24" for="diente24">
                            <label for="diente24">D- 24 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="25" id="diente25" for="diente25">
                            <label for="diente25">D- 25 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="26" id="diente26" for="diente26">
                            <label for="diente26">D- 26 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="27" id="diente27" for="diente27">
                            <label for="diente27">D- 27 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="28" id="diente28" for="diente28">
                            <label for="diente28">D- 28 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="29" id="diente29" for="diente29">
                            <label for="diente29">D- 29 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="30" id="diente30" for="diente30">
                            <label for="diente30">D- 30 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="31" id="diente31" for="diente31">
                            <label for="diente31">D- 31 </label>    </li></td>
                        <td><li>
                            <input type="checkbox" name="dientes[]" value="32" id="diente32" for="diente32">
                            <label for="diente32">D- 32 </label>    </li></td>
                    </tr>
                </table>
                </ul>

                </div> 
                 </div>
                 
                
                <div class="Contenido">

                    <div class="txt-3">
                        <h2>Derecha</h2>
                    </div>
    
                    <div class="txt-4">
                        <h2>Izquierda</h2>
                    </div>
    
                </div>

                <center>
                    <h1>Mandibula</h1>
                </center>

            </div>


            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                    <button type="submit" class="btn btn-danger" name="btn_Salir">Salir</button>

                    <button type="submit" class="btn btn-success" name="btn_Dientes_Enviar" >Siguiente</button>
                    </div>
                </div>
            </div>
           

        </form>

    </div>

  

</body>
</html>

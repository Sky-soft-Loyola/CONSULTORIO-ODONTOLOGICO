<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="html.css">
</head>
<?php
session_start();

?>
<body>

    <center>
        <h1>Registro del estado actual Odontologico</h1>
    </center>

    <div class="wrapper">
        <form action="./habilitacion_dientes.php" method="POST">
            <br>
            <br>
            <div class="input-box">
                <label>Tratamiento</label>
                <input list="Tratamientos" placeholder="Seleccione">
                <datalist id="Tratamientos">
                    <option value="Limpieza Dental" />
                    <option value="Relleno dental" />
                    <option value="Endodoncia" />
                    <option value="Extraccion dental" />
                    <option value="Corona dental" />
                    <option value="Implante dental" />
                    <option value="Ortodoncia" />
                </datalist>
            </div>


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


<!--            <div class="input-box-2">

                 <div class="checkbox">
                    <ul>
                        
                    
                    <ul>
                        <li>
                            <input type="checkbox" name="dientes[1]" value="1" id="diente1" for="diente1">
                            <label for="diente1">dientes - 1 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[2]" value="2" id="diente2" for="diente2">
                            <label for="diente2">dientes - 2 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[3]" value="3" id="diente3" for="diente3">
                            <label for="diente3">dientes - 3 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[4]" value="4" id="diente4" for="diente4">
                            <label for="diente4">dientes - 4 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[5]" value="5" id="diente5" for="diente5">
                            <label for="diente5">dientes - 5 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[6]" value="6" id="diente6" for="diente6">
                            <label for="diente6">dientes - 6 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[7]" value="7" id="diente7" for="diente7">
                            <label for="diente7">dientes - 7 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[8]" value="8" id="diente8" for="diente8">
                            <label for="diente8">dientes - 8 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[9]" value="9" id="diente9" for="diente9">
                            <label for="diente9">dientes - 9 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[10]" value="10" id="diente10" for="diente10">
                            <label for="diente10">dientes - 10  </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[11]" value="11" id="diente11" for="diente11">
                            <label for="diente11">dientes - 11 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[12]" value="12" id="diente12" for="diente12">
                            <label for="diente12">dientes - 12 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[13]" value="13" id="diente13" for="diente13">
                            <label for="diente13">dientes - 13 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[14]" value="14" id="diente14" for="diente14">
                            <label for="diente14">dientes - 14 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[15]" value="15" id="diente15" for="diente15">
                            <label for="diente15">dientes - 15 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[16]" value="16" id="diente16" for="diente16">
                            <label for="diente16">dientes - 16 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[17]" value="17" id="diente17" for="diente17">
                            <label for="diente17">dientes - 17 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[18]" value="18" id="diente18" for="diente18">
                            <label for="diente18">dientes - 18 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[19]" value="19" id="diente19" for="diente19">
                            <label for="diente19">dientes - 19 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[20]" value="20" id="diente20" for="diente20">
                            <label for="diente20">dientes - 20 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[21]" value="21" id="diente21" for="diente21">
                            <label for="diente21">dientes - 21 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[22]" value="22" id="diente22" for="diente22">
                            <label for="diente22">dientes - 22 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[23]" value="23" id="diente23" for="diente23">
                            <label for="diente23">dientes - 23 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[24]" value="24" id="diente24" for="diente24">
                            <label for="diente24">dientes - 24 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[25]" value="25" id="diente25" for="diente25">
                            <label for="diente25">dientes - 25 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[26]" value="26" id="diente26" for="diente26">
                            <label for="diente26">dientes - 26 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[27]" value="27" id="diente27" for="diente27">
                            <label for="diente27">dientes - 27 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[28]" value="28" id="diente28" for="diente28">
                            <label for="diente28">dientes - 28 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[29]" value="29" id="diente29" for="diente29">
                            <label for="diente29">dientes - 29 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[30]" value="30" id="diente30" for="diente30">
                            <label for="diente30">dientes - 30 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[31]" value="31" id="diente31" for="diente31">
                            <label for="diente31">dientes - 31 </label>    
                        </li>
                        <li>
                            <input type="checkbox" name="dientes[32]" value="32" id="diente32" for="diente32">
                            <label for="diente32">dientes - 32 </label>    
                        </li>
                
                    
                 </div>

</div>-->
                    </ul>
                  
                <div class="input-box-2">
                    <div class="checkbox">
                    <ul>
                <table borde="1px" class ="checkbox">
                    <tr>
                        <td><li>
                            <input type="checkbox" name="dientes[1]" value="1" id="diente1" for="diente1">
                            <label for="diente1">D- 1 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[2]" value="2" id="diente2" for="diente2">
                            <label for="diente2">D- 2 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[3]" value="3" id="diente3" for="diente3">
                            <label for="diente3">D- 3 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[4]" value="4" id="diente4" for="diente4">
                            <label for="diente4">D- 4 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[5]" value="5" id="diente5" for="diente5">
                            <label for="diente5">D- 5 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[6]" value="6" id="diente6" for="diente6">
                            <label for="diente6">D- 6 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[7]" value="7" id="diente7" for="diente7">
                            <label for="diente7">D- 7 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[8]" value="8" id="diente8" for="diente8">
                            <label for="diente8">D- 8 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[9]" value="9" id="diente9" for="diente9">
                            <label for="diente9">D- 9 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[10]" value="10" id="diente10" for="diente10">
                            <label for="diente10">D- 10  </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[11]" value="11" id="diente11" for="diente11">
                            <label for="diente11">D- 11 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[12]" value="12" id="diente12" for="diente12">
                            <label for="diente12">D- 12 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[13]" value="13" id="diente13" for="diente13">
                            <label for="diente13">D- 13 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[14]" value="14" id="diente14" for="diente14">
                            <label for="diente14">D- 14 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[15]" value="15" id="diente15" for="diente15">
                            <label for="diente15">D- 15 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[16]" value="16" id="diente16" for="diente16">
                            <label for="diente16">D- 16 </label>    </li</td>
                    </tr>
                    <tr>
                        <td><li>
                            <input type="checkbox" name="dientes[17]" value="17" id="diente17" for="diente17">
                            <label for="diente17">D- 17 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[18]" value="18" id="diente18" for="diente18">
                            <label for="diente18">D- 18 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[19]" value="19" id="diente19" for="diente19">
                            <label for="diente19">D- 19 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[20]" value="20" id="diente20" for="diente20">
                            <label for="diente20">D- 20 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[21]" value="21" id="diente21" for="diente21">
                            <label for="diente21">D- 21 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[22]" value="22" id="diente22" for="diente22">
                            <label for="diente22">D- 22 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[23]" value="23" id="diente23" for="diente23">
                            <label for="diente23">D- 23 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[24]" value="24" id="diente24" for="diente24">
                            <label for="diente24">D- 24 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[25]" value="25" id="diente25" for="diente25">
                            <label for="diente25">D- 25 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[26]" value="26" id="diente26" for="diente26">
                            <label for="diente26">D- 26 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[27]" value="27" id="diente27" for="diente27">
                            <label for="diente27">D- 27 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[28]" value="28" id="diente28" for="diente28">
                            <label for="diente28">D- 28 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[29]" value="29" id="diente29" for="diente29">
                            <label for="diente29">D- 29 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[30]" value="30" id="diente30" for="diente30">
                            <label for="diente30">D- 30 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[31]" value="31" id="diente31" for="diente31">
                            <label for="diente31">D- 31 </label>    </li</td>
                        <td><li>
                            <input type="checkbox" name="dientes[32]" value="32" id="diente32" for="diente32">
                            <label for="diente32">D- 32 </label>    </li</td>
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
            <input type="submit" value="Enviar" name="Enviar"/>

            <button type="submit"class="btn">Guardar</button>

        </form>

    </div>


</body>
</html>

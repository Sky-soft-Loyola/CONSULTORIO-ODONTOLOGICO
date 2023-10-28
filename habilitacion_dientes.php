<?php
session_start();
print_r ($_POST['dientes']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="main.php" method="post">
    <table border="1px">
        <tr>
            <td>Dientes</td>
            <td>Tratamiento</td>
        </tr>

        <?php
        $_SESSION=$_POST;
        foreach($_POST['dientes'] as $diente){
            echo '<tr>
            <td>Diente '. $diente .' </td>
            <td ><input list="Diente'. $diente .'" placeholder="Diente '. $diente .'" name="Tratamiento[]">
                <datalist id="Diente'. $diente .'">
                    
                    <option value="Dañado" />  
                    <option value="En Tratamiento" />
                </datalist></td>
        </tr>';



        }  
        
        
        ?>
        
        
    </table>
    <input type="submit" value="Enviar" name="Enviar">
    <input type="submit" value="Atras" name="Atras">
    </form>
</body>
</html>
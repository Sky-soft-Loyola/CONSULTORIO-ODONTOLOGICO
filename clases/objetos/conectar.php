<?php
//conexion.php
$server="localhost";
$user="root";
$pass="";
$db="bd_colegio";
$con=new mysqli($server,$user,$pass,$db);
if($con->connect_errno){
    die('la conexion ha fallado'.$con->connect_errno);
}


?>
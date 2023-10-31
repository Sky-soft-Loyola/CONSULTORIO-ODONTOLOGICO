<?php



    session_start();
    require_once ("./Path_constantes.php");
    
    if (isset($_POST['btn_Dato1'])){   
       // $_SESSION['info_paciente']=$_POST;
        foreach($_POST as $clave=>$datos){
            $_SESSION[$clave]=$datos;
        }
        header("Location:".$_SERVER['Dato2']);  

    }
    if (isset($_POST['btn_Dato2'])){       
        foreach($_POST as $clave=>$datos){
           if ($clave=='alergias' && $datos==null){
                $datos="Ninguno";
            }
            if ($clave=='medicacion' && $datos==null){
                $datos="Ninguno";
            }
            if ($clave=='tratamiento_medico' && $datos==null){
                $datos="Ninguno";
            }
            $_SESSION[$clave]=$datos;   
        }
        $_SESSION['patologia']="";
        foreach($_POST['patologias'] as $enfermedades){
            if($enfermedades!=null){
            $_SESSION['patologia']=$_SESSION['patologia'].",".$enfermedades;
            }else
            {
                $_SESSION['patologia']="NINGUNA";
            }
        }
    
        
        header("Location:".$_SERVER['Dientes']);
    }

    if (isset($_POST['btn_Habilitacion_Enviar'])){        
        $_SESSION['tratamiento']=$_POST;
        
        header("Location:".$_SERVER['Main']);
       /* */

    }
    
    if (isset($_POST['btn_Habilitacion_Atras'])){
        header("Location:".$_SERVER['Dientes']);
    }

    if (isset($_POST['btn_Salir'])){
        header("Location:".$_SERVER['Dato']);
        session_destroy();
        $_SESSION['login']=true;
        header("Location:".$_SERVER['Dato']);
    }
    if (isset($_POST['btn_Dientes_Enviar'])){

        $_SESSION['dientes']=$_POST['dientes'];
        header("Location:".$_SERVER['Habilitacion_Dientes']);
        
    }
    
    if($_GET['btn_CerrarSesion']){
        session_destroy();
        header("Location:".$_SERVER['login']);
    }
    
 
 



?>
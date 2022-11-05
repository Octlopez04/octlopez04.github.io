<?php
//pide la conexion
require_once('bombones.php');

//recaba los datos
    $Uss=$_POST['Uss'];
    $correo=$_POST['correo'];
//encripta la contraseña
    $Pass=password_hash($Pass=$_POST['conx'],PASSWORD_DEFAULT,['cost'=>15]);


    $sql="INSERT INTO prvas (Uss, Pass, Correo ) VALUES ('$Uss','$Pass','$Uss')";
    $p=mysqli_query($con,$sql);

    header('location: index.html');
    
   

?>

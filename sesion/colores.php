<?php
require_once('bombones.php');

    $Uss=$_POST['Uss'];
    $correo=$_POST['correo'];

    $Pass=password_hash($Pass=$_POST['conx'],PASSWORD_DEFAULT,['cost'=>15]);
echo($Pass);

    $sql="INSERT INTO prvas (Uss, Pass, Correo ) VALUES ('$Uss','$Pass','$Uss')";
    $p=mysqli_query($con,$sql);

    echo('<p> yes mi perro   <p>');
?>

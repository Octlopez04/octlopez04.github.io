<?php
require_once('bombones.php');

$Uss=$_POST['Uss'];

$Name=$_POST['Na'];
$Pass=password_hash($Pass=$_POST['con'],PASSWORD_DEFAULT,['cost'=>15]);

$Pass2=password_hash($Pass2=$_POST['con'],PASSWORD_DEFAULT,['cost'=>15]);

echo($Pass);

if($Pass == $Pass2){
    $sql="INSERT INTO prvas (Uss, Pass, Correo, Name1 ) VALUES ('$Uss','$Pass','$ml','$Uss')";

    $p=mysqli_query($con,$sql);
    echo('<p> yes mi perro   <p>');

}else{
    echo('<p>error en contraseña <p>');
}





?>
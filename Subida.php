<?php
    require_once('sesion/cone.php');
    $Fech=$_POST['Fecha'];
    $Preci=$_POST['Precio']; 
    $Fechas=$_POST['Fechasal'];
    $Cupo=$_POST['Cupos'];
    $Descripcione=$_POST['Descripcionextra'];

    $sql="INSERT INTO Misviajes (Fecha,Precio,Fechasal,Cupos,Descripcionextra) VALUES ('$Fech','$Preci','$Fechas','$Cupo','$Descripcione')";
    $p=mysqli_query($con,$sql);
     if(!$p){
        echo('Fallo crack');
     }else{
        echo('A sos re trolo');
     }
?>


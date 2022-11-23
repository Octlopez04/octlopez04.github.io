<?php
    require_once('sesion/cone.php');
    $Fech=$_POST['Fecha'];
    $Preci=$_POST['Precio'];
    $Fechas=$_POST['Fechasal'];
    $Cupo=$_POST['Cupos'];
    $Descripcione=$_POST['Descripcionextra'];

    $sql = "UPDATE Misviajes SET Fecha=$fech";
    if(mysqli_query($con, $sql)){

        echo "Registro actualizado.";
    } else {
        echo "ERROR: No se ejecuto";
    }
?>

<?php
     require_once('bombones.php');

     $User=$_POST['User'];
     $Pass=$_POST['contra'];
     //Recabacion y envio de los datos
     $sql="SELECT Usuario,Contraseña FROM Usuarios WHERE usuario=$uss";
     $envio=mysqli_query($con,$sql);

     //recupera la contraseña para verificarla
     $resultado = mysqli_fetch_array($envio);
     $hash=$resultado['Contraseña'];

     //verificacion de contraseña
     if (password_verify($Pass,$hash)) {
        echo('Bienvenido: '.$User);
     } else {
        echo('Te equivocastesssssssssssss');
     }
     


?>
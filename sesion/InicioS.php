<?php
//inicio de sesion
session_start();
     require_once('cone.php');
$Uss=$_POST['Uss'];
$Pass=$_POST['pas'];

//pid eel usuario

$sql="SELECT Usuario, Contraseña FROM inicios Where Usuario = '$Uss'";

//baja los datos de la tabla
$envio=mysqli_query($con,$sql);
//??¿¿
$env=mysqli_fetch_array($envio);
$hash=$env['Contraseña'];
     //Verifica las contrañoñas 
     if(!password_verify($Pass,$hash)){

          echo"<script type=\"text/javascript\">alert(Usuario o Contraseña Incorrecto!); 
        window.location='../InicioS.html';</script>"; 
     }else{
         
          
          $_SESSION['loggedin']=true;
          $_SESSION['logged_in_user_id'] =$Uss;
          $_SESSION['logged_in_user_name'] = $Uss;
          header('location: ../idexcarlos.php');
     
}

?>

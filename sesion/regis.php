<?php
//pide la conexion para dar de alta a un usuario
require_once('cone.php');

//recaba los datos
    $Uss=$_POST['Uss'];
    $Correo=$_POST['correo'];

//encripta la contraseña
    $Pass=password_hash($_POST['pas'],PASSWORD_DEFAULT,['cost'=>15]);
//carlos metio mano aqui
$qa=("SELECT Usuario FROM inicios WHERE Usuario = '$Uss'"); 
$q = mysqli_query($con,$qa);

//verificamos si el user exite con un condicional que verifica
// el numero de respuestas devueltas de la consulta
if(mysqli_num_rows($q) == 0){
    
    $sql="INSERT INTO inicios (Usuario,Contraseña,Jerarquia,Correo) VALUES ('$Uss','$Pass','Usuario','$Correo')";
    $p=mysqli_query($con,$sql);
    header('location: InicioS.html');

    }else{
        echo 'el user ya esta registrado, ingresa otro';
        }

?>

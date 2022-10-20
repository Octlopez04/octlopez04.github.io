<?php
//pide la conexion
$con=mysqli_connect('localhost','root','','admin');
mysqli_set_charset($con,'utf8');

//Pide los datos de usuario
$a1=$_POST['Uss'];
$Pass=password_hash($Pass=$_POST['pas'].PASSWORD_DEFAULT,['cost'=>15]);
$a2=$_POST['Pass'];


//guarda los datos en sql y los sube
$sql="INSERT INTO Usuarios (Usuarios,Contraseña) VALUES ('Uss','Pass')";
$p=mysqli_query($con,$sql);


?>
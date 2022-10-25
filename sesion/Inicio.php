<?php
//inicio de secion
error_reporting(0);
session_start();
require_once('conx.php');
$Uss=$_POST['Uss'];
$Pass=$_POST['pass'];

//pedir
$sql="SELECT Uss, Pass FROM prvas Where Uss='$Uss'";

$query=mysqli_query($con, $sql);

$rec=mysqli_fetch_array($query);
$hash=$rec['Pass'];

if(password_verify($pass,$hash)){

    session_regenerate_id();
$_secion['loggedin'] = TRUE;

//bienvebida

}else{

    echo('todo mal');
}

?>
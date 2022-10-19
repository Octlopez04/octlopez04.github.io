<?php
require_once('con.php');

$a1=$_POST['Uss'];
$Pass=password_hash($Pass=$_POST['pas'].PASSWORD_DEFAULT,['cost'=>15]);
$a2=$_POST['Pass'];


////////

$sql="INSERT INTO america (Usser, Pass) VALUES ('Uss','Pass')";

$p=mysqli_query($con,$sql);


?>
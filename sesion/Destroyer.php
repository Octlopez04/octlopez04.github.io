<?php
session_start();
//quitar la sesion
session_unset();

//destruir sesion
session_destroy();
$_SESSION['logged_in_user_id'];
unset($_SESSION['logged_in_user_id']);

  header('location: ../idexcarlos.php');
?>

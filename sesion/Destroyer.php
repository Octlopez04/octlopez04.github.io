<?php
  session_unset();
  //destruir sesion
  session_destroy();
  header('location: ../index.html');
?>

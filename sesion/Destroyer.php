<?php
//quitar la sesion
if (!session_unset()) {
  
  echo("<script>alert('error al cerrar sesion');</script>");
  header('location: ../index.html');
}

//destruir sesion
if (!session_destroy()) {
  
  echo("<script>alert('error al destruir la sesion');</script>");
  header('location: ../index.html');
}


  
  
  
  header('location: ../index.html');
?>

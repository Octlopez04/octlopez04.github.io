<?php
require_once('sesion/cone.php');


$sql="SELECT IDE,IMG1,Lugar FROM lugares";

$envio=mysqli_query($con,$sql);
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ind3xcarlos</title>
    <link rel="stylesheet"   href="principal.css">
</head>
<body>
<header>
            <section id="logo"> <p> <img src="imagenes/logop.png" id="logo1" ></p></section>
        
            <nav id="usuario"> <pre> <img src="imagenes/inicio.png" id="usuario1">  
            
            <img src="imagenes/usuario.png" id="usuario1">   <img src="imagenes/menu.png" id="menu1">  </pre></nav>

        </header>
<main>
<article>
    <?php while($recivo=mysqli_fetch_array($envio)){?>
    <form method="POST" action="ProyE.php">

<button type="submit" name="nu" value="<?php echo($recivo['IDE']);   ?>"  class="offset"> <img src="bas/<?php   echo($recivo['IMG1']); ?>"> </button>
    


 <?php }?>
</form>
 </article>
 
</main>

<footer>
            <section id="fo1"> <img src="imagenes/advertencia.png" id="adv">  <p id="advt"> ¡Esta pagina es solo un proyecto escolar !</p> </section><br>
            
                <a href="Pprincipal/proyo.html">Octavio</a>
                <a href="mviajes.html">mis viajes</a>
                <a href="Pprincipal/ProyE.html">Emmanuel</a>
                <a href="prox.html">carlos</a>
                <a href="sesion/InicioS.html"></a>
            
        </footer>
        

  

</body>
</html>
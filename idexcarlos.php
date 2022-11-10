<?php
require_once('conn.php');

$sql="SELECT IDE, IMG, LUGAR FROM lugares";

$envio=mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ind3xcarlos</title>
    <link rel="stylesheet"   href="color.css">
     <link rel="stylesheet"   href="menu.css">
</head>
<body>
<header>


            <section id="logo"> <p> <img src="imagenes/logop.png" id="logo1" ></p></section>
            <section id="titulo"> <h1 id="titulo1">* Jalisco Mágico *</h1></section>
            <nav id="usuario"> <img src="imagenes/usuario.png" id="usuario1"> <img src="imagenes/menu.png" id="menu1"></nav>
    
        </header>
<main>
    <?php while($recivo=mysqli_fetch_array($envio)){?>
    <form method="POST" action="ProyE.php">

<article  class="sec1">
<button type="submit" name="nu" value="<?php echo($recivo['IDE']);   ?>"> <img src="<?php   echo($recivo['IMG']); ?>"> </button>
    </article>


 <?php }?>
  
</form> 

</main>

        <footer>

    <section id="sec2">  <a href="index3.php" id="ras"><button><img src="reg.jpg" id="reg"></button</a>
    </section> 
    
        </footer>
        

  

</body>
</html>
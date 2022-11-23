<?php
require_once('sesion/cone.php');


$sql="SELECT IDE, IMG1, Lugar FROM lugares";

$envio=mysqli_query($con, $sql);
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
        <section id="logo"> <p> <img src="imagenes/logo.png" id="logo1" ></p></section>
    
        <nav id="usuario"> <pre> <a href="/jalism/idexcarlos.php"><img src="imagenes/inicio.png" id="usuario1"></a>    <a href="/jalism/sesion/InicioS.html"><img src="imagenes/usuario.png" id="usuario1"> </a>  <img src="imagenes/menu.png" id="menu1">  </pre></nav>

    </header>
<main>
<article id='art'>
<form method="POST" action="lugar.php">
    <?php while($recivo=mysqli_fetch_array($envio)){?>
    

<section id='pa'><button type="submit" name="nu" value="<?php echo($recivo['IDE']);   ?>"  class="offset"> <?php echo($recivo['Lugar']);   ?> <br><img src="bas/<?php   echo($recivo['IMG1']); ?>">  </button></section>
    


 <?php }?>
</form>
 </article>
 
</main>

<footer>
            <section id="fo1"> <img src="imagenes/advertencia.png" id="adv">  <p id="advt"> ¡Esta pagina es solo un proyecto escolar !</p><br>
        
            <p> Integrantes</p><br>
            <p>Carlos Barragan Padilla <br>
                Octavio Lopez Sanchez<br>
                Diego Sigala Rabelero<br>
                Emmanuel Villa Sanchez<br>
                Valeria Badillo Guerrero
            </p>
           <a href="https://www.instagram.com/rinconesjaliscienses/"><img src="imagenes/insta.png" id="insta" ></a>
        </section>
            
              
        </footer>
        

  

</body>
</html>
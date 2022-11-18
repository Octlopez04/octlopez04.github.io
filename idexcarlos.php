<?php
require_once('sesion/cone.php');
session_start();



$sql="SELECT IDE,IMG1,Lugar FROM lugares";

$envio=mysqli_query($con,$sql);
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ind3xcarlos</title>
    <link rel="stylesheet"   href="principal.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<header>
            <section id="logo"> <p> <img src="imagenes/logop.png" id="logo1" ></p></section>
        
            

            <section class="dropdown" id="usuario">
                <p class="dropbtn"><img src="imagenes/usuario.png" id="usuario1"> </p>
                    <section class="dropdown-content">
                    <ul  style="list-style:none;">
                        <?php if ($_SESSION['logged_in_user_id']=null) {
                            ?> <li class="offset"> <?php echo 'Invitado';?> </li> <?php
                            echo("<li><p>Invitado</p></li>");
                        }else {
                            ?> <li class="offset"> <?php echo $_SESSION['logged_in_user_id'];?> </li> <?php
                        }
                            
                        
                            
                        
                        ?>
                        <li class="offset" ><a href="sesion/InicioS.html">Inicio de sesion</a></li>
                        <li class="offset"><a href="sesion/regis.php">Registrarse</a></li>
                    </ul>
                    </section>
            </section>

            <section class="dropdown" id="menu">
                <p class="dropbtn"><img src="imagenes/menu.png" id="menu1"></p>
                    <section class="dropdown-content">
                        <ul style="list-style-type: none;">
                            <li class="offset"><a href="sesion/destroyer.php">Cerrar sesion</a></li>
                        </ul>
                    </section>
            </section>


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
            
            <a href="../index.html">Inicio</a>
            <a href="mviajes.html">mis viajes</a>
            <a href="sesion/registro.html">regis</a>
            <a href="lugares/lugar.html">lugar</a>
            <a href="sesion/InicioS.html">Log In</a>
            
        </footer>
        

  

</body>
</html>
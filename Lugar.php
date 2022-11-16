<?php
    require_once('sesion/cone.php');
    
    $sql="SELECT * FROM Lugares WHERE ide = 2";
    $envio=mysqli_query($con,$sql);
    $consulta=mysqli_fetch_array($envio);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Individual.css">
    <title><?php echo $consulta['Lugar']?> </title>
</head>
<body>
    <header> 
        <section id="logo"> <p> <img src="logop.png" id="logo1" ></p></section>
        <section id="titulo"> <h1 id="titulo1">* jalisco mágico *</h1></section>
        <nav id="usuario"> <img src="usuario.png" id="usuario1"> <img src="menu.png" id="menu1"></nav>
    </header>

    <main>
        <br><br>
        <Article id="Atitle">
            <h2><?php echo $consulta['Lugar']?> </h2>
            <img src="<?php echo $consulta['Img'] ?>"><br>
        </Article>

        <Article id="Ainformacion">
            <p><?php echo $consulta['Descripcion']?> </p>

        </Article>

     

        <Article id="Ainformacione">
        <h3>ACTIVIDADES QUE PODRAS REALIZAR EN ESTE VIAJE</h3>
        <p><?php echo $consulta['Informacione']?> </p>
        </Article>

        <Article id="Acupos">
            <h3>Este Viaje tiene los siguientes cupos</h3><br>
            <p class="marcado"><?php echo $consulta['Cupos']?> Disponibles </p>  
            
        </Article>

        <section id="Afechas">
            <h3>PROXIMAS FECHAS DE VIAJES A ESTE LUGAR</h3><br>
            <p class="marcado"><?php echo $consulta['Fecha']?></p><br>
        </section>

        <Article id="Aprecio">
            <form action="../sesion/InicioS.html" method="POST">
                <h3>El costo de un boleto para este viaje es de</h3><br>
                <p class="marcado"><?php echo $consulta['Precio']?> </p>
                <br><button id="Compra" tipo="submit"></button>
            </form>
        </Article>
        
    </main>

    <footer>
        <section id="fo1"> <img src="advertencia.png" id="adv">  <p id="advt"> ¡Esta pagina es solo un proyecto escolar !</p> </section><br>
        <a href="../index.html">Inicio</a>
        <a href="mviajes.html">mis viajes</a>
        <a href="sesion/registro.html">regis</a>
        <a href="lugares/lugar.html">lugar</a>
        <a href="sesion/InicioS.html">Log In</a>
    </footer>
</body>
</html>
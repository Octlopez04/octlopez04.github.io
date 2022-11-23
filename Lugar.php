<?php
    require_once('sesion/cone.php');
    $a1=$_POST['nu'];
    $sql="SELECT IDE, lugar, Descripcion, IMG1, IMG2, IMG3 FROM lugares WHERE IDE = '$a1'";

    $envio=mysqli_query($con,$sql);

    $consulta=mysqli_fetch_array($envio);

    $qa=("SELECT * FROM Misviajes"); 
    $q = mysqli_query($con,$qa);
    $qp=mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Individual.css">

    <title> <?php echo $consulta['lugar'] ?>  </title>
</head>
<body>
    <header>
        <section id="logo"> <p> <img src="imagenes/logo.png" id="logo1" ></p></section>
    
        <nav id="usuario"> <pre> <a href="/jalism/idexcarlos.php"><img src="imagenes/inicio.png" id="usuario1"> </a>   <a href="/jalism/sesion/InicioS.html"><img src="imagenes/usuario.png" id="usuario1"></a>   <img src="imagenes/menu.png" id="menu1">  </pre></nav>

    </header>

    <main>
        <br><br>
        <Article id="Atitle">
            <h1><?php echo $consulta['lugar']?></h1>
            <img src="bas/<?php echo $consulta['IMG1'] ?>" id="imagenes"><br>
        </Article>

        <Article id="Ainformacion">
            <p><?php echo $consulta['Descripcion']?></p>

        </Article>

     

        <Article id="Ainformacione">
        <h3>ACTIVIDADES QUE PODRAS REALIZAR EN ESTE VIAJE</h3>
        <p><?php echo $qp['Descripcionextra']?></p>
        </Article>

        <Article id="Acupos">
            <h3>ESTE VIAJE TIENE LA SIGUIENTE CANTIDAD DE CUPOS</h3><br>
            <p class="marcado"><?php echo $qp['Cupos']?> Disponibles </p>  

        </Article>
        
 <section id="Afechas">
            <h3>PROXIMAS FECHAS DE VIAJES A ESTE LUGAR</h3><br>
            <p class="marcado"><?php echo $qp['Fecha']?> </p><br>
        </section>
        

        <Article id="Aprecio">
            <form action="../sesion/InicioS.html" method="POST">
                <h3>EL COSTO PARA UN BOLETO DE ESTE VIAJE ES DE</h3><br>
                <p class="marcado"><?php echo $qp['Precio']?> </p>
                <br><button id="Compra" tipo="submit"></button>
            </form>
        </Article>
        
    </main>

    <footer>
        <section id="fo1"> <img src="imagenes/advertencia.png" id="adv">  <p id="advt"> ¡Esta pagina es solo un proyecto escolar !</p> <br>
        
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
<?php

    require_once('cone.php');
    /*el post del ide va a venir de un cuadro de la pagina anterior para no darle un numero entero
        */
    $ide=$_POST['aidi'];
    $sql="SELECT * FROM Lugares WHERE Id = '$ide'";
    $envio=mysqli_query($con,$sql);
    $env=mysqli_fetch_array($envio)
    

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../principal.css">
        <meta charset="UTF-8">
        <title>Lugares</title>
    </head>
    <body>
        <header>
            <h1>Todo en una tabla</h1>
        </header>
        <main>
            <table id="tab">
                
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                </tr>
                <?php  /*ciclo que va a hacer que muestre los lugares de 10 en 10 donde m es el maximo que va a recorrer por cada casilla*/?>
                <?php  for ($i=1; $i <= $m=10 ; $i++) {?>
                <tr>
                    <td><p><?php echo($env['Id']); ?></p></td>
                    <td><p><?php echo($env['Nombre']);?></p></td>
                    <td><?php echo($env['Precio']);?></td>
                    <td><?php echo($env['Descripcion']);?></td>
                    <td><img src="img/<?php echo($env['Imagen'])?>"></td>
                        <form action="index.php" method="post">
                    <td><button type="submit" value="<?php echo($env['Id']);?>" name="aidi" >Ve al producto</button></td>
                        </form>
                </tr>
                    <?php } ?>
            </table>
                    
            <section>
            <form action="most.php" method="post">
                <button type="submit" value="1" name="aidi"><p>1</p></button>
                <button type="submit" value="11" name="aidi"><p>2</p></button>
                <button type="submit" value="21" name="aidi"><p>3</p></button>
            </form>    
            </section>
        </main>
        <footer><p>Octavio Humberto López Sánchez</p><br>
                    <a href="index.php" >Regeresar al inicio</a>
        </footer>
    </body>
</html>
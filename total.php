<?php

include_once 'templates/header.php';

?>

<div id = "breadcrumb">
        <h4>Home > Ticket</h4>
    </div>
    <div id="publicidad">
        <img src="img/Publicidad 4.jpg" width="80%">
    </div>
    <br>
    <h2 style="text-align: center;">Gracias por Comprar en MacroHard</h2>
    <h5 style="text-align: center;">La Paz, BCS, 23000 - <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; else echo 'Anonimo' ;?></h5>

<?php
    include_once 'database.php';
          $pdo = Database::connect();
          $sql = 'SELECT  * FROM Carrito WHERE correoCliente='.'"'.$_SESSION['email'].'"'.'';

          echo "<table id='mitabla' style='border: 0px solid black; border-collapse: collapse;width: 60%; text-align: center;margin: 0 auto;'>";
          echo "<tr>
          <th class='columna'>Producto</th>
          <th class='columna'>Precio Unitario</th>
          <th class='columna'>Cantidad</th>
          <th class='columna'>SubTotal</th>
          <th class='columna'>Fecha</th>
          </tr>";

          foreach($pdo->query($sql) as $row){
              echo "<tr>";
              echo "<td class='celda'>".$row['nombre']."</td>";
              echo "<td class='celda'>".$row['precio']."</td>";
              echo "<td class='celda'>".$row['cantidad']."</td>";
              echo "<td class='celda' id='numero1'>".$row['total']."</td>";
              echo "<td class='celda' id='numero1'>".$row['fecha']."</td>";
              echo "</tr>";
          }
          Database::disconnect();
          echo "<table>";
?>
<br>
<br>

<?php
        
    include_once 'database.php';

    $pdo = Database::connect();
    $sql = "SELECT SUM(precio) AS total FROM carrito";
    $sql2 = "TRUNCATE TABLE carrito";
    $sql3 = "INSERT INTO detalleVenta (correoCliente, Producto, costo, cantidad, fecha) SELECT correoCliente, nombre, precio, cantidad, fecha FROM carrito";
    
    if(isset($_POST['btn_pagar']))
    {
        foreach ($pdo->query($sql) as $row) {
            echo "<a style='position: relative; left: 30%'>Usted Pagó:</a>";
            echo "<button type='text' name='total' style='position: relative; left: 30%;top: 70%;width: 7%'> $".$row['total']."</button";
        }
        foreach ($pdo->query($sql3) as $row) {
            //echo "Carrito Copiado a detalleVenta";
        }
        foreach ($pdo->query($sql2) as $row) {
           // echo "Carrito Eliminado";
        }
        
    }

    

    Database::disconnect(); 
?>

<form action="todos_los_productos.php">
    <a href="todos_los_productos.php" style="position: relative; left: 50%;border: 3px solid black; background-color: black; color: white;">Seguir comprando</a>
</form>


<?php

include_once 'templates/header.php';  

?>
    <div id = "breadcrumb">
        <h4>Home > Mi Carrito</h4>
    </div>
    <div id="publicidad">
        <img src="img/Publicidad 4.jpg" width="80%">
    </div>
     <!--NO MOVER NADA ARRIBA DE ESTO--->

     <br>
     <br>
     <h2 style="text-align: center;">Mi Carrito</h2>
     <h5 style="text-align: center;">La Paz, BCS, 23000 - <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; else echo 'Anonimo' ;?></h5>
      

    <?php   
          include_once 'database.php';
          $pdo = Database::connect();
          $sql = 'SELECT  * FROM Carrito WHERE correoCliente='.'"'.$_SESSION['email'].'"'.'';

          echo "<table id='mitabla' style='border: 0px solid black; border-collapse: collapse;width: 60%; text-align: center;margin: 0 auto;'>";
          echo "<tr>
          <th class='columna'>Imagen</th>
          <th class='columna'>Producto</th>
          <th class='columna'>Precio Unitario</th>
          <th class='columna'>Cantidad</th>
          <th class='columna'>SubTotal</th>
          </tr>";
          foreach($pdo->query($sql) as $row){
              echo "<tr>";
              echo "<td class='celda'><img src='".$row['imagen']."'></td>";
              echo "<td class='celda'>".$row['nombre']."</td>";
              echo "<td class='celda'>".$row['precio']."</td>";
              echo "<td class='celda'>".$row['cantidad']."</td>";
              echo "<td class='celda' id='numero1'>".$row['total']."</td>";
              echo "</tr>";
          }
          Database::disconnect();
          echo "<table>";
         
    ?>

            <form action="todos_los_productos.php">
            <button class="btn-agregar"><strong>+</strong></button>
            </form>
            <br>
            <br>
            <a style="position: relative; left: 20%">Este es su Carrito de Compras</a>
            <br>
            <br>
            <form action="limpiar.php" method="post">
            <input type="submit" value="Limpiar Carrito" name="btn_limpiar" style="position: relative; left: 20%;">
            </form>
            <br>
        <?php
            include_once 'database.php';

            $pdo = Database::connect();
            $sql = "SELECT SUM(precio) AS total FROM carrito";
            
                foreach ($pdo->query($sql) as $row) {
                    echo "<a style='position: relative; left: 60%''>Total: </a>";
                    echo "<button type='text' name='total' style='position: relative; left: 60%; width: 7%'> $".$row['total']."</button";
                }

            

            Database::disconnect(); 
        ?>
        <br>
        <br>
        <br>
        <form action="total.php" method="post">
            <button value="suma" name="btn_pagar" onclick="alert(suma(10,50));" style="position: relative; left: 65%; width: 10%; background-color: #759DC0;"><strong>Pagar</strong></button>
        </form>
            <br>
            <br>

        
</body>
</html>
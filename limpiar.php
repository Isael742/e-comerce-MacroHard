<?php
    session_start();
        
    include_once 'database.php';

    $pdo = Database::connect();
    $sql = "TRUNCATE TABLE carrito";
    
    if(isset($_POST['btn_limpiar']))
    {
        foreach ($pdo->query($sql) as $row) {
            echo "<p>Carrito eliminardo</p>";
        }
    }

    

    Database::disconnect(); 
    header('Location: carrito.php')
?>

<?php
    session_start();
        
    include_once 'database.php';
    $ID = 0;
    $DATE = 
    $pdo = Database::connect();
    $sql = "INSERT INTO Carrito values(?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    if($_POST['cantidad']<1){
        header('Location: index.php');
    }
    if(!isset($_SESSION['email'])){
        $_SESSION['email'] = "No identificado";
    }

    $q->execute(array($ID,
    $_SESSION['email'],
     $_POST['nombre'],
     $_POST['cantidad'],
     $_POST['precio'],
      $_POST['imagen'],
     ($_POST['cantidad']*$_POST['precio']),
     date("Y-m-d H:i:s")
    ));

    Database::disconnect(); 
   header('Location: carrito.php');
?>
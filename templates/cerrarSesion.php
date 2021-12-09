<?php
    session_start();
    if(isset($_SESSION['username'])){
        session_destroy();
        header('Location:../index.php' );
        exit();
    }else{
        echo "<a href='index.php'>Ha ocurrido un error al cerrar sesion</a>";
    }
?>
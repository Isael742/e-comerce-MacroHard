<?php
    $datosValidos = true;

    if(isContrasenasIguales()){
        echo "<script>alert('las contraseñas deben ser iguales')</script>";
        $datosValidos = false;
    }
    if($_POST['name'] == null){
        echo "<script>alert('El nombre esta vacio')</script>";
     ////echo "<script>document.getElementById('name').classList.add('borde-rojo')</script>";
        $datosValidos = false;
    }


    if($_POST['new_pass'] == null){
        echo "<script>alert('La contraseña está vacia')</script>";
     ////echo "<script>document.getElementById('new_pass').classList.add('borde-rojo')</script>";
        $datosValidos = false;
    }

    if(!isset($_POST['email'])){
        echo "<script>alert('El correo electronico está vacio')</script>";
        $datosValidos = false;
    }else{
        if(isCorreoUnico($_POST['email'])){
            echo "<script>alert('El correo ya está registrado')</script>";
            $datosValidos = false;
        }
    }
    if($datosValidos){
        agregarUsuario($_POST['name'], $_POST['email'], $_POST['new_pass']);
        header('Location: login.php');
    }else{
       echo "<a href='crear_cuenta.php'>Regresar</a>";
    }

    function isContrasenasIguales(){
        return $_POST['new_pass'] != $_POST['confirm_pass'];
    }



    function  isCorreoUnico($email){
        include_once 'database.php';
        $pdo = Database::connect();
        $sql = 'SELECT email FROM Usuarios';
        foreach ($pdo->query($sql) as $row) {
            if($email == $row['email']){
                Database::disconnect();
                return true;
            }
        }
        Database::disconnect();
        return false;
    }

    function agregarUsuario($nombre, $email, $contrasena){
        $ID = 0;
        include_once 'database.php';
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Usuarios (id,nombre,email,contrasena) values(?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($ID,$nombre,$email,(password_hash($contrasena, PASSWORD_DEFAULT))));
        Database::disconnect();   
    }
?>
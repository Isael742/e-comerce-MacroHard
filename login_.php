<?php
    session_start();
    
    if(login($_POST['email'], $_POST['password'])){
        //AQUI YA VALIDAMOS LA IDENTIDAD DEL USUARIO 
        //echo "<button>Así se muestra html desde php!</button>";
       // var_dump($_POST);
        echo $_SESSION['username']; // variable se sesion 
      header('Location: todos_los_productos.php'); 
    }else{
        header('Location: Login.php');
        
    }
   /// echo (password_verify($_POST['password'],'$2y$10$0eIItnuFA5Kxf93NJV.yBuS5EGjMRxkr3fyO2.CICUX1a.wtd7Ts2'));

    function login($email , $password){
        include_once 'database.php';
        $pdo = Database::connect();
        $sql = 'SELECT email, contrasena, nombre FROM Usuarios';
        foreach($pdo->query($sql) as $row){
            
            if($email == $row['email'] && password_verify($password, substr($row['contrasena'],0,60))){
              
                $_SESSION['username'] = $row['nombre'];
                $_SESSION['email'] = $row['email'];
                Database::disconnect();
                return true;
            }
        }
        Database::disconnect();
        return false;
    
    }
?>
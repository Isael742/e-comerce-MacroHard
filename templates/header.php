
<!DOCTYPE html>

<html lang="en">
<head>
     <meta name = "viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div style="width: 20%">
    <?php
    session_start();
    ?>
    </div>
    <div class="header">
        <img class = "logo" src="img/logo.png" width="10%">  
        <div class="menu-header" >
            <span class="seccion-menu">  <div class="bola-roja"></div>
           <?php if (isset($_SESSION['username']))echo "<a href=
            'templates/cerrarSesion.php'>Cerrar";else echo "<a href=
            'login.php'>Iniciar";?> Sesion</a></span>
            <span class="seccion-menu">  <div class="bola-roja"></div><a href="crear_cuenta.php"> Registro </a></span> 
            <span class="seccion-menu">  <div class="bola-roja"></div><a href="contacto.php"> Contacto </a></span>
            <span class="seccion-menu">  <div class="bola-roja"></div><a href="carrito.php">Mi carrito</a></span>
        </div>
    </div>
    
   
    <div class="barra-navegacion">
        <div><a href ="index.php">Home</a></div> 
        <div>Tecnologia</div>
        <div>Herramientas</div> 
        <div>Muebles</div>
        <div><a href ="todos_los_productos.php">Todos los Productos</a></div>
        <div class = "barra-busqueda" ><input type="search" placeholder="Buscar..."></div>
        <div style="color: white; text-decoration-line: 1px;">
            <?php
            if (isset($_SESSION['username'])){

    echo "Bienvenido ";
    echo $_SESSION['username'];
    }
    else 
    echo "Usuario anonimo";
            ?>
        </div>
    </div>
    


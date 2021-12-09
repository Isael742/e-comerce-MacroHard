<?php include_once 'templates/header.php'?> 
    
    <div id = "breadcrumb">
        <h4>Home > Crear Nueva Cuenta</h4>
    </div>
    <div id="publicidad">
        <img src="img/Publicidad 3.jpg" width="80%">
    </div>

<!-------------Login-------440----------->

<div style="background-color: white; width: 450px; height: 550px; margin:auto;left: 35%; top: 50%; ">
    <h1 class="login">Crear Cuenta Nueva</h1>
        <form method="post"action="crearcuenta.php" >
            <input type="text" id="name"name="name" placeholder="Nombre de Usuario" autocomplete ="off"style="position: relative;top: 40px; width: 380px; height: 30px;">
            <input type="text" id = 'email'name="email" placeholder="Correo del Usuario" autocomplete = "off"style="position: relative;top: 60px; width: 380px; height: 30px;">
            <input type="password" name="new_pass" placeholder="Nueva Contraseña" style="position: relative; top: 80px; width: 380px; height: 30px;">
            <input type="password" name="confirm_pass" placeholder="Confirmar Nueva Contraseña" style="position: relative;top: 100px; width: 380px; height: 30px;">
            <button type ="submit"style="position: relative; top: 130px; width: 380px; height:40px; background-color: #759DC0;color: black; "><strong><font face="Arial Black">Crear Cuenta</font></strong></button>
        </form>
        <a href="" class="login-recovery"  style = "position: relative; top: 130px;">¿Necesitas Ayuda?</a>
    </div>
     <!--NO MOVER NADA ARRIBA DE ESTO--->
   
</body>
<script>
    
   ////// document.getElementById('email').classList.add('borde-rojo');
//document.getElementById('name').classList.add('borde-rojo');
   
    </script>
</html>


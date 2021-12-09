<?php include_once 'templates/header.php' ?>
    
    <div id = "breadcrumb">
        <h4>Home > Iniciar Sesión </h4>
    </div>
    <div id="publicidad">
        <img src="img/Publicidad 1.jpg" width="90%">
    </div>
      
<!-------------Login------------------>


<div id="secicon-productos">
    <div id = "titulo-descuentos">
        <h4>Iniciar Sesión</h4>
    </div>
    <div class="login-cuadro">
            <form action="login_.php" method="post">
                <h1 class="login">Bienvenido</h1>
                <div class="elemento-login">  
                    <input id = 'email' type="text" name="email" placeholder="Correo Electronico" class="email-login"></div>
                    <div class="elemento-login">
                        <input  type="password" name="password" placeholder="Contraseña" class="pass-login"></div>
                        <div class="elemento-login">
                            <button type="submit"  class="btn-login" ><strong><font face="Arial Black">Ingresar</font></strong></button>
                            
                            <a href="" class="login-recovery">>¿Necesitas Ayuda?<</a>
                        </form>
                    </div>
                </div>
                
            </div> 
            



     <!--NO MOVER NADA ARRIBA DE ESTO--->
        
</body>

</html>
<!--?php
    if(isset($_SESSION))
   echo "<script>
   document.querySelector('.email-login').classList.add('borde-rojo');

?>
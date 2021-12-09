<?php include_once 'templates/header.php' ?>
    
    <div id = "breadcrumb">
        <h4>Home</h4>
    </div>
    <div id="publicidad">
        <img src="img/Publicidad_6.jpg" width="80%">
    </div>


    

    <div id="secicon-productos">
        <div id = "titulo-descuentos">
            <h4>Todos los Productos</h4>
        </div >

        <!-------------fila 1----------------->
        <div class ="imagen">

            <div class="caja-img">
                <img src="img/proyector.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/proyector.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Proyector 1500 lumens" style ="display:none">
                        <input type="text"name = "precio" value="60000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Proyector 1500 lumens <div style="color: red;">$60000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>


            <div class="caja-img">
            <!--img src={Direccion de la imagen} width="60%" name = "img" --> 
                <img src="img/adaptador.jpg" width="60%" name = "img" > 

                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <!--Los valores que ponen en estos deben coincidir con los de "texto-caja-imagen"-->
                        <!--input type="text"name = "imagen" value={Direccion de la imagen} style ="display:none"-->
                        <input type="text"name = "imagen" value="img/adaptador.jpg" style ="display:none">

                        <!--input type="text"name = "nombre" value={Descripcion del producto} style ="display:none"-->
                        <input type="text"name = "nombre" value="Adaptador USB a tipo C" style ="display:none">

                        <!--input type="text"name = "precio" value={precio del producto} style ="display:none"-->
                        <input type="text"name = "precio" value="100" style ="display:none">

                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Adaptador USB a tipo C<div style="color: red;">$100</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>


            <div class="caja-img">
                <img src="img/celular-xiaomi.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/celular-xiaomi.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Celular Xiaomi 64 GB" style ="display:none">
                        <input type="text"name = "precio" value="6000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Celular Xiaomi 64 GB<div style="color: red;">$6000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
            <!------------------------------------------->
            <div class="caja-img">
                <img src="img/xbox.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/xbox.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Xbox Series S" style ="display:none">
                        <input type="text"name = "precio" value="8000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Xbox Series S <div style="color: red;">$8000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
            <!------------------------------------------->
            
        </div>
        <br>
        <!-------------fila 2----------------->
        <div class="imagen">
            <div class="caja-img">
                <img src="img/escritorio.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/escritorio.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Excritorio Oficina - Madera de Likea" style ="display:none">
                        <input type="text"name = "precio" value="10000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Excritorio Oficina - Madera de Likea<div style="color: red;">$10000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/escaner.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/escaner.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Escaner del Oxxo" style ="display:none">
                        <input type="text"name = "precio" value="500" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Escaner del Oxxo<div style="color: red;">$500</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/silla.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/silla.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Silla rreiser 850" style ="display:none">
                        <input type="text"name = "precio" value="13999" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Silla rreiser 850<div style="color: red;">$13999</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/tanque.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/tanque.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Tanque Sovietico de la UNAM Colección 2021" style ="display:none">
                        <input type="text"name = "precio" value="6000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Tanque Sovietico de la UNAM Colección 2021<div style="color: red;">$6000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            
        </div>
        <br>
        <!--------------Fila 3---------------->
        <div class="imagen">
            <div class="caja-img">
                <img src="img/librero.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/librero.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Librero Madera de Arce" style ="display:none">
                        <input type="text"name = "precio" value="6500" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Librero Madera de Arce<div style="color: red;">$6500</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
            
            <div class="caja-img">
                <img src="img/tv.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/tv.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Smart TV LG 4k" style ="display:none">
                        <input type="text"name = "precio" value="12000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Smart TV LG 4k<div style="color: red;">$12000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/almohada.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/almohada.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Almohada Gamer Blanca" style ="display:none">
                        <input type="text"name = "precio" value="3500" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Almohada Gamer Blanca<div style="color: red;">$3500</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/comedor.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/comedor.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Comedor Madera de Mezquite" style ="display:none">
                        <input type="text"name = "precio" value="1000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Comedor Madera de Mezquite<div style="color: red;">$1000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
        </div>
        <br>
        <!-------------Fila 4--------------->
        <div class="imagen">

            <div class="caja-img">
                <img src="img/sala.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/sala.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Sala Moderna" style ="display:none">
                        <input type="text"name = "precio" value="15000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Sala Moderna<div style="color: red;">$15000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/nose2.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/nose2.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Estante de Marmol" style ="display:none">
                        <input type="text"name = "precio" value="20000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Estante de Marmol<div style="color: red;">$20000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/bat.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/bat.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Bat de BaseBall" style ="display:none">
                        <input type="text"name = "precio" value="300" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Bat de BaseBall<div style="color: red;">$300</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/procesador4.jpeg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/procesador4.jpeg" style ="display:none">
                        <input type="text"name = "nombre" value="Procesador Ryzen AMD 5" style ="display:none">
                        <input type="text"name = "precio" value="7000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Procesador Ryzen AMD 5<div style="color: red;">$7000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
        </div>
        <br>
        <!----------Fila 5------------------>
        <div class="imagen">

            <div class="caja-img">
                <img src="img/jabon.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/jabon.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Jabón de Judio" style ="display:none">
                        <input type="text"name = "precio" value="50" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Jabón de Judio<div style="color: red;">$50</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/lavadora.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/lavadora.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Lavadora Whirpool" style ="display:none">
                        <input type="text"name = "precio" value="8000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Lavadora Whirpool<div style="color: red;">$8000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>

            <div class="caja-img">
                <img src="img/zapato.jpg" width="60%" name = "img" > 
                <form action="test.php" method="post">
                        <span class="texto-caja-imagen">
                        <input type="text"name = "imagen" value="img/zapato.jpg" style ="display:none">
                        <input type="text"name = "nombre" value="Zapatos de Cuero de Rez" style ="display:none">
                        <input type="text"name = "precio" value="2000" style ="display:none">
                        <input type="number" name = "cantidad" value="1" style ="border-radius:5px">
                        <div class="texto-caja-imagen"><h6>Zapatos de Cuero de Rez<div style="color: red;">$2000</div></h6></div>
                        <input type="submit" value ="Agregar al Carrito">
                        </span>
                </form>
            </div>
            
        </div>
        <br>
        </div>
    </div>
    <!--NO MOVER NADA ARRIBA DE ESTO--->
</body>
</html>

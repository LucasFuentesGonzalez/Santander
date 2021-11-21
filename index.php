
    <title>Login Santander</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/NY1I7v3.png" />
</head>
<body>
<!--Añadimos el logo de santander-->
<img class="santander" src="https://i.imgur.com/R0A5EZP.png" alt="Logo Banco Santander">

<div id="contenedor">
    <div class="header">
        <h1>¡Bienvenido a Banco Santander!</h1>

        <form action="index.php" method="post">

            <div class="interior">
                <label for="nombre">Nombre:</label>
                <input class="input" type="text" id="nombre" name="nombre" placeholder="Inserte su nombre">
                <p class="error"><?php echo $error_nombre ?></p><!--Mostramos el error de nombre-->
            </div>


            <div class="interior">
                <label for="apellido">Apellidos:</label>
                <input class="input" type="text" id="apellido" name="apellido" placeholder="Inserte su apellido">
                <p class="error"><?php echo $error_apellidos ?></p><!--Mostramos el error de apellidos-->
            </div>

            <div class="interior">
                <label for="email">Email:</label>
                <input class="input" type="email" id="email" name="email" placeholder="Inserte su email">
                <p class="error"><?php echo $error_email ?></p><!--Mostramos el error de email-->
            </div>

            <div class="interior">
                <label for="telefono">Telefono:</label>
                <input class="input" type="tel" id="telefono" name="telefono" placeholder="Inserte su telefono">
                <p class="error"><?php echo $error_telefono ?></p><!--Mostramos el error de telefono-->
            </div>

            <div class="interior">
                <label for="postal">Código Postal:</label>
                <input class="input" type="text" id="postal" name="postal" placeholder="Inserte su Código Postal">
                <p class="error"><?php echo $error_postal ?></p><!--Mostramos el error de codigo postal-->
            </div>

            <div class="interior">
                <label for="ciudad">Ciudad:</label>
                <input class="input" type='text' id="ciudad" name="ciudad" placeholder="Inserte su ciudad">
                <p class="error"><?php echo $error_ciudad ?></p><!--Mostramos el error de ciudad-->
            </div>

            <div class="interior">
                <label for="domicilio">Domicilio:</label>
                <input class="input" type='text' id="domicilio" name="domicilio" placeholder="Inserte su domicilio">
                <p class="error"><?php echo $error_domicilio ?></p><!--Mostramos el error de domicilio-->
            </div>

            <div class="interior">
                <label for="contraseña">Contraseña:</label>
                <input class="input" type="text" id="contraseña" name="contraseña" placeholder="Inserte su contraseña">
                <p class="error"><?php echo $error_contrasena ?></p><!--Mostramos el error de contrasena-->
            </div>

            <div class="interior">
                <label for="web">Web:</label>
                <input class="input" type="url" id="web" name="web" placeholder="Inserte web">
                <p class="error"><?php echo $error_web ?></p><!--Mostramos el error de web-->
            </div><br>

            <div class="interior" style="margin-left: 40px;">
                <label for="provincia">Provincia:</label>
                <select class="input" name="provincia" style="margin-left: 25px;">
                    <option value="Seleccione provincia">Seleccione provincia</option>
                    <?php
                    $lineas=file_get_contents("archivo.txt");//Indicamos cual es nuestro fichero con las provincias
                    $provincias=explode("\n",$lineas);
                    //Mediante un foreach sacamos y mostramos las provincias con su codigo
                    foreach($provincias as $provincia){
                        $opciones.='<option value="'.$provincia.'">'.$provincia.'</option>';
                    }
                    echo $opciones;//Imprimimos las provincias en el select
                    ?>
                    </option>
                </select>
            </div><br><br>
            <!--Creamos el boton para enviar el formulario-->
            <input class="enviar" type="submit" name="Confirmar" value="Confirmar">
        </form>

    </div>
</div>

</body>
</html>

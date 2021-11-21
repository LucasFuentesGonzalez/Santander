<?php

    if(isset($_POST['Confirmar'])) {
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
        $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $postal = filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING);
        $ciudad = filter_input(INPUT_POST, 'ciudad', FILTER_SANITIZE_STRING);
        $domicilio = filter_input(INPUT_POST, 'domicilio', FILTER_SANITIZE_STRING);
        $contrasena = filter_input(INPUT_POST, 'contraseña', FILTER_SANITIZE_STRING);
        $web = filter_input(INPUT_POST, 'web', FILTER_SANITIZE_STRING);
    }

    $re1 = preg_match("/[0-9]/",$nombre);
    $re2 = preg_match("/[0-9]/",$apellido);
    $re3 = preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-ZÑa-zñ]{2,6}+$/",$email);
    $re4 = preg_match("/^([0-9]{9,9})$/",$telefono);
    $re5 = preg_match("/^([0-9]{5,5})$/",$postal);
    $re6 = preg_match("/[0-9]/",$ciudad);
    $re7 = preg_match("/[A-Za-zÑn]/",$domicilio);
    $re8 = preg_match("/((?=.*?[A-ZÑ])(?=.*?[a-zñ])(?=.*?[0-9])(?=.*?[^A-Za-z0-9])).{8,16}/",$contrasena);
    $re9 = preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$web);


    $error_nombre = " ";
    $error_apellidos = " ";
    $error_email = " ";
    $error_telefono = " ";
    $error_postal = " ";
    $error_ciudad = " ";
    $error_domicilio = " ";
    $error_contrasena = " ";
    $error_web = " ";


    if(isset($_POST['Confirmar'])) {
        if ($re1 == 1){$error_nombre = "*Solo puedes introducir letras<br>";}
        if ($re2 == 1){$error_apellidos = "*Solo puedes introducir letras<br>";}
        if ($re3 == 0){$error_email = "*Introduce un email válido<br>";}
        if ($re4 == 0){$error_telefono = "*Debes introducir 9 numeros<br>";}
        if ($re5 == 0){$error_postal = "*Solo se permiten 5 numeros en estes campo<br>";}
        if ($re6 == 1){$error_ciudad = "*Solo puedes introducir letras<br>";}
        if ($re7 == 0){$error_domicilio = "*Solo puedes introducir letras<br>";}
        if ($re8 == 0){$error_contrasena = "*Debes introducir una contraseña de entre 8 a 16 caracteres con almenos una mayuscula, una minuscula, un numero y un caracter especial<br>";}
        if ($re9 == 0){$error_web = "*Introduce un link válido<br>";}

        if (empty($nombre)){$error_nombre = "*Introduce un nombre<br>";}
        if (empty($apellidos)){$error_apellidos = "*Introduce un apellido<br>";}
        if (empty($email)){$error_email = "*Introduce un email<br>";}
        if (empty($telefono)){$error_telefono = "*Introduce un telefono<br>";}
        if (empty($postal)){$error_postal = "*Introduce un codigo postal<br>";}
        if (empty($ciudad)){$error_ciudad = "*Introduce una ciudad<br>";}
        if (empty($domicilio)){$error_domicilio = "*Introduce un domicilio<br>";}
        if (empty($contrasena)){$error_contrasena = "*Introduce tu contraseña<br>";}
        if (empty($web)){$error_web = "*Introduce una web<br>";}
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<img class="santander" src="https://i.imgur.com/R0A5EZP.png">

<div id="contenedor">
    <div class="header">
        <h1>¡Bienvenido a Banco Santander!</h1>

        <form action="index.php" method="post">

            <div class="interior">
                <label for="nombre">Nombre:</label>
                <input class="input" type="text" id="nombre" name="nombre" placeholder="Inserte su nombre">
                <p class="error"><?php echo $error_nombre ?></p>
            </div>


            <div class="interior">
                <label for="apellido">Apellidos:</label>
                <input class="input" type="text" id="apellido" name="apellido" placeholder="Inserte su apellido">
                <p class="error"><?php echo $error_apellidos ?></p>
            </div>

            <div class="interior">
                <label for="email">Email:</label>
                <input class="input" type="email" id="email" name="email" placeholder="Inserte su email">
                <p class="error"><?php echo $error_email ?></p>
            </div>

            <div class="interior">
                <label for="telefono">Telefono:</label>
                <input class="input" type="tel" id="telefono" name="telefono" placeholder="Inserte su telefono">
                <p class="error"><?php echo $error_telefono ?></p>
            </div>

            <div class="interior">
                <label for="postal">Código Postal:</label>
                <input class="input" type="text" id="postal" name="postal" placeholder="Inserte su Código Postal">
                <p class="error"><?php echo $error_postal ?></p>
            </div>

            <div class="interior">
                <label for="ciudad">Ciudad:</label>
                <input class="input" type='text' id="ciudad" name="ciudad" placeholder="Inserte su ciudad">
                <p class="error"><?php echo $error_ciudad ?></p>
            </div>

            <div class="interior">
                <label for="domicilio">Domicilio:</label>
                <input class="input" type='text' id="domicilio" name="domicilio" placeholder="Inserte su domicilio">
                <p class="error"><?php echo $error_domicilio ?></p>
            </div>

            <div class="interior">
                <label for="contraseña">Contraseña:</label>
                <input class="input" type="text" id="contraseña" name="contraseña" placeholder="Inserte su contraseña">
                <p class="error"><?php echo $error_contrasena ?></p>
            </div>

            <div class="interior">
                <label for="web">Web:</label>
                <input class="input" type="url" id="web" name="web" placeholder="Inserte web">
                <p class="error"><?php echo $error_web ?></p>
            </div><br>

            <div class="interior">
                <label for="provincia">Provincia:</label>
                <select class="input" name="provincia">
                    <option value="Seleccione provincia">Seleccione provincia</option>
                    <?php
                        $lineas=file_get_contents("archivo.txt");
                        $ciudades=explode("\n",$lineas);

                        foreach($ciudades as $ciudad){
                            $opciones.='<option value="'.$ciudad.'">'.$ciudad.'</option>';
                        }
                        echo $opciones;
                    ?>
                    </option>
                </select><br><br>
            </div>

            <input class="enviar" type="submit" name="Confirmar" value="Confirmar">
        </form>
    </div>
</div>

</body>
</html>



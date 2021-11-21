<?php

    $meses = [];
    $string = file_get_contents("archivo.txt");
    $array = explode("\n",$string);
    foreach ($array as $fila){
        $item = explode(" ",$fila);
        $meses[] = [
            'numero' => $item[0],
            'nombre' => $item[1]
        ];
    }

    $muestra = [
        'nombre' => 'JORGE',
        'apellido' => 'Fuentes',
        'email' => 'jorgeylucas@gmail.com',
        'telefono' => '662437243',
        'postal' => '28400',
        'ciudad' => 'Collado Villalba',
        'domicilio' => 'C// Alfonso 13, Nº 151',
        'contraseña' => 'Aaaaaaaa1#',
        'web' => 'https://jairogarciarincon.com/clase/programacion-en-php/practica-formulario-de-entrada-de-datos',
    ];


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


    $uno = "/^[a-zA-Z\s]*$/"; //(letras mayus y minus)     /^[a-zA-Z\s]*$/
    $dos = "/^[a-zA-Z\s]*$/"; //(letras mayus y minus)      /^[a-zA-Z\s]*$/
    $tres = "//"; // (letras mayus y minus y numeros) + @ + (letras solo minus) + . +(letras solo minus) /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/
    $cuatro = "//"; //(9 numeros del 0 al 9)
    $cinco = "//"; //([CODIGO DEL C.P] + 5 NUMEROS DEL 0 AL 9)
    $seis = "/^[a-zA-Z\s]*$/"; //(Letras mayus y minus)
    $siete = "//"; //(Nada)
    $ocho = "//"; //(Letra minuscula y mayuscula, numeros y caracter especial)
    $nueve = "//";


    $re1 = preg_match("/[A-Za-z]/",$nombre);
    $re2 = preg_match("/[A-Za-z]/",$apellido);
    $re3 = preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}+$/",$email);
    $re4 = preg_match("/[0-9]{9,9}/",$telefono);
    $re5 = preg_match("/[0-9]{5,5}/",$postal);
    $re6 = preg_match("/[A-Za-z]/",$ciudad);
    $re7 = preg_match([],$domicilio);
    $re8 = preg_match("/((?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^A-Za-z0-9])).{8,16}/",$contrasena);
    $re9 = preg_match([],$web);

    $error_nombre = " ";
    $error_apellidos = " ";
    $error_email = " ";
    $error_telefono = " ";
    $error_postal = " ";
    $error_ciudad = " ";
    $error_domicilio = " ";
    $error_contrasena = " ";
    $error_web = " ";

    if ($re1 == 0){$error_nombre = "Solo puedes poner letras";}
    if ($re2 == 0){$error_apellidos = "Solo puedes poner letras";}
    if ($re3 == 0){$error_email = "";}
    if ($re4 == 0){$error_telefono = "Solo puedes poner numeros";}
    if ($re5 == 0){$error_postal = "Solo se permiten 5 numeros en estes campo";}
    if ($re6 == 0){$error_ciudad = "Solo puedes poner letras";}
    if ($re7 == 0){$error_domicilio = "";}
    if ($re8 == 0){$error_contrasena = "";}
    if ($re9 == 0){$error_web = "";}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="contenedor">
    <div class="header">
        <h1>¡Bienvenido a Banco Santander!</h1>

        <form action="index.php" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $muestra['nombre'] ?>"><br><br>
            <?php echo $error_nombre ?>


            <label for="apellido">Apellidos:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $muestra['apellido'] ?>"><br><br>
            <?php echo $error_apellidos ?>


            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $muestra['email'] ?>"><br><br>
            <?php echo $error_email ?>


            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono" value="<?php echo $muestra['telefono'] ?>"><br><br>
            <?php echo $error_telefono ?>


            <label for="postal">Código Postal:</label>
            <input type="text" id="postal" name="postal" value="<?php echo $muestra['postal'] ?>"><br><br>
            <?php echo $error_postal ?>


            <label for="ciudad">Ciudad:</label>
            <input type='text' id="ciudad" name="ciudad" value="<?php echo $muestra['ciudad'] ?>"><br><br>
            <?php echo $error_ciudad ?>


            <label for="domicilio">Domicilio:</label>
            <input type='text' id="domicilio" name="domicilio" value="<?php echo $muestra['domicilio'] ?>"><br><br>
            <?php echo $error_domicilio ?>


            <label for="contraseña">Contraseña:</label>
            <input type="text" id="contraseña" name="contraseña" value="<?php echo $muestra['contraseña'] ?>"><br><br>
            <?php echo $error_contrasena ?>


            <label for="web">Web:</label>
            <input type="url" id="web" name="web" value="<?php echo $muestra['web'] ?>"><br><br>
            <?php echo $error_web ?>


            <select name="provincia">
                <option value="Seleccione provincia">Seleccione provincia</option>
                    <?php
                        define("fileName", "archivo.txt");
                        global $ciudades;
                        global $opciones;
                        $lineas=file_get_contents(fileName);
                        $ciudades=explode("\n",$lineas);

                        foreach($ciudades as $ciudad){
                            $opciones.='<option value="'.$ciudad.'">'.$ciudad.'</option>';
                        }
                        echo $opciones;
                    ?>
                </option>

            </select><br><br>

            <input type="submit" name="Confirmar" value="Confirmar">
        </form>
    </div>
</div>

</body>
</html>




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


    $nombre = filter_input(INPUT_GET, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_GET, 'apellido', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_GET, 'telefono', FILTER_SANITIZE_STRING);
    $postal = filter_input(INPUT_GET, 'postal', FILTER_SANITIZE_STRING);
    $ciudad = filter_input(INPUT_GET, 'ciudad', FILTER_SANITIZE_STRING);
    $domicilio = filter_input(INPUT_GET, 'domicilio', FILTER_SANITIZE_STRING);
    $contrasena = filter_input(INPUT_GET, 'contraseña', FILTER_SANITIZE_STRING);
    echo "<br>";

    $uno ="/^[a-zA-Z\s]*$/";
    $hola = "hola45";
    $uno1 = preg_match($uno,$hola);
    echo $uno1;
    echo $hola;
    echo $nombre;


    $uno = "//";
    $dos = "//";
    $tres = "//";
    $cuatro = "//";
    $cinco = "//";
    $seis = "//";
    $siete = "//";
    $ocho = "//";


    $re1 = preg_match($uno,$nombre);
    $re2 = preg_match($dos,$apellido);
    $re3 = preg_match($tres,$email);
    $re4 = preg_match($cuatro,$telefono);
    $re5 = preg_match($cinco,$postal);
    $re6 = preg_match($seis,$ciudad);
    $re7 = preg_match($siete,$domicilio);
    $re8 = preg_match($ocho,$contrasena);



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    $muestra = [
        'nombre' => 'JORGE',
        'apellido' => 'Fuentes',
        'email' => 'jorgeylucas@gmail.com',
        'telefono' => '662437243',
        'postal' => '28400',
        'ciudad' => 'Collado Villalba',
        'domicilio' => 'C// Alfonso 13, Nº 151',
        'contraseña' => 'Aaaaaaaa1#'
    ]
?>

<body>

<div id="contenedor">
    <div class="header">
        <h1>¡Bienvenido a Banco Santander!</h1>

        <form name="myForm" action="index.php" method="post">

            <label for="fnombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $muestra['nombre'] ?>"><br><br>
            <?php if($re1 == 0){?>
                    <p class="error">Solo puedes poner letras</p>
            <?php } ?>


            <label for="fapellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $muestra['apellido'] ?>" ><br><br>
            <?php if($re2 == 0){?>
                <p class="error">Solo puedes poner letras</p>
            <?php } ?>


            <label for="femail">Email:</label>
            <input type="email" name="email" value="<?php echo $muestra['email'] ?>"><br/><br/>
            <?php if($re3 == 0){?>
                <p class="error"></p>
            <?php } ?>


            <label for="ftelefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono" value="<?php echo $muestra['telefono'] ?>"><br><br>
            <?php if($re4 == 0){?>
                <p class="error"></p>
            <?php } ?>

            <label for="fpostal">Código Postal:</label>
            <input type="text" id="postal" name="postal" inputmode="numeric" value="<?php echo $muestra['postal'] ?>"><br><br>
            <?php if($re5 == 0){?>
                <p class="error"></p>
            <?php } ?>

            <label for="fciudad">Ciudad:</label>
            <input type='country' id="ciudad" name="ciudad" value="<?php echo $muestra['ciudad'] ?>"><br><br>
            <?php if($re6 == 0){?>
                <p class="error"></p>
            <?php } ?>

            <label for="fdomicilio">Domicilio:</label>
            <input type='country' id="domicilio" name="domicilio" value="<?php echo $muestra['domicilio'] ?>"><br><br>
            <?php if($re7 == 0){?>
                <p class="error"></p>
            <?php } ?>

            <label for="fcontraseña">Contraseña:</label>
            <input type="text" name="contraseña" id="contraseña" value="<?php echo $muestra['contraseña'] ?>" ><br /><br />
            <?php if($re8 == 0){?>
                <p class="error"></p>
            <?php } ?>


            <select name="transporte">
                <option value="Seleccione ciudad">Seleccione ciudad</option>

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
            </select>

            <input type="button" value="Confirmar" onClick="verificar()">
        </form>

    </div>
</div>

</body>
</html>

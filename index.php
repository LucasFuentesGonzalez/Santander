<?php

$meses = [];
$string = file_get_contents("archivo.txt");
$array = explode("\n",$string);
foreach ($array as $fila){
    $item = explode(" ",$fila);
    $meses[] = [
        'numero' => $item[0],
        'nombre' => $item[0]
    ];
}




$nombre = filter_input(INPUT_GET, 'nombre', FILTER_SANITIZE_STRING);
$apellido = filter_input(INPUT_GET, 'apellido', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
$telefono = filter_input(INPUT_GET, 'telefono', FILTER_SANITIZE_STRING);
$postal = filter_input(INPUT_GET, 'postal', FILTER_SANITIZE_STRING);
$ciudad = filter_input(INPUT_GET, 'ciudad', FILTER_SANITIZE_STRING);
$domicilio = filter_input(INPUT_GET, 'domicilio', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_GET, 'contraseña', FILTER_SANITIZE_STRING);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<?php
    $muestra = [
            'nombre' => 'Jorge',
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
        <h2><b>Contraseña aceptada.</b></h2><br /><br />

        <form name="myForm" action="respuestas.php" method="post">

            <label for="fnombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $muestra['nombre'] ?>"><br><br>

            <label for="fapellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $muestra['apellido'] ?>" ><br><br>

            <label for="femail">Email:</label>
            <input type="email" name="email" value="<?php echo $muestra['email'] ?>"><br/><br/>

            <label for="ftelefono">Telefono:</label>
            <input id="telefono" name="telefono" type="tel" value="<?php echo $muestra['telefono'] ?>"><br><br>

            <label for="fpostal">Código Postal:</label>
            <input id="postal" name="postal" type="text" inputmode="numeric" value="<?php echo $muestra['postal'] ?>"><br><br>

            <label for="fciudad">Ciudad:</label>
            <input id="ciudad" name="ciudad" type='country' value="<?php echo $muestra['ciudad'] ?>"><br><br>

            <label for="fdomicilio">Domicilio:</label>
            <input id="domicilio" name="domicilio" type='country' value="<?php echo $muestra['domicilio'] ?>"><br><br>

            <label for="fcontraseña">Contraseña:</label>
            <input type="text" name="contraseña" id="contraseña"  value="<?php echo $muestra['contraseña'] ?>" ><br><br><br><br>

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
            <br><br><br>
            <input type="submit" value="Enviar este formulario"/>

            <input type="reset" value="Restablecer"/>

        </form>

    </div>
</div>

</body>

</html>

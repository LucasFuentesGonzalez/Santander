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
print_r($meses);


















?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
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
    <div clas
         s="header">
        <div>

        </div>
        <h1>¡Bienvenido a Banco Santander!</h1>
        <h2><b>Contraseña aceptada.</b></h2><br /><br />

        <form name="myForm" action="/action_page.php" method="post">

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
            <input type="text" name="contraseña" id="contraseña"  value="<?php echo $muestra['contraseña'] ?>" ><br /><br />

            <input type="button" value="Confirmar" onClick="verificar()">
        </form>

    </div>
</div>

</body>

</html>


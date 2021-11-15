<?php

    $meses = [];
    $string = file_get_contents("archivo.txt");aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
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
            <input type="text" name="apellido" id="apellido"><br><br>

            <label for="femail">Email:</label>
            <input type="email" name="email"><br/><br/>

            <label for="ftelefono">Telefono:</label>
            <input id="telefono" name="telefono" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br><br>

            <label for="fpostal">Código Postal:</label>
            <input id="postal" name="postal" type="text" inputmode="numeric" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$"><br><br>

            <label for="fciudad">Ciudad:</label>
            <input id="ciudad" name="ciudad" type='country'><br><br>

            <label for="fciudad">Domicilio:</label>
            <input id="ciudad" name="ciudad" type='country'><br><br>

            <label for="fcontraseña">Contraseña:</label>
            <input type="text" name="contraseña" id="contraseña"><br /><br />

            <input type="button" value="Confirmar" onClick="verificar()">
        </form>

    </div>
</div>

</body>

</html>



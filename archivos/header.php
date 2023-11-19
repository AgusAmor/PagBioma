<?php
    $ruta = '/Parcial2_AmorAgustin';
?>

<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href= "<?php echo $ruta;?>/css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
            <div>
                <a href="<?php echo $ruta;?>/index.php"><img src="<?php echo $ruta;?>/img/logo.png" alt="logo"/></a>
                <div id="carrito">
                    <a href="<?php echo $ruta;?>/registros/login.php">Iniciar sesión</a>
                    <a href="<?php echo $ruta;?>/registros/signup.php">Registrarse</a>
                </div>
            </div>
        <ul>
            <li><a href="<?php echo $ruta;?>/index.php">Inicio</a></li>
            <li><a href="<?php echo $ruta;?>/catalogo.php">Catálogo</a></li>
            <li><a href="<?php echo $ruta;?>/bolson.php">Bolsón Orgánico</a></li>
            <li><a href="<?php echo $ruta;?>/nosotros.php">Nosotros</a></li>
        </ul>
    </header>
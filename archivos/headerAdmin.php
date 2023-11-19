<?php
    $ruta = '/Parcial2_AmorAgustin';

    $usuario = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM - BIOMA</title>
    <link rel="stylesheet" href= "<?php echo $ruta;?>/css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body id="admin">
    <header>
            <a href="index.php"><img src="<?php echo $ruta;?>/img/logoInverso.png" alt="logo"/></a>
        <ul>
            <li><a href="<?php echo $ruta;?>/admin/usuarios.php">Usuarios</a></li>
            <li><a href="<?php echo $ruta;?>/admin/productos.php">Productos</a></li>
            <li><a href="<?php echo $ruta;?>/admin/categorias.php">Categorias</a></li>
        </ul>
    </header>
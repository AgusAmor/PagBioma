<?php
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
            <div id="login">
                <p><?php echo "$usuario" ?></p>
                <a href="../index.php">Ver sitio</a>
                <a href="../registros/logout.php">Cerrar sesión</a>
            </div>
            <a href="index.php"><img src="<?php echo $ruta;?>/img/logoInverso.png" alt="logo"/></a>
            <nav>
            <?php
                $nav = array();
                $nav ['Usuarios'] = 'usuarios.php';
                $nav ['Productos'] = 'productos.php';
                $nav ['Categorías'] = 'categorias.php';

                foreach($nav as $section => $direccion){
                    echo "<li><a href=$direccion>$section</a></li>";
                }
                ?>
        </nav>
    </header>
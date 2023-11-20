<?php
    $ruta = '/Parcial2_AmorAgustin';
?>

<!DOCTYPE html>
<html lang=es>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title" ?></title>
    <link rel="stylesheet" href= "<?php echo $ruta;?>/css/estilos.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
            <div>
                <div id="login">
                    <?php
                    if(isset($_SESSION['email'])){
                        $usuario = $_SESSION['email'];
                        echo "<p>$usuario</p>";
                        if($_SESSION['acceso'] == 'admin'){
                            echo "<a href=$ruta/admin/index.php>Ir ABM</a>";
                        }
                        echo "<a href=$ruta/registros/logout.php>Cerrar sesión</a>";
                        
                    }else{
                        echo"
                        <a href=$ruta/registros/login.php>Iniciar sesión</a>
                        <a href=$ruta/registros/signup.php>Registrarse</a>
                        ";
                    }
                    ?>
                </div>
                <a href="<?php echo $ruta;?>/index.php"><img src="<?php echo $ruta;?>/img/logo.png" alt="logo"/></a>
            </div>
        <nav>
            <?php
                $nav = array();
                $nav ['Inicio'] = $ruta . '/index.php';
                $nav ['Catalogo'] = $ruta . '/catalogo.php';
                $nav ['Bolsón Orgánico'] = $ruta . '/bolson.php';
                $nav ['Nosotros'] = $ruta . '/nosotros.php';

                foreach($nav as $section => $direccion){
                    echo "<li><a href=$direccion>$section</a></li>";
                }
                ?>
        </nav>
    </header>
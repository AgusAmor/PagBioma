<?php
session_start();
$_SESSION;
$title = "BIOMA - Catálogo";
include_once("archivos/header.php");
require_once("connect/connect.php");
?>
    <section>
        <h1>Catálogo</h1>
            <div class="catalogo">
                <?php
                    $consulta = "SELECT * FROM producto";
                    $resultado = mysqli_query($con, $consulta);
                    
                    $contador = 0;
                    echo "<div class=second>";
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "
                        <div>
                            <img src=img/catalogo/$fila[imagen] alt=$fila[nombre]/>
                            <h2>$fila[nombre]</h2>
                            <h3>$fila[tipo]</h3>
                        </div>";
                        $contador++;
                        if ($contador == 5){
                            echo "</div>";
                            echo "<div class='second'>";
                            $contador = 0;
                        }
                    }
                    
                ?>
            </div>
    </section>
<?php
include_once("archivos/footer.php");
?>
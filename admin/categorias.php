<?php
session_start();
$_SESSION;
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");

$consulta = "SELECT * FROM categoria";
$resultado = mysqli_query($con, $consulta);

?>
    <section>
        <h1>Categorias</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th colspan="2">Modificar</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "
                        <tr>
                            <td>$fila[id]</td>
                            <td>$fila[nombre]</td>
                            <td><a href=modificarCategoria.php?id=$fila[id]>Editar</a></td>
                            <td><a href=eliminarCategoria.php?id=$fila[id]>Eliminar</a></td>
                        </tr>
                    ";  

                }
            ?>
        </table>

        <form action="agregarCategoria.php" method="post">
            <fieldset>
                <legend>Agregar categoría</legend>
                <div>
                    <label for="nom">Nombre <strong>*</strong></label>
                    <input type="text" name="nom" id="nom" required/>
                </div>
                <input class="enviarBtn" type="submit" value="Agregar categoría"/>
            </fieldset>
        </form>
    </section>
<?php
include_once("../archivos/footerAdmin.php");
?>
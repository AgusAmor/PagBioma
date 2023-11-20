<?php
session_start();
$_SESSION;
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");

$consulta = "SELECT * FROM producto";
$resultado = mysqli_query($con, $consulta);

?>
    <section>
        <h1>Productos</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Categoria</th>
                <th colspan="2">Modificar</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "
                        <tr>
                            <td>$fila[id]</td>
                            <td>$fila[nombre]</td>
                            <td>$fila[tipo]</td>
                            <td>$ $fila[precio]</td>
                            <td><img src=../img/catalogo/$fila[imagen] /></td>
                            <td>$fila[categoria_id]</td>
                            <td><a href=modificarProducto.php?id=$fila[id]>Editar</a></td>
                            <td><a href=eliminarProducto.php?id=$fila[id]>Eliminar</a></td>
                    ";

                }
            ?>
        </table>
        <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Agregar producto</legend>
                <div>
                    <label for="nom">Nombre <strong>*</strong></label>
                    <input type="text" name="nom" id="nom" required/>
                </div>
                <div>
                    <label for="tipo">Tipo <strong>*</strong></label>
                    <div>
                        <label>
                            <input type="radio" name="tipo" id="tipo" value="organico" required/> Orgánico
                        </label>
                        <label>
                            <input type="radio" name="tipo" id="tipo" value="agroecologico" required/> Agroecológico
                        </label>
                    </div>
                </div>
                <div>
                    <label for="precio">Precio <strong>*</strong></label>
                    <input type="number" name="precio" id="precio" required/>
                </div>
                <div>
                    <label for="pic">Foto <strong>*</strong></label>
                    <input type="file" name="pic" id="pic" required/>
                </div>
                <div id="select">
                    <label for="cate">Categoría <strong>*</strong></label>
                    <select name="cate" id="cate">
                        <option value="1">Fruta</option>
                        <option value="2">Verdura</option>
                        <option value="3">Bolsón</option>
                        <option value="4">Almacén</option>
                    </select>
                </div>
                <input class="enviarBtn" type="submit" value="Agregar producto"/>
            </fieldset>



        </form>
    </section>
<?php
include_once("../archivos/footerAdmin.php");
?>
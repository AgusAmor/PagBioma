<?php
session_start();
$_SESSION;
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");
if($con){
    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
    }

    $consulta = "SELECT * FROM producto WHERE id = '$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        $fila=mysqli_fetch_array($resultado);
        echo "<h1>Modificación de producto</h1>";
        echo "
        <form action=modificarProducto2.php method=post enctype=multipart/form-data>
            <fieldset>
                <legend>Modificar $fila[nombre]</legend>
                <div>
                    <h2>Codigo del producto: $fila[id]</h2>
                    <input type=hidden name=id value=$fila[id] />
                </div>
                <div>
                    <label for=nom >Nombre</label>
                    <input type=text id=nom name=nom value=$fila[nombre] />
                </div>
                <div>
                    <label for=tipo >Tipo</label>";
                    switch($fila['tipo']){
                        case "organico":
                            echo "
                            <select name=tipo id=tipo>
                                <option value=organico selected>Orgánico</option>
                                <option value=agroecologico >Agroecológico</option>
                            </select>
                            ";
                        break;
                        case "agroecologico":
                            echo "
                            <select name=tipo id=tipo>
                                <option value=organico>Orgánico</option>
                                <option value=agroecologico selected>Agroecológico</option>
                            </select>
                            ";
                        break;
                        }
                echo "
                </div>
                <div>
                    <label for=precio >Precio</label>
                    <input type=number id=precio name=precio value=$fila[precio] />
                </div>
                <div id=imgProducto>
                    <label for=pic >Imagen</label>
                    <input type=file id=pic name=pic value=$fila[imagen] />
                    <div>
                        <p>Imagen actual</p>
                        <img src=../img/catalogo/$fila[imagen] />
                    </div>
                </div>
                <div>
                    <label for=cate >Categoría</label>";
                    switch($fila['categoria_id']){
                        case 1:
                            echo "
                            <select name=cate id=cate>
                                <option value=1 selected>Fruta</option>
                                <option value=2>Verdura</option>
                                <option value=3>Bolsón</option>
                                <option value=4>Almacén</option>
                            </select>
                            ";
                        break;
                        case 2:
                            echo "
                            <select name=cate id=cate>
                                <option value=1>Fruta</option>
                                <option value=2 selected>Verdura</option>
                                <option value=3>Bolsón</option>
                                <option value=4>Almacén</option>
                            </select>
                            ";
                        break;
                        case 3:
                            echo "
                            <select name=cate id=cate>
                                <option value=1>Fruta</option>
                                <option value=2>Verdura</option>
                                <option value=3 selected>Bolsón</option>
                                <option value=4>Almacén</option>
                            </select>
                            ";
                        break;
                        case 4:
                            echo "
                            <select name=cate id=cate>
                                <option value=1>Fruta</option>
                                <option value=2>Verdura</option>
                                <option value=3>Bolsón</option>
                                <option value=4 selected>Almacén</option>
                            </select>
                            ";
                        break;
                    }
                    echo"
                </div>
                <input class=enviarBtn type=submit />
                <a href=productos.php class=enviarBtn>Volver</a>
            </fieldset>
        </form>
        ";
    }
}
?>
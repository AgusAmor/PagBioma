<?php
require_once("../archivos/revisionAdmin.php");
require_once("../connect/connect.php");
include_once("../archivos/headerAdmin.php");

$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($con, $consulta);

?>
    <section>
        <h1>Usuarios</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Acceso</th>
                <th>Estado</th>
                <th colspan="3">Modificar</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "
                        <tr>
                            <td>$fila[id]</td>
                            <td>$fila[nombre]</td>
                            <td>$fila[apellido]</td>
                            <td>$fila[direccion]</td>
                            <td>$fila[email]</td>
                            <td>$fila[contra]</td>
                            <td>$fila[acceso]</td>
                            <td>$fila[estado]</td>
                            <td>";
                    if($fila['estado'] == 'activo'){
                        echo "<a href=banear.php?id=$fila[id]>Banear</a>";
                    }else{
                        echo "<a href=activar.php?id=$fila[id]>Activar</a>";
                    }
                    echo"
                        </td>
                        <td>
                    ";
                    if($fila['acceso'] == 'usuario'){
                        echo "<a href=hacerAdmin.php?id=$fila[id]>Hacer Admin</a>";
                    }else{
                        echo "<a href=hacerUsuario.php?id=$fila[id]>Hacer Usuario</a>";
                    }
                    echo"
                        </td>
                        <td><a href=eliminarUsuario.php?id=$fila[id]>Eiminar</a></td>           
                        </tr>
                    ";   

                }
            ?>
        </table>
    </section>
<?php
include_once("../archivos/footerAdmin.php");
?>
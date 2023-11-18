<?php
session_start();
$_SESSION;
include_once("../archivos/header.php");
require_once("../connect/connect.php");
?>
    <form action="revisionSignup.php" method="post">
        <fieldset>
            <legend>Registrate</legend>
            <div>
                <label for="nom">Nombre <strong>*</strong></label>
                <input id="nom" name="nom" type="text" required/>
            </div>
            <div>
                <label for="apell">Apellido <strong>*</strong></label>
                <input id="apell" name="apell" type="text" required/>
            </div>
            <div>
                <label for="user">Correo electrónico <strong>*</strong></label>
                <input id="user" name="user" type="email" required/>
            </div>
            <div>
                <label for="pass">Contraseña <strong>*</strong></label>
                <input id="pass" name="pass" type="password" required/>
            </div>
            <input type="submit" value="Registrarse"/>
        </fieldset>
    </form>
<?php
include_once("../archivos/footer.php");
?>
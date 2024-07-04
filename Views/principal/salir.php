<?php
session_start(); //En inicio de sesión

require("conexion_db.php");

$email = $_SESSION['email'];

$borra_estado =mysqli_query($db_conexion, "UPDATE `cuenta` SET ESTADO=0 WHERE CORREO='".$email."'");

$_SESSION = array(); //Se toma toda las variables de sesion en un array.

//Este if permite eliminar la sesión y las cookie de sesión. Se destruira la sesión y no solo los datos de la sesión.


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//Aseguramos que se elimine todas las variables de sesion para que no vuelva a ingresar.
session_destroy();
header("Location: index.php");
exit;
?>

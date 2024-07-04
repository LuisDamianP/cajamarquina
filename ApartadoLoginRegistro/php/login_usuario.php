<?php
session_start();
include 'conexion_db.php';

if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $correo_login = $_POST['correo'];
    $contrasena_login = $_POST['contrasena'];
    $contrasena_login = hash('sha512', $contrasena_login);

    // Use prepared statements to prevent SQL injection
    $stmt = $db_conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
    $stmt->bind_param("ss", $correo_login, $contrasena_login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $correo_login;
        header("Location: ../ApartadoLoginRegistro/bienvenida.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location= "../views/principal/login_register.php";
            </script>';
        exit();
    }
} else {
    echo '
        <script>
            alert("Bienvenido Usuario");
            window.location= "../ApartadoLoginRegistro/bienvenida.php";
        </script>';
}
?>
<?php

    include 'conexion_db.php';

    // Verificar que los campos del formulario están establecidos
    if (isset($_POST['nombre_completo']) && isset($_POST['apellido_completo']) && isset($_POST['correo']) &&
        isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['validar_contrasena'])) {
    
        $nombre_completo = $_POST['nombre_completo'];
        $apellido_completo = $_POST['apellido_completo'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $validar_contrasena = $_POST['validar_contrasena'];
    
        // Verificar que las contraseñas coinciden antes de encriptarlas
        if ($contrasena !== $validar_contrasena) {
            echo '
                <script>
                    alert("Las contraseñas no coinciden");
                    window.location = "../views/principal/login_register.php";
                </script>';
            exit();
        }
    
        // Encriptar la contraseña
        $contrasena_hashed = hash('sha512', $contrasena);
    
        // Verificación de que el correo y el usuario no se repiten en la base de datos
        $stmt = $db_conexion->prepare("SELECT * FROM usuarios WHERE correo = ? OR usuario = ?");
        $stmt->bind_param("ss", $correo, $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
            if ($row['correo'] === $correo) {
                echo '
                    <script>
                        alert("Este correo ya está registrado, intenta con otro diferente");
                        window.location = "../views/principal/login_register.php";
                    </script>';
                exit();
            }
            if ($row['usuario'] === $usuario) {
                echo '
                    <script>
                        alert("Este usuario ya está registrado, intenta con otro diferente");
                        window.location = "../views/principal/login_register.php";
                    </script>';
                exit();
            }
        }
    
        // Insertar valores en la tabla de usuarios usando declaraciones preparadas
        $stmt = $db_conexion->prepare("INSERT INTO usuarios (nombre_completo, apellido_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre_completo, $apellido_completo, $correo, $usuario, $contrasena_hashed);
        
        // Ejecutar el guardado de datos
        if ($stmt->execute()) {
            echo '
                <script>
                    alert("Usuario almacenado exitosamente");
                    window.location = "../views/principal/login_register.php";
                </script>';
        } else {
            echo '
                <script>
                    alert("Inténtelo de nuevo, usuario no almacenado");
                    window.location = "../views/principal/login_register.php";
                </script>';
        }
    
        // Cerrar la conexión a la base de datos
        $stmt->close();
        $db_conexion->close();
    
    } else {
        echo '
            <script>
                alert("Por favor complete todos los campos");
                window.location = "../ApartadoLoginRegistro/bienvenida.php";
            </script>';
        exit();
    }
?>
<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión")
            </script>
        ';
    }else{
        session_destroy();
        
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido Usuario</title>
    </head>
    <body>
        <h1>Bienvenido Usuario</h1>
        <!--<a href="../php/cerrar_session.php">Cerrar Sesión</a>-->
        <form method="POST" action="../views/principal/login_register.php">
        <button type="submit">Cerrar Sesión</button>
</form>
    </body>
</html>
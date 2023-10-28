<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    //Incluim el php en el body de html i incluim la connexio per als queris
    include('../../db_connection.php');
    //Agafem el email que habiem passat en userLogin
    $email = $_GET['email'];
    //Fem la consulta per veure si es alumnat o professor
    $consulta = "SELECT * from user where email = '$email';";
    $result = mysqli_query($conn, $consulta);
    //Convertim la query en un array
    $fila = mysqli_fetch_assoc($result);
    //Fem la comparativa
    if ($fila["rol"] == "alumnat") {
        //Mostrem la informacio del alumne
        echo "<p>Soy un " . $fila["rol"] . "</p>";
        echo "<p>Nombre: " . $fila["name"] . "</p>";
        echo "<p>Apellido: " . $fila["surname"] . "</p>";
        echo "<p>Correo electronico: " . $email . "</p>";

    } else {
        //Mostrem tota la informacio de tots en la base de dades
        echo "<p>Hola " . $fila["name"] . ", eres " .$fila["rol"] . "!!</p>";
        echo "<p>La lista de usuarios de la base de datos es la siguiente: </p>";
        $consulta2 = "SELECT * from user;";
        $result2 = mysqli_query($conn, $consulta2);
        while ($fila2 = mysqli_fetch_assoc($result2)) {
            echo "<p>Nombre y apellido: " . $fila2["name"] . " " . $fila2["surname"] . "</p>";
        }
    }
    ?>
    <a href="login.html">Iniciar sessiom usuario</a>
    <a href="../idioma.php">Elige idioma</a>
    <a href="../../eliminar_cookie/eliminar_cookie.php">Eliminar cookie</a>
</body>
</html>
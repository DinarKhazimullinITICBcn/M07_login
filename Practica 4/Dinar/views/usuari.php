<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    include('../db_connection.php');
    $email = $_GET['email'];
    $consulta = "SELECT * from user where email = '$email';";
    $result = mysqli_query($conn, $consulta);
    $fila = mysqli_fetch_assoc($result);
    if ($fila["rol"] == "alumnat") {
        echo "<p>soc un " . $fila["rol"] . "</p>";
        echo "<p>nom: " . $fila["name"] . "</p>";
        echo "<p>cognom: " . $fila["surname"] . "</p>";
        echo "<p>email: " . $email . "</p>";

    } else {
        echo "<p>Hola " . $fila["name"] . ", ets " .$fila["rol"] . "!!</p>";
        echo "<p>La llista d'usuaris de la base de dades es: </p>";
        $consulta2 = "SELECT * from user;";
        $result2 = mysqli_query($conn, $consulta2);
        while ($fila2 = mysqli_fetch_assoc($result2)) {
            echo "<p>nom i cognom: " . $fila2["name"] . " " . $fila2["surname"] . "</p>";
        }
    }
    ?>
</body>
</html>
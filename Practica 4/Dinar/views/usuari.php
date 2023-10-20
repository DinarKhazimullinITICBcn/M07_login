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
    include('../db_connection.php');
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
        echo "<p>soc un " . $fila["rol"] . "</p>";
        echo "<p>nom: " . $fila["name"] . "</p>";
        echo "<p>cognom: " . $fila["surname"] . "</p>";
        echo "<p>email: " . $email . "</p>";

    } else {
        //Mostrem tota la informacio de tots en la base de dades
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
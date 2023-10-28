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
        echo "<p>I am " . $fila["rol"] . "</p>";
        echo "<p>Name: " . $fila["name"] . "</p>";
        echo "<p>Surname: " . $fila["surname"] . "</p>";
        echo "<p>email: " . $email . "</p>";

    } else {
        //Mostrem tota la informacio de tots en la base de dades
        echo "<p>Hello " . $fila["name"] . ", you are " .$fila["rol"] . "!!</p>";
        echo "<p>This is the list of users in the data base: </p>";
        $consulta2 = "SELECT * from user;";
        $result2 = mysqli_query($conn, $consulta2);
        while ($fila2 = mysqli_fetch_assoc($result2)) {
            echo "<p>Name and Surname: " . $fila2["name"] . " " . $fila2["surname"] . "</p>";
        }
    }
    ?>
    <a href="login.html">Login</a>
    <a href="../idioma.php">Choose Language</a>
    <a href="../../eliminar_cookie/eliminar_cookie.php">Delete cookie</a>
</body>
</html>
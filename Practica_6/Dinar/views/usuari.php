<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    //Iniciem la sessio
    session_start();
    include('../db_connection.php');
    if ($_SESSION['rol'] == "alumnat") {
        //Mostrem la informacio del alumne amb les sessions previament creades
        echo "<p>sessió iniciada</p>";
        echo "<p>soc un " . $_SESSION['rol'] . "</p>";
        echo "<p>nom: " . $_SESSION['name'] . "</p>";
        echo "<p>cognom: " . $_SESSION['surname'] . "</p>";
        echo "<p>email: " . $_SESSION['email'] . "</p>";

    } else {
        //Mostrem tota la informacio de tots en la base de dades amb les sessions previament creades
        echo "<p>sessió iniciada</p>";
        echo "<p>Hola " . $_SESSION['name'] . ", ets " . $_SESSION['rol'] . "!!</p>";
        echo "<p>La llista d'usuaris de la base de dades es: </p>";
        $consulta = "SELECT * from user;";
        $result = mysqli_query($conn, $consulta);
        while ($fila = mysqli_fetch_assoc($result)) {
            echo "<p>nom i cognom: " . $fila["name"] . " " . $fila["surname"] . "</p>";
        }
    }
    echo '<a href="../eliminar_sessio/eliminar_sessio.php">Eliminar sessio</a>';
    ?>
</body>
</html>
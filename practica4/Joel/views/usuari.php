
<?php
include('db_connection.php');

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $consulta = "SELECT * FROM user WHERE email = '$email'";
    $resultado = mysqli_query($connection, $consulta);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);

            echo "Soy un " . $row["rol"] . "<br>";
            echo "Nombre: " . $row["name"] . "<br>";
            echo "Apellido: " . $row["surname"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
        } else {
            echo "No se encontró ningún usuario con el email proporcionado.";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($connection);
    }
} else {
    echo "No se proporcionó un email válido.";
}
echo "nada";
?>


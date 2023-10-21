
<?php
include("../db_connection.php");

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Verificar todas las variables en un solo isset
if (isset($_POST['id'], $_POST['rol'], $_POST['name'], $_POST['surname'], $_POST['password'], $_POST['email'])) {
  $id = $_POST['id'];
  $rol = $_POST['rol'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $active = isset($_POST['active']) ? 1 : 0;

  $sql = "INSERT INTO user (id, rol, name, surname, password, email, active)
          VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active');";

  var_dump($sql);

  if ($connection->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";

    // Redirige al usuario a la página de inicio de sesión
    header('Location: ../views/login.html');
  } else {
    echo "Error al guardar los datos: " . $connection->error;
  }
} else {
  echo "Faltan datos en el formulario.";
}

$connection->close();
?>



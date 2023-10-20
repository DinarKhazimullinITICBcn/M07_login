
<?php
include('../db_connection.php');

if (isset($_POST['send'])) {
  $mail = $_POST['email'];
  $pwd = $_POST['password'];

  $query = "SELECT * FROM user WHERE email = '$mail'";
  $result = mysqli_query($connection, $query);

  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $storedPassword = $row['password'];

      // Verifica la contraseña ingresada con la contraseña almacenada
      if (password_verify($pwd, $storedPassword)) {
        // Contraseña correcta, redirige al usuario a usuari.php
        header('Location: usuari.php?email=' . $row['email']);
      } else {
        // Contraseña incorrecta, redirige al usuario a login.php con mensaje de error
        header('Location: login.php?error=incorrecto');
      }
    } else {
      // No se encontró ningún usuario, redirige al usuario a login.php con mensaje de error
      header('Location: login.php?error=incorrecto');
    }
  }
}
?>


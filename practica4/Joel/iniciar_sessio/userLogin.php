

<?php
include('../db_connection.php');

$mail = $_POST['email'];
$pwd = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '$mail'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $storedPassword = $row['password'];

  // Verifica la contraseña ingresada con la contraseña almacenada
  if ($storedPassword == $pwd) {
    // Contraseña correcta, redirige al usuario a usuari.php
    header('Location: ../views/usuari.php?email=' . $row['email']);
  } else {
    // Contraseña incorrecta, redirige al usuario a login.php con mensaje de error
   include("../views/login.html");
    echo "Password incorrecte";
  }
} else{
   include("../views/login.html");
    echo "Email incorrecte";
}
?>




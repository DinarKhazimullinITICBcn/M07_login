<?php
session_start();
include('../db_connection.php');

$email = $_SESSION['mail'];

$consulta = "SELECT * FROM user WHERE email = '$email'";

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$resultado = mysqli_query($connection, $consulta);

$row = mysqli_fetch_assoc($resultado);
if($_SESSION["rol"]=="alumnat") {
  echo "<p>" . "Sessió iniciada" . "</p>";
  echo "Soc un alumne" . "<br>";
  echo "Nom: " . $_SESSION['name'] . "<br>";
  echo "Cognom: " . $_SESSION['surname'] . "<br>";
  echo "Email: " . $_SESSION['mail'] . "<br>";
} else {
  echo "<p>" . "Sessió iniciada" . "</p>";
  echo "Hola " . $_SESSION['name'] . ", ets professor!!" ."<br>" . "<br>";
  echo "La llista d'usuaris de la base de dades és:" . "<br>";
  $consultaProfe = "SELECT * FROM user;";
  $resultado2 = mysqli_query($connection,$consultaProfe);
  while($row2 = mysqli_fetch_assoc($resultado2)){
    echo "<p>nom i cognom: " . $row2["name"] . $row2["surname"] . "</p>";
  }
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <a href="../delete_session.php">Esborra la sessió</a>
  </body>
</html>




<?php
include('../../db_connection.php');

$email = $_GET['email'];

$consulta = "SELECT * FROM user WHERE email = '$email'";

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$resultado = mysqli_query($connection, $consulta);

$row = mysqli_fetch_assoc($resultado);
if($row["rol"]=="alumnat") {

  echo "I am a student" . "<br>";
  echo "Name: " . $row["name"] . "<br>";
  echo "Surname: " . $row["surname"] . "<br>";
  echo "Email: " . $row["email"] . "<br>";
} else {
  echo "Hi " . $row["name"] . ", you are a teacher!!" ."<br>" . "<br>";
  echo "Database's user list is" . "<br>";
  $consultaProfe = "SELECT * FROM user;";
  $resultado2 = mysqli_query($connection,$consultaProfe);
  while($row2 = mysqli_fetch_assoc($resultado2)){
    echo "<p>Name and Surname: " . $row2["name"] . $row2["surname"] . "</p>";
  }
}
mysqli_close($connection);
?>



<?php
include("../db_connection.php");
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
if(isset($_POST['id'])){
  $id = $_POST['id'];
} else {
  $id = null;
}
if(isset($_POST['rol'])){
  $rol = $_POST['rol'];
} else {
  $rol = null;
}
if(isset($_POST['name'])){
  $name = $_POST['name'];
} else {
  $name = null;
}
if(isset($_POST['surname'])){
  $surname = $_POST['surname'];
} else {
  $surname = null;
}
if(isset($_POST['password'])){
  $password = $_POST['password'];
} else {
  $email = null;
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
} else {
  $email = null;
}
$active = isset($_POST['active']) ? 1 : 0;

$sql = "INSERT INTO user (id, rol, name, surname, password, email, active)
VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email', '$active')";

$resultat = mysqli_query($connection, $sql);

if(!$resultat) {
  die("No s'ha pogut introduir la consulta");
}

header("Location: ../views/login.html")
?>


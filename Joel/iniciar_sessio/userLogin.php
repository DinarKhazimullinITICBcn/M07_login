<?php
include('../db_connection.php');
$query = "select password from user where email = '2023_joel.ghanem@iticbcn.cat';";
$dades = mysqli_query($connection, $query);
$password = (string)$dades;
echo $password;
if (isset($_POST['send'])){
  $pwd = $_POST['pwd'];
  $mail = $_POST['mail'];
}
?>

<?php

include('../db_connection.php');

$consulta = "SELECT PASSWORD from user where email = 'cf19dinar.khazimullin@gmail.com';";

$result = mysqli_query($conn, $consulta);

$password = (string)$result;

echo $password;

if (isset($_POST['send'])){
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
}
?>
<?php
include('login-data.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $loginUsername && $password === $loginPassword) {
        echo "Inicio de sesión exitoso. Datos de inicio de sesión:";
        echo "<br>Nombre de usuario: " . $loginUsername;
        echo "<br>Contraseña: " . $loginPassword;
    } else {
        echo "Inicio de sesión fallido. Por favor, verifica tus credenciales.";
    /}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h1>Formulario de Inicio de Sesión</h1>
    <form method="POST" action="../iniciar_sessio/userLogin.php">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>

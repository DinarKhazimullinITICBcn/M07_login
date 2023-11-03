<?php
//Creem la sessio
session_start();
include('../db_connection.php');\
//Comprovem si esta buit o no
if (isset($_POST['email']) && isset($_POST['contrasenya'])){
    $email = $_POST['email'];
    $passwd = $_POST['contrasenya'];
    //Fem la consulta y la executem
    $consulta = "SELECT NAME, SURNAME, PASSWORD, ROL from user where email = '$email';";
    $result = mysqli_query($conn, $consulta);
    $fila = mysqli_fetch_assoc($result);
    if($fila) {
        if ($fila['PASSWORD'] == $passwd) {
            //Creem les diferents sessions per utilitzar
            $_SESSION['name'] = $fila['NAME'];
            $_SESSION['surname'] = $fila['SURNAME'];
            $_SESSION['email'] = $email;
            $_SESSION['rol'] = $fila['ROL'];
            header("Location: ../views/usuari.php");
        } else {
            //Sino mostrem que el login es incorrecte
            include('../views/login.html');
            echo "Login incorrecte";
        }
    } else {
        include('../views/login.html');
        echo "Login incorrecte";
    }
} else {
    //Si esta buit mostrem que login incorrecte buit
    include('../views/login.html');
    echo "Login incorrecte buit";
}
?>
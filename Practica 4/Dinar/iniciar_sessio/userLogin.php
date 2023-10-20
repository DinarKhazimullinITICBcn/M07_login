<?php
//Incluim la conexio per a les queries
include('../db_connection.php');
//Mirem si el send esta buit o no.
if (isset($_POST['send'])){
    //Guardem les dades del form
    $email = $_POST['email'];
    $passwd = $_POST['contrasenya'];
    //Fem la consulta del select per mirar la contrasenya
    $consulta = "SELECT PASSWORD from user where email = '$email';";
    $result = mysqli_query($conn, $consulta);
    $fila = mysqli_fetch_assoc($result);
    //Mirem si les contrasenyes son iguals
    if($fila) {
        if ($fila['PASSWORD'] == $passwd) {
            //Enviem la informacio a ../views/usuari.php amb la etiqueta email y la variable email per url
            header('Location: ../views/usuari.php?email=' . $email);
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
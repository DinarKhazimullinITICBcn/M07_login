<?php

// Guardem 4 dades necessaries per fer la connexió amb la BBDD del servidor
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";

    try {
        $conn = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre );
    } catch (Exception $e) {

    }
?>
<?php
//Inicialitzacio de la sessio
session_start();
//Borrem les dades de les sessions
session_unset();
//Borrem la sessio completament
session_destroy();
header('Location: ../views/login.html');
?>
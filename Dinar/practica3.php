<?php 
    if (isset($_GET['u_id'])) {
        $u_id = $_GET['u_id'];
    } else {
        $u_id  = null;
    }
    if (isset($_GET['u_rol'])) {
        $u_rol = $_GET['u_rol'];
    } else {
        $u_rol  = null;
    }
    if (isset($_GET['u_name'])) {
        $u_name = strval($_GET['u_name']);
    } else {
        $u_name  = null;
    }
    if (isset($_GET['u_surname'])) {
        $u_surname = strval($_GET['u_surname']);
    } else {
        $u_surname  = null;
    }
    if (isset($_GET['u_password'])) {
        $u_password = strval($_GET['u_password']);
    } else {
        $u_password  = null;
    }
    if (isset($_GET['u_email'])) {
        $u_email = strval($_GET['u_email']);
    } else {
        $u_email  = null;
    }
    if (isset($_GET['u_active'])) {
        $u_active = $_GET['u_active'];
    } else {
        $u_active  = null;
    }
    
    //Variables de SQL
    $db_host = "localhost";
    $db_nombre = "users";
    $db_usuario = "root";
    $db_passwd = "";
    //Connexio SQL
    $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
    $consulta = "INSERT INTO user (id, rol, name, surname, password, email, active) VALUE ('$u_id', '$u_rol', '$u_name', '$u_surname', '$u_password', '$u_email', '$u_active')";
    $products = mysqli_query($connexio, $consulta)
?>
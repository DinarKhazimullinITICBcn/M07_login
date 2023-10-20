<?php
//incluim la conexio
include('../db_connection.php');
//Mirem si la informacio que s'envia esta buida o no.
if (isset($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $rol_user = $_POST['ROL'];
    $pass = $_POST['passwd'];
    $email = $_POST['email'];
    $actiu = $_POST['active'];
//Si es actiu ho convertim en True y si no en false
    if ($actiu = 'si'){
        $actiu = 'True';
    }else{
        $actiu = 'False';
    }


    //Fem consulta query
    $consulta = "INSERT INTO `user`(`ID`, `NAME`, `SURNAME`, `ROL`, `PASSWORD`, `EMAIL`, `ACTIVE`) VALUES ('$id', '$nom', '$cognom', '$rol_user', '$pass', '$email', $actiu)";

    
    //Introduim les dades de consulta a la taula user
    $result = mysqli_query($conn, $consulta);
       
    if(!$result){
        die("Query fail!");
    }
    
    header("Location: ../views/login.html");
    
}
?>
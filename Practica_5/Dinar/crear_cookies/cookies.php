<?php
if (isset($_POST['send'])) {
    $llenguatge = $_POST["llenguatge"];
    setcookie("llenguatge", $llenguatge, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: ../redireccionar/redireccionar_cookie.php");
} else {
    header("Location: ../views/idioma.html");
}
?>

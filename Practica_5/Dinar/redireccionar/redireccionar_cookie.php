<?php
$llenguatge = $_COOKIE["llenguatge"];
echo $llenguatge;
if($llenguatge == "catala") {
    header("Location: ../views/catala/index.html");
    exit();
} elseif($llenguatge == "castella") {
    header("Location: ../views/castella/index.html");
    exit();
} elseif($llenguatge == "angles") {
    header("Location: ../views/angles/index.html");
    exit();
}
?>

/*Arxiu que esborra la cookie i t'envia a la seleciio d'idioma*/
<?php
setcookie("idioma", "", time() - 1);
header("Location: views/index.php");
?>


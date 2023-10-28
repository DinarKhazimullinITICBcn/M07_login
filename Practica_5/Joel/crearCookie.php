<?php
//Creem la primera galeta
echo"<h1>Creem cookie</h1>";
setcookie("idioma",$_GET['idioma'],time()+120);
header('Location: ver_cookie.php')
?>


<!doctype html>
<html lang="es">
  <head>
    <title>COOKIE</title>
  </head
  <body>
    <?php
    if(isset($_COOKIE['idioma'])) {
    echo $_COOKIE['idioma'];
    } else {
    echo "No se ha creado nada";
    }
    ?>

  </body>
</html>


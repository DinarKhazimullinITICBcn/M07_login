<!DOCTYPE html>
<html>
  <head>
    <title>Canvi d' idioma</title>
  </head>
  <body>
    <?php
    if($_COOKIE['idioma'] =='spanish') {
    header('Location: spanish/index.html');
    } else if ($_COOKIE['idioma'] =='english'){
    header('Location: english/index.html');
    } else if ($_COOKIE['idioma'] =='catalan'){
    header('Location: catalan/index.html');
    }
    ?>

    <h1>ESCULL UN IDIOMA</h1>
    <table width="25%" border="0" align="center">
      <tr>
        <td align="center">
          <a href="../crearCookie.php?idioma=spanish">
            <img src="../img/Spanish.png" width="90" height="60">
            <h1>SPANISH</h1>
          </a>
        </td>
        <td align="center">
          <a href="../crearCookie.php?idioma=english">
            <img src="../img/English.jpeg" width="90" height="60">
            <h1>ENGLISH</h1>
          </a>
        </td>
        <td align="center">
          <a href="../crearCookie.php?idioma=catalan">
            <img src="../img/Catalan.png" width="90" height="60">
            <h1>CATALAN</h1>
          </a>
        </td>
      </tr>
    </table> 

  </body>
</html>

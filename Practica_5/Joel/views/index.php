<!DOCTYPE html>
<html>
  <head>
    <title>Canvi d' idioma</title>
  </head>
  <body>
  <?php
    if (isset($_COOKIE["idioma"])) {
        $idioma = $_COOKIE["idioma"];
        header("Location: ../views/" . $idioma . "/index.html");
        exit;    }
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

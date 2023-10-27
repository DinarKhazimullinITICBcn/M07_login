<!DOCTYPE html>
<html>
  <head>
    <title>Canvi d' idioma</title>
  </head>
  <body>
    <?php
    if($_COOKIE['idioma'] =='es') {
    header('Location: spanish/spain.html');
    } else if ($_COOKIE['idioma'] =='en'){
    header('Location: english/english.html');
    } else if ($_COOKIE['idioma'] =='ca'){
    header('Location: catalan/catalan.html');
    }
    ?>

    <h1>ESCULL UN IDIOMA</h1>
    <table width="25%" border="0" align="center">
      <tr>
        <td align="center">
          <a href="crearCookie.php?idioma=es">
            <img src="spainFlag.png" width="90" height="60">
            <h1>SPANISH</h1>
          </a>
        </td>
        <td align="center">
          <a href="crearCookie.php?idioma=en">
            <img src="britishFlag.png" width="90" height="60">
            <h1>ENGLISH</h1>
          </a>
        </td>
        <td align="center">
          <a href="crearCookie.php?idioma=ca">
            <img src="catalanFlag.png" width="90" height="60">
            <h1>CATALAN</h1>
          </a>
        </td>
      </tr>
    </table> 

  </body>
</html>

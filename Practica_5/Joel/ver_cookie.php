<?php
if(!isset($_COOKIE['idioma'])){
  header('Location: index.php');
} else if ($_COOKIE['idioma'] =='spanish'){
  header('Location: views/spanish/index.html');
} else if ($_COOKIE['idioma'] =='english'){
  header('Location: views/english/index.html');
} else if ($_COOKIE['idioma'] =='catalan'){
  header('Location: views/catalan/index.html');
}
?>

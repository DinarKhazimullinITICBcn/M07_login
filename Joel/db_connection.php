<?php
//Dades necessaries per conectar amb el server
$host = "localhost";
$nom = "users";
$usuari = "root";
$contra = "";

try {
  $conexio = mysqli_connect($host, $usuari, $contra, $nom);
} catch (Exception $e) {
  echo(`No hi ha hagut connexió amb la base, error: $e`)
}
?>

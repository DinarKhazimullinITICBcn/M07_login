<?php
// Dades necessàries per connectar amb el servidor
$host = "localhost";
$nom = "Users";
$usuari = "root";
$contra = "";

try {
  $connection = mysqli_connect($host, $usuari, $contra, $nom);
  if (!$connection) {
    die("No s'ha pogut connectar a la base de dades: " . mysqli_connect_error());
  }
} catch (Exception $e) {
  echo("No hi ha hagut connexió amb la base, error: " . $e->getMessage());
}

?>

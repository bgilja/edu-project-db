<?php


  $naziv = $_POST['naziv'];
  $cijena = $_POST['cijena'];
  $informacije = $_POST['informacije'];
  $id_dio = $_POST['id_dio'];

  $servername = "127.0.0.1";
  $username = "student"; //promjenio zbog baze na svom računalu, K
  $password = "student"; //promjenio zbog baze na svom računalu, K
  $dbname = "popravak_vozila";
  // Stvaranje konekcije na bazu
  $link = new mysqli($servername, $username, $password, $dbname);
  // Provjera uspjesnosti spajanja na bazu
  if ($link->connect_error) {
    die("Uspostavljanje konekcije na bazu nije uspjelo: ". $link->connect_error);
  }

  if ($id_dio == null) {
    $query = "INSERT INTO `usluga`(`naziv`, `informacije`, `cijena`) VALUES ('" . $naziv . "', '" . $informacije . "', '" . $cijena . "')";
  } else {
    $query = "INSERT INTO `usluga`(`naziv`, `informacije`, `cijena`, `id_dio`) VALUES ('" . $naziv . "', '" . $informacije . "', '" . $cijena . "', '" . $id_dio . "')";
  }

  $result = mysqli_query($link, $query);

  //  Zatvaranje konekcije
  mysqli_close($link);

  header( 'Location: usluge.php');
?>

<?php

  $id = $_POST['id'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

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


  $query = "INSERT INTO `radionica`(`adresa`, `broj_telefona`) VALUES ('" . $address . "', '" . $phone . "')";



  $result = mysqli_query($link, $query);

  //  Zatvaranje konekcije
  mysqli_close($link);


  header( 'Location: radionice.php');

?>

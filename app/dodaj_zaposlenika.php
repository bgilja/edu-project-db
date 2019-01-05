<?php

  $id = $_POST['id'];
  $ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $satnica = $_POST['satnica'];
  $pass = $_POST['password'];

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


  $query = "INSERT INTO `zaposlenik`(`ime`, `prezime`, `satnica`, `password`) VALUES ('" . $ime . "', '" . $prezime . "', " . $satnica . ", '" . $pass . "')";



  $result = mysqli_query($link, $query);

  //  Zatvaranje konekcije
  mysqli_close($link);


  header( 'Location: zaposlenici.php');

?>

<?php

  $broj_sasije = $_POST['broj_sasije'];
  $marka = $_POST['marka'];
  $model = $_POST['model'];
  $godina_proizvodnje = $_POST['godina_proizvodnje'];
  $oib_vlasnika = $_POST['oib_vlasnika'];

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


  $query = "INSERT INTO `vozilo`(`broj_sasije`, `marka`, `model`, `godina_proizvodnje`, `oib_vlasnik`) VALUES ('" . $broj_sasije . "', '" . $marka . "', '" . $model . "', " . $godina_proizvodnje . ", '". $oib_vlasnika ."')";



  $result = mysqli_query($link, $query);

  //  Zatvaranje konekcije
  mysqli_close($link);


  header( 'Location: vlasnici_vozila.php?oib='.$oib_vlasnika);

?>

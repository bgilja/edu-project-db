<?php

  $id_zaposlenik = $_GET['id'];
  $broj_sasije = $_POST['broj_sasije'];
  $id_usluga = $_POST['id_usluga'];

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


  // tražimo cijenu usluge iz tablice "usluga"
  $query = "SELECT cijena FROM usluga WHERE id = $id_usluga";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  $cijena_usluge = $row["cijena"];

  $query = "INSERT INTO `popravak`(`id_vozilo`, `id_usluga`, `id_zaposlenik`, `cijena`) VALUES ('" . $broj_sasije . "', '" . $id_usluga . "', " . $id_zaposlenik . ", '" . $cijena_usluge . "')";


  //print($query);

  $result = mysqli_query($link, $query);

  // print($id_zaposlenik . $broj_sasije . $id_usluga);

  //  Zatvaranje konekcije
  mysqli_close($link);

  header( 'Location: zaposlenici_vozila.php?id=' . $id_zaposlenik );

?>

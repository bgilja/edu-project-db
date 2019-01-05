<?php

  $id = $_POST['id'];

  $servername = "127.0.0.1"; 
  $username = "root"; //promjenio zbog baze na svom računalu, K
  $password = "vertrigo"; //promjenio zbog baze na svom računalu, K
  $dbname = "popravak_vozila";
  // Stvaranje konekcije na bazu
  $link = new mysqli($servername, $username, $password, $dbname);
  // Provjera uspjesnosti spajanja na bazu
  if ($link->connect_error) {
    die("Uspostavljanje konekcije na bazu nije uspjelo: ". $link->connect_error);
  }


  $query = "DELETE FROM zaposlenik WHERE id = " . $id;
  
  $result = mysqli_query($link, $query);
  
  //  Zatvaranje konekcije
  mysqli_close($link);

  
  header( 'Location: zaposlenici.php');

?>
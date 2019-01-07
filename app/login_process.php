<?php

  $oib = $_POST['oib'];
  $pass = $_POST['pass'];

  $servername = "127.0.0.1";
  $username = "student";
  $password = "student";
  $dbname = "popravak_vozila";
  // Stvaranje konekcije na bazu
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Provjera uspjesnosti spajanja na bazu
  if ($conn->connect_error) {
    die("Uspostavljanje konekcije na bazu nije uspjelo: ". $conn->connect_error);
  }
  $sql = "SELECT oib, password FROM Vlasnik";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

  $flag = false;
  while($row = $result->fetch_assoc()) {
      if ($row["oib"] == $oib && $row["password"] == $pass) {
        $flag = true;
      }
  }
  //  Zatvaranje konekcije
  $stmt->close();

  if ($flag) {
    header( 'Location: vlasnici_vozila.php?oib='.$oib );
  } else {
    header( 'Location:  login.php' );
  }
?>

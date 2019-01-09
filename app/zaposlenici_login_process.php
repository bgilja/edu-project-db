<?php

  $id = $_POST['id'];
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
  $sql = "SELECT id, password FROM Zaposlenik";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

  $flag = false;
  while($row = $result->fetch_assoc()) {
      if ($row["id"] == $id && $row["password"] == $pass) {
        $flag = true;
      }
  }
  //  Zatvaranje konekcije
  $stmt->close();

  if ($flag) {
    header( 'Location: zaposlenici_home.php?id='.$id );
  } else {
    header( 'Location:  zaposlenici_login.php' );
  }
?>

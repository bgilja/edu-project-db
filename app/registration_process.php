<?php

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $oib = $_POST['oib'];
  $pass = $_POST['password'];
  $phone = $_POST['phone'];
  $year = $_POST['year'];
  $address = $_POST['address'];

  // if (!isset($_POST['oib']) || strlen($_POST['oib']) < 11) {
  //   header('Location:  register.php');
  // }

  // if (!isset($_POST['password']) || strlen($_POST['password']) < 8) {
  //   header('Location:  register.php');
  // }

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

  $sql = "SELECT oib FROM Vlasnik";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

  $flag = false;
  while($row = $result->fetch_assoc()) {
    echo $row["oib"]."<br>";
    if ($row["oib"] == $oib) {
      $flag = true;
    }
  }

  if ($flag == false) {
    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['oib']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['year']) && isset($_POST['address'])) {
      $sql_query = $conn->prepare("INSERT INTO Vlasnik (oib, ime, prezime, godina_rodenja, adresa, broj_telefona, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
      $sql_query->bind_param('sssisss', $_POST['oib'], $_POST['first_name'], $_POST['last_name'], $_POST['year'], $_POST['address'], $_POST['phone'], $_POST['password']);
      $sql_query->execute();
      $result = $sql_query->get_result();
      $stmt->close();
      header('Location:  login.php');
    } else {
      header('Location:  register.php');
    }
  } else {
    header('Location:  register.php');
  }
?>

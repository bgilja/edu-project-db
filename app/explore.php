<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Tvrka</title>
  </head>
  <body>

    <div class="navbar-div">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img src="src/logo.jpg" class="logo">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="explore.php">Explore</a>
            </li>
          </ul>
          <div class="user-form">
            <a class="btn btn-secondary" href="login.php" role="button">Login</a>
            <a class="btn btn-secondary" href="register.php" role="button">Register</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="price_list">
      <?php
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
        $sql = "SELECT id, naziv, cijena FROM Usluga";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        //  Provjera ima li rezultata
        if ($result->num_rows > 0) {
          // Printanje rezultata
          while($row = $result->fetch_assoc()) {
              echo $row["id"]. ": " . $row["naziv"]. " " . $row["cijena"]. " kn<br>";
          }
        } else {
          echo "Nema rezultata";
        }
        //  Zatvaranje konekcije
        $stmt->close();
      ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>

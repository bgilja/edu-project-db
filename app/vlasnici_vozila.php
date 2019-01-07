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
              <a class="nav-link active" href="">Vozila</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vlasnici_contact.php?oib=<?php echo $_GET['oib']?>">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vlasnici_cjenik.php?oib=<?php echo $_GET['oib']?>">Cjenik</a>
            </li>
          </ul>
          <div class="user-form">
            Prijavljeni ste kao vlasnik
            <a class="btn btn-secondary" href="index.php" role="button">Logout</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="price_list">
      <?php
        $oib = $_GET['oib'];
        $servername = "127.0.0.1";
        $username = "student"; 
        $password = "student"; 
        $dbname = "popravak_vozila";
        // Stvaranje konekcije na bazu
        $link = new mysqli($servername, $username, $password, $dbname);
        // Provjera uspjesnosti spajanja na bazu
        if ($link->connect_error) {
          die("Uspostavljanje konekcije na bazu nije uspjelo: ". $link->connect_error);
        }

        $sql = "SELECT ime, prezime FROM vlasnik WHERE oib = $oib";
        $result = mysqli_query($link, $sql);


        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          print("<h3>");
          print("Pozdrav " . $row["ime"] . " " . $row["prezime"] . "!");
          print("</h3>");
        }

        mysqli_close($link);

      ?>
      
    </div>

    <div class="price_list">
      <h4>Moja vozila: </h4>

      <table border="1" align="center" id="zaposlenici_table" class="table">
      <tr><th>Broj sasije</th><th>Marka</th><th>Model</th><th>Godina proizvodnje</th></tr>

      <?php
        $oib = $_GET['oib'];
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

        $sql = "SELECT broj_sasije, marka, model, godina_proizvodnje FROM Vozilo WHERE oib_vlasnik = $oib";
        $result = mysqli_query($link, $sql);


        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          print("<tr>");
          print("<td>" . $row["broj_sasije"] . "</td><td>" . $row["marka"] . "</td><td>" . $row["model"]. "</td><td>" . $row["godina_proizvodnje"] . "</td>");
          print("</tr>");
        }

        mysqli_close($link);

      ?>

      </table>

      <h4 id="dodaj_zaposlenika_h3">Dodavanje vozila:</h4>
      <form action="dodaj_vozilo.php" method="post" id="dodaj_zaposlenika">
        <div class="form-row">
          <div class="col">
            <label for="exampleInputFirstName1">Marka</label>
            <input type="text" class="form-control" id="exampleInputFirstName1" placeholder="Marka" name="marka">
          </div>
          <div class="col">
            <label for="exampleInputPrezime1">Model</label>
            <input type="text" class="form-control" id="exampleInputPrezime1" placeholder="Model" name="model">
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="exampleInputPassword1">Broj sasije</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Broj sasije" name="broj_sasije">
          </div>
          <div class="col">
            <label for="exampleInputSatnica1">Godina proizvodnje</label>
            <input type="number" class="form-control" id="exampleInputSatnica1" placeholder="Godina proizvodnje" name="godina_proizvodnje">
          </div>
        </div>
        <input type="hidden" name="oib_vlasnika" value="<?php echo $_GET['oib']?>">
        <input class="btn btn-primary" type="submit" value="Dodaj" id="exampleInputButton1">
      </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

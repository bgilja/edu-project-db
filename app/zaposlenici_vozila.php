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
              <a class="nav-link" href="zaposlenici_home.php?id=<?php echo $_GET['id']?>">Zaposlenici</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="zaposlenici_radionice.php?id=<?php echo $_GET['id']?>">Radionice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="zaposlenici_vlasnici.php?id=<?php echo $_GET['id']?>">Vlasnici</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Vozila</a>
            </li>
          </ul>
          <div class="user-form">
            <a class="btn btn-secondary" href="index.php" role="button">Logout</a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Gumb za upisat popravak -->
    <div class="price_list">
      <form action="popravi_vozilo.php?id=<?php echo $_GET['id']?>" method="POST">
        <input type="hidden" name="id" value="2">
        <input type="submit" class="btn btn-secondary" value="Upiši novi popravak">
      </form>
    </div>

    <div class="price_list">
      <h3>Vozila: </h3>

      <table border="1" id="zaposlenici_table" class="table">
      <tr><th>Broj sasije</th><th>Marka</th><th>Model</th><th>Godina proizvodnje</th><th>OIB vlasnika</th><th>Opcija</th></tr>

      <?php
        $id = $_GET['id'];
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

        $sql = "SELECT broj_sasije, marka, model, godina_proizvodnje, oib_vlasnik FROM Vozilo";
        $result = mysqli_query($link, $sql);


        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          print("<tr>");
          print("<td>" . $row["broj_sasije"] . "</td><td>" . $row["marka"] . "</td><td>" . $row["model"] . "</td><td>" . $row["godina_proizvodnje"] . "</td><td>" . $row["oib_vlasnik"] . "</td> ");
          print('<td>
                <form action="popravi_vozilo.php?id=' . $_GET["id"] . '" method = "POST">
                <input type="submit" value="Upiši popravak" > </form></td>');
          print("</tr>");
        }

        mysqli_close($link);

      ?>

      </table>
    </div>

    <div class="price_list">
      <h3>Vozila koja sam popravljao: </h3>

      <table border="1" id="zaposlenici_table" class="table">
      <tr><th>Broj sasije</th><th>Marka</th><th>Model</th><th>Godina proizvodnje</th><th>OIB vlasnika</th><th>Usluga</th></tr>

      <?php
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

        $id_zaposlenik = $_GET["id"];
        $sql = "SELECT broj_sasije, marka, model, godina_proizvodnje, oib_vlasnik, id_usluga FROM Vozilo
                inner join Popravak on Vozilo.broj_sasije = Popravak.id_vozilo where id_zaposlenik = $id_zaposlenik";
        $result = mysqli_query($link, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          $id_usluga = $row["id_usluga"];
          $sql_usluga = "SELECT naziv FROM Usluga where id = $id_usluga";
          $result_usluga = mysqli_query($link, $sql_usluga);
          $usluga_naziv = mysqli_fetch_array($result_usluga, MYSQLI_BOTH);
          print("<tr>");
          print("<td>" . $row["broj_sasije"] . "</td><td>" . $row["marka"] . "</td><td>" . $row["model"] . "</td><td>" . $row["godina_proizvodnje"] . "</td><td>" . $row["oib_vlasnik"] . "</td> ");
          print("<td>". $usluga_naziv["naziv"] ."</td>");
          print("</tr>");
        }

        mysqli_close($link);

      ?>

      </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>

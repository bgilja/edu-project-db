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
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Radionice<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="zaposlenici.php">Zaposlenici</a>
            </li>
          </ul>
          <div class="user-form">
            <a class="btn btn-secondary" href="index.php" role="button">Logout</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="price_list">
      <h3>Trenutne radionice: </h3>

      <table border="1" id="zaposlenici_table" class="table">
      <tr><td>Id</td><td>Adresa</td><td>Broj telefona</td><td>Opcija</td></tr>

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

        $sql = "SELECT id, adresa, broj_telefona FROM Radionica";
        $result = mysqli_query($link, $sql);


        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          print("<tr>");
          print("<td>" . $row["id"] . "</td><td>" . $row["adresa"] . "</td><td>" . $row["broj_telefona"] . "</td> ");
          print('<td>
                <form action="izbrisi_radionicu.php" method = "POST">
                <input type="hidden" name="id" value="' . $row["id"] . '">
                <input type="submit" value="Izbriši" > </form></td>');
          print("</tr>");
        }

        mysqli_close($link);

      ?>

      </table>

      <h3 id="dodaj_zaposlenika_h3">Za dodavanje radionice ispunite formular</h3>
      <form action="dodaj_radionicu.php" method="post" id="dodaj_zaposlenika">
        <div class="form-group">
          <label for="exampleInputAdresa2">Adresa</label>
          <input type="text" class="form-control" id="exampleInputAdresa2" placeholder="Adresa" name="address">
        </div>
        <div class="form-group">
          <label for="exampleInputPhone2">Broj telefona</label>
          <input type="text" class="form-control" id="exampleInputPhone2" placeholder="Broj telefona" name="phone">
        </div>
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

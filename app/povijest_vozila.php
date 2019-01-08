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
  <body class="login-body">

      <div class="povijest">
      <h4>Povijest vašeg vozila:</h4>
      <div>
        <table border="1" id="zaposlenici_table" class="table1">
          <tr><th>Id_popravak</th><th>id_vozilo</th><th>Naziv usluge</th><th>Ime zaposlenika</th><th>Prezime zaposlenika</th><th>Cijena popravka</th></tr>

          <?php

          $broj_sasije = $_POST['broj_sasije'];

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

          $query = "SELECT * FROM popravak WHERE id_vozilo = " . $broj_sasije;

          

          $result = mysqli_query($link, $query);

          while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
            $id_popravak = $row["id_popravak"];
            $id_vozilo = $row["id_vozilo"];
            $id_usluga = $row["id_usluga"];
            $id_zaposlenik = $row["id_zaposlenik"];

            // tražimo naziv usluge
            $query_usluga = "SELECT naziv FROM usluga WHERE id = " . $id_usluga;
            $result_usluga = mysqli_query($link, $query_usluga);
            $row_usluga = mysqli_fetch_array($result_usluga, MYSQLI_BOTH);
            $naziv_usluga = $row_usluga["naziv"];

            //tražimo ime i prezime zaposlenika
            $query_zaposlenik = "SELECT ime, prezime FROM zaposlenik WHERE id = " . $id_zaposlenik;
            $result_zaposlenik = mysqli_query($link, $query_zaposlenik);
            $row_zaposlenik = mysqli_fetch_array($result_zaposlenik, MYSQLI_BOTH);
            $ime_zaposlenik = $row_zaposlenik["ime"];
            $prezime_zaposlenik = $row_zaposlenik["prezime"];

            print("<tr>");
            print("<td>" . $row["id_popravak"] . "</td><td>" . $row["id_vozilo"] . "</td><td>" . $naziv_usluga . "</td><td>" . $ime_zaposlenik . "</td><td>" . $prezime_zaposlenik . "</td><td>" . $row["cijena"] . "</td> ");
            print("</tr>");
          }

          //  Zatvaranje konekcije
          mysqli_close($link);


          //header( 'Location: radionice.php');

        ?>


        </table>


      </div>    
      </div>  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



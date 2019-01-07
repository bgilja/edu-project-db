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

    <form class="LoginForm" action="popravi_vozilo_process.php?id=<?php echo $_GET['id']?>" method="POST">
      <h3>Upiši podatke o obavljenom popravku:</h3>
      
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label1">Broj šasije vozila:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputOIB" name="broj_sasije">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label1">ID usluge:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword"  name="id_usluga">
        </div>
      </div>
      <input type="submit" class="btn btn-primary" id="loginButton" value="Upiši">

    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>




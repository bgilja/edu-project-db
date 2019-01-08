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

    <form class="registerForm" action="registration_process.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Ime</label>
          <input type="text" class="form-control" placeholder="Ime" name="first_name">
        </div>
        <div class="form-group col-md-6">
          <label>Prezime</label>
          <input type="text" class="form-control" placeholder="Prezime" name="last_name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputOib4">OIB</label>
          <input type="text" class="form-control" id="inputOib" placeholder="OIB" name="oib">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Lozinka</label>
          <input type="password" class="form-control" id="inputPassword" placeholder="Lozinka" name="password">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPhone">Broj telefona</label>
          <input type="text" class="form-control" id="inputPhone" placeholder="0911234567" name="phone">
        </div>
        <div class="form-group col-md-6">
          <label for="inputYear">God. rođenja</label>
          <input type="number" class="form-control" id="inputYear" placeholder="1960" name="year">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Adresa</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
      </div>
      <input type="submit" class="btn btn-primary" id="registerButton" value="Login">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

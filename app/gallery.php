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
  <body class="gallery-body">
    <div class="navbar-div">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img src="src/logo.jpg" class="logo">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="gallery.php">Galerija</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Radionice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="explore.php">Cjenik</a>
            </li>
          </ul>
          <div class="user-form">
            <a class="btn btn-secondary" href="login.php" role="button">Login</a>
            <a class="btn btn-secondary" href="register.php" role="button">Register</a>
          </div>
        </div>
      </nav>
    </div>

    <div class="jumbotron">
      <h5 style="margin-left: 8%;">Zavirite u naše radionice...</h5>
      
      <hr class="my-4">
      
    </div>

    <div>
      <ul id="gallery">
        <li><img src="src/garage1.jpg" class="gallery-img" alt="Responsive image"></li>
        <li><img src="src/workshop1.jpg" class="gallery-img" alt="Responsive image"></li>
        <li><img src="src/tire.jpg" class="gallery-img" alt="Responsive image"></li>
        <li><img src="src/oil.jpg" class="gallery-img" alt="Responsive image"></li>
      </ul>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
setcookie("logout1",1);
if (isset($_POST['logout'])) {
setcookie("logout1",1,time()-3600);
setcookie("username","$nama", time()-3600);
setcookie("password","$pass", time()-3600);
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Haidar Taqy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Sosmed
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.instagram.com/haidar.329/">Instagram</a>
          <a class="dropdown-item" href="https://www.youtube.com/channel/UC69zzFEYDt_GBVtnfH3vQOQ?view_as=subscriber">My Youtube</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.facebook.com/SteamHaidar">Facebook</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
    <input type="submit" class="btn btn-outline-success my-2 my-sm-0 bg-danger" name="logout" value="Logout">
    </form>
  </div>
</nav>

</body>
<div class="jumbotron jumbotron-fluid">
<h3 class="nav justify-content-center">WELCOME TO MY PROFILE</h3>   
  <div class="container text-center mt-4">
  <img src="img.jpg" width="15%" class="rounded-circle">
    <h1 class="display-4 mt-4">Haidar Taqy</h1>
    <p class="lead">My Website</p>
    <p>Facebook|Instagram|Youtube</p>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col text-center">
        <h1>Profile</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <p>Nama: Haidar Taqy </p>
            <p>Alamat: Jln. Gandrungmangu</p>
        </div>
    </div>

</div>

</html>
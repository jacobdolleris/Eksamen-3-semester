<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Document</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/res.css">
</head>
<body>
    <header>

<nav id="nav1">

<a href="index.php" class="active1">Home</a>
<a href="smm.php" class="active2">Super Mario Maze</a>
<a href="virtual.php" class="active3">Virtual World</a>
<a href="vuedrums.php" class="active4">Drum kit</a>
<a href="contact.php" class="active5">Contact us</a>


<?php
    if (isset($_SESSION['userId'])){
        echo '<form action="includes/logout.inc.php" method="post" class=" form formlg">
            
        <button type="submit" name="logout-submit" class="btn btn-secondary logoutKnap">Logout</button>
        </form>';
    } 
    
    else{
        echo '<div class="form formTop">
        <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Email/Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
        <a href="signup.php" class="tilmeld">
        <button type="button" class="btn btn-dark">
        Signup
        </button>
        
        </a>
        </form>
        ';
    }
    
    ?>

</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light nav2">
  <a class="navbar-brand" href="#">GameWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="smm.php">Super Mario Maze</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="virtual.php">Virtual World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vuedrums.php">Drum Kit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
  
  </div>
</nav>



<script src="js/main.js"></script>

    </header>

<?php 
require "header.php";
?>

    <main>



    <style>
    .active3{
        color: green;
        
    }
</style>






    <?php
    
    if (isset($_SESSION['userId'])){
        echo '
<div class="signupBox intro">
    <h1>
        Welcome to: <br>
        Virtual World
    </h1>
    <h2>How to play:</h2>

    <p>Use W,A,S,D to move yourself and the mouse to look around.
        <br>
        Experience 3 different worlds:
        <br>
            Resturante, Car dealership and a Zoo


    </p>
    <a href="virtual/index.php">
    <button type="button" class="btn btn-success startGameBtn">Start Experience</button>

    </a>
    <div class="virbilleder">
        <img src="images/res.png" width="270px">
        <img src="images/car.png" width="270px" id="b2">
        <img src="images/zoo.png" width="270px" id="b3">
    </div>


</div>';
    } else{
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "nouser") {
                echo'<div class="kasse"><p class="no">User not found<p></div>';
            }
        }
    
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo'<div class="kasse"><p class="no">Empty fields<p></div>';
            }
        }
    
    
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "wrongpassword") {
                echo'<div class="kasse"><p class="no">Wrong password<p></div>';
            }
        }
        echo '
        <div class="kasse">
        <p class="no lg">You are not logged in</p>
        <p class="no lg">Log in or sign up to continue</p>
        
        <div class="formind">
        <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Email/Username">
        <input type="password" name="pwd" placeholder="Password">
       
        <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
        
        <div class="sup">
        <p>Or</p>

        <a href="signup.php">
        <button type="button" class="btn btn-dark">
        Signup </button>
        </a>
        </div>
        </div>
        </div>
        <div class="signupBox intro">
        <h1>
            About Virtual World
        </h1>
        <h2>Vitual World is not a game, but an online experience</h2>
    
        <h3>You get to experience three types of worlds. The restaurant, the Car dealership and a zoo. Log into the website to try it out! </h3>
      </div>
        ';
    }

    ?>
    

    </main>


    <?php
require "footer.php";
?>
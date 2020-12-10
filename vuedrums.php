<?php 
require "header.php";
?>

    <main>

    <style>
    .active4{
        color: green;
        
    }
</style>








    <?php
    
    if (isset($_SESSION['userId'])){
        echo '
<div class="signupBox intro">
    <h1>
        Welcome to: <br>
        Drum kit!
    </h1>
    <h2>How to use:</h2>

    <p>Use the mouse to click on the drums, or pres the keyboard button to use keys.
        <br>
        Try making a beat!
        <br>
            


    </p>
    <a href="drumkit/index.php">
    <button type="button" class="btn btn-success startGameBtn">Start Drum kit</button>

    </a>
    <div class="virbilleder">
        <img src="images/drumset.png" width="100%">
  
    </div>


</div>
';
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
            About Drum kit
        </h1>
        <h2>This is not a game but an online drum kit.</h2>
    
        <h3>You can use the mouse to click on the drums, but also pres the keyboard button to play with the keys</h3>
      </div>
        ';
    }
 
    ?>
    

    </main>


<?php
require "footer.php";
?>
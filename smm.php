<?php 
require "header.php";
?>

    <main>

    <style>
    .active2{
        color: green;
        
    }
</style>








    <?php
    
    if (isset($_SESSION['userId'])){
        echo '
<div class="signupBox intro">
    <h1>
        Welcome to: <br>
        Super Mario Maze
    </h1>
    <h2>How to play:</h2>

    <p>Use the arrow keys to move, get all the coins and go to the finish line.
        <br>
        Get there before the time runs out
        <br>
            And dont touch the spikes!


    </p>
    <a href="mariomaze/level1.php">
    <button type="button" class="btn btn-success startGameBtn">Start Game</button>

    </a>
    <div class="virbilleder">
        <img src="mariomaze/images/level1.png" width="270px">
        <img src="mariomaze/images/level2.png" width="270px" id="b2">
        <img src="mariomaze/images/level3.png" width="270px" id="b3">
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
            About Super Mario Maze
        </h1>
        <h2>Super Mario Maze Edition is a speciel Mario game which is only available on this website.</h2>
    
        <h3>The game is coded i Javascript and is a simple maze runner with coins to gather and obstacles to avoid. Complete the levels before the time runs out and dont touch the spikes. </h3>
      </div>
        ';
    }
 
    ?>
    

    </main>


<?php
require "footer.php";
?>
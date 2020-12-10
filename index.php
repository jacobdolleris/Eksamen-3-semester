<?php 
require "header.php";
?>

    <main>


<style>
    .active1{
        color: green;
        
    }
</style>






    <?php
    
    if (isset($_SESSION['userId'])){
        echo '<div class="signupBox intro">';
    echo "<h1>
        Welcome <br><mark id='color'> {$_SESSION['userUid']}</mark>
    </h1>";
    echo '<h2>Game Web is an online game library where you can try different games and online experiences.</h2>

    <h3 class="hidetext">Try out the games and experiences by using the menu or clicking the pictures down below</h3>
  </div>



<div class="picContainer">
<div>
<h2 class="latest">Latest game</h2>
<a href="smm.php">

<button class="pic1"><p>Super Mario Maze</p></button>
</a>
</div>

<div class="hide">
<a href="virtual.php">
<button class="pic1 pic2"><p>Virtual World</p></button>
</a>
</div>
<div class="hide">
<a href="vuedrums.php">
<button class="pic1 pic3"><p>Drum kit</p></button>
</a>
</div>
</div>



'
;
    } 
    

    
    
    
    else{
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
            Game Web
        </h1>
        <h2>What is Game Web?</h2>
    
        <h3>Game Web is an online game library where you can try different games and online experiences. </h3>
      </div>
        
        
        ';
    }

    ?>


    </main>

    <script src="js/main.js"></script>
<?php
require "footer.php";
?>
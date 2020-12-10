<?php
session_start();
include "../includes/dbh.inc.php"

?>
<?php
if (!isset($_SESSION['userUid'])){
    header("Location: ../index.php?error=notLoggedIn");
} else {
};?>
<link href="style.css" rel="stylesheet">

 <div class="background">
        <div class="OS">
            <div class="startGame">
                <a href="../smm.php">    
                <button id="knap">Back</button>
                </a>
            <h1>Level 1</h1>
        </div>
      
    <center>
        <canvas width="420" height="390" id="canvas"></canvas>
    </center>
    <div id="points">
    
    
    </div>
    <div id="safeTimer">
        <h2>Time to complete level:</h2>
        <p id="safeTimerDisplay"></p>
        </div>
    
    
        
    <div id="knapkasse">
        <button onClick ="window.location.reload();" id="knap">Restart level</button>
    </div>
    
    </div>
    
    
        <script src="main.js"></script>
        <img src="images/player.png" style="display: none;">
        <img src="images/dirt.png" style="display: none;">

        
    
    <link href="../css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">





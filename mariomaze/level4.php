<?php
session_start();
include "../includes/dbh.inc.php"

?>
<?php
if (!isset($_SESSION['userUid'])){
    header("Location: ../index.php?error=notLoggedIn");
} else {
};?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="background">
        <div class="OS">
            <div class="startGame">
                <a href="../smm.php">    
                <button id="knap">Back</button>
                </a>
            <h1>Level 4</h1>
        </div>
      
    <center>
        <canvas width="540" height="480" id="canvas"></canvas>
    </center>
    <div id="points">
    
    
    </div>

    <div class="score">
    <h3 id="score">SCORE:</h3>
    <p id="score"></p>
    </div>

    
    
        
    <div id="knapkasse">
        <button onClick ="window.location.reload();" id="knap">Restart level</button>
    </div>
    
    </div>
    
    <audio id="dead" src="images/deadsound.mp3" preload="auto"></audio>
    
    
        <script src="level4.js"></script>
        <img src="images/player.png" style="display: none;">
    </body>
    </html>

      
    <link href="../css/style.css" rel="stylesheet"> 
    <link href="style.css" rel="stylesheet">


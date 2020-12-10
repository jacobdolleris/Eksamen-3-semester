<?php
session_start();
include "../includes/dbh.inc.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
if (!isset($_SESSION['userUid'])){
    header("Location: ../index.php?error=notLoggedIn");
} else {
};?>
<div id="app">

<div class="back">
<a href="../vuedrums.php">
<button>Back</button>
</a>
</div>
<h1>Drum set!</h1>
    <h3>Type in your name</h3>
    <h2>{{name}}'s trommesæt</h2>
    <input type="text" v-model="name">
    
</div>
<div id="drum">



<button @click.prevent="playSound('sounds/crash.mp3')">     <img src="images/crash.png" width="100px"></button>
<button @click.prevent="playSound('sounds/tom-4.mp3')">     <img src="images/tom4.png" width="100px"></button>
<button @click.prevent="playSound('sounds/tom-1.mp3')">     <img src="images/tom1.png" width="100px"></button>
<button @click.prevent="playSound('sounds/kick-bass.mp3')"> <img src="images/kick.png" width="200px"></button>
<button @click.prevent="playSound('sounds/snare.mp3')">     <img src="images/snare.png" width="100px"></button>
<button @click.prevent="playSound('sounds/tom-2.mp3')">     <img src="images/tom2.png" width="100px"></button>
<button @click.prevent="playSound('sounds/tom-3.mp3')">     <img src="images/tom3.png" width="100px"></button>

</div>
<div id="key">
<button
v-on:keydown.77="playSound('sounds/crash.mp3')"
v-on:keydown.78="playSound('sounds/tom-4.mp3')"
v-on:keydown.66="playSound('sounds/tom-1.mp3')"
v-on:keydown.86="playSound('sounds/kick-bass.mp3')"
v-on:keydown.67="playSound('sounds/snare.mp3')"
v-on:keydown.88="playSound('sounds/tom-2.mp3')"
v-on:keydown.90="playSound('sounds/tom-3.mp3')"

>Click here for using keyboard</button>
<p> After clicked use: M, N, B, V, X, Z to make sounds</p>

</div>


<style>
          .back{
            text-align: center;
          }
          .back button{
            width: 100px;
            height: 50px;
            background-color: forestgreen;
            font-size: 20px;
            color: white;
            margin-top: 30px;
          }
</style>
<script src="app.js"></script>
</body>
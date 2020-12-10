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
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Virtual World</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/Virtual World.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
  <?php
if (!isset($_SESSION['userUid'])){
    header("Location: ../index.php?error=notLoggedIn");
} else {
};?>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Virtual World</div>
        
    

      </div>
    </div>


    <div class="back">
    <a href="../virtual.php">
          <button>Back</button>
        </a>
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
    </div>
  </body>
</html>

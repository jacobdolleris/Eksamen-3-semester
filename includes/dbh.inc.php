<?php

$servername = "jacobdolleris.dk.mysql";
$dBUsername = "jacobdolleris_dkgameweb";
$dBPassword = "Tina1234";
$dBName = "jacobdolleris_dkgameweb";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
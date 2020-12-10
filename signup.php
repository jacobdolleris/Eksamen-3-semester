<?php
require "header.php";
?>

<div class="signupBox textCenter">
<h1>Signup</h1>

<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
        echo'<p class="red">Empty fields<p>';
    }

}

if (isset($_GET['error'])) {
    if ($_GET['error']) {
        echo'<p class="red">Error<p>';
    }

}
?>
<style>
.red{color:red}
</style>
<form action="includes/signup.inc.php" method="post">
<input type="text" name="uid" placeholder="Username">
<input type="text" name="mail" placeholder="Email">
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwd-repeat" placeholder="Repeat password">

<button type="submit" name="signup-submit" class="btn btn-dark">Signup</button>

</form>

</div>

<script src="js/main.js"></script>
<?php

require "footer.php";

?>
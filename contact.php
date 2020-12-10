<?php 
require "header.php";
?>
<style>
    .active5{color:green;}
</style>



<main>
    <div class="kontakt kasse">
    <h1>Send E-mail</h1>
    <form class="contact-form" action="includes/contactform.php" method="post">
        <input type ="text" name="name" placeholder="Full name"><br>
        <input type ="text" name="mail" placeholder="Email"><br>
        <input type ="text" name="subject" placeholder="Subject"><br>
        <textarea name="message" placeholder="Message"></textarea><br>
        <button type ="submit" name="submit" class="btn btn-primary">Send mail</button>

    </form>
</div>

</main>

<?php 
require "footer.php";
?>
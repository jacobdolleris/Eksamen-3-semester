


    
    <?php
    if (isset($_SESSION['userId'])){
        echo '<div class="footer">
        <form action="includes/logout.inc.php" method="post" class=" form formlg">
            
        <button type="submit" name="logout-submit" class="btn btn-secondary logoutKnapFooter">Logout</button>
        </form>
        </div>';
    } ?>
    




</body>
</html>
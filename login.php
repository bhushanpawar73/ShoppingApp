<html>
  <body>
    <?php
        include("header.php");

    ?>

    <form action="http://localhost/ShoppingApp/logincheck.php" method="post">
        Enter uid : <input type="text" name="uid" /> <br/>
        Enter pwd : <input type="password" name="pwd" /> <br/>
        <input type="submit" value="LOGIN" />
        
    </form>

    <?php
        include("footer.php");
    ?>
  </body>   
</html>
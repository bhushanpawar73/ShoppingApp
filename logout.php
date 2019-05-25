<?php          session_start();      ?>
<?php
        session_destroy();
        echo("U are successfully logged out <br/>");
        echo("<a href='login.php'> Login again? </a>");

?>
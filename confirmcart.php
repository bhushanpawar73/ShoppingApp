<?php          session_start();      ?>

<?php

    echo("Bill is generated <br/>");
    echo("<br/>Bill will be mailed at ".$_SESSION["email"]);
    echo("<br/>U will receive the message before delivery on ".$_SESSION["contact"]);  
    echo("<br/><a href='logout.php'>  Logout?  </a>");

?>
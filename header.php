<?php     session_start();      ?>
<?php
    if(isset($_SESSION["name"]))
        echo("<h1> WELCOME ".$_SESSION["name"]."</h1>");
    else
    echo("<h1> WELCOME GUEST !!</h1>");    


?>

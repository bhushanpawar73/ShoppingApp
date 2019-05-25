


<?php
    include("header.php");

   $p = $_REQUEST["product"];
   
   if(isset($_SESSION["cart"]))
   {
       array_push($_SESSION["cart"],$p);
   }
   else
   {
       $_SESSION["cart"]=array($p);
   }
   echo($p." is added to the cart <br/>");
   echo("<br/> There are ".count($_SESSION["cart"])." products in the cart");
   echo("<br/> <a href='home.php'> Go Back to Home </a> ");
   echo("<br/> <a href='viewcart.php'> View Cart</a> ");



?>
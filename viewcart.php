

<?php
    include("header.php");

    $con = mysqli_connect("localhost","root","","shoppingdb");
    if(isset($_SESSION["cart"]))
    {
        echo("<table border=1>");
        $sum = 0;
        foreach($_SESSION["cart"] as $p)
        {
            echo("<tr>");
            $query = "SELECT * FROM product WHERE p_id = $p";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            echo("<td>".$row["p_name"]."</td>");
            echo("<td>".$row["p_description"]."</td>");
            echo("<td>".$row["p_price"]."</td>");
            $sum = $sum + $row["p_price"];
            echo("</tr>");    
        }
        echo("<tr>");
        echo("<td colspan=2>Total Price</td>");
        echo("<td>".$sum."</td>");
        echo("</tr>");
        echo("</table>");
        echo("<br/> <a href='confirmcart.php'> Confirm Cart </a> ");
    }
    else
    {
        echo("No Product is selected <br/>");

    }
    echo("<br/> <a href='home.php'> Go Back to Home </a> ");
    
?>



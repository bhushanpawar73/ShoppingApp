<?php
    include("header.php");

    $cid = $_REQUEST["catid"];
    $con = mysqli_connect("localhost","root","","shoppingdb");
    $query = "select * from product where cat_id = $cid";
    $result = mysqli_query($con,$query);
    echo("<form action='addtocart.php'>");
    echo("<br/>select product : ");
    echo("<select name='product'>");
    while($row = mysqli_fetch_assoc($result))
    {
        echo("<option value='".$row["p_id"]."'>".$row["p_name"]."</option> ");
    }
    echo("</select>");
    echo("<br/> <input type='submit' value='Add To Cart' /> ");
    echo("<br/> <a href='home.php'> Go Back to Home </a> ");
    echo("<br/> <a href='viewcart.php'> View Cart</a> ");

?>
<?php
    include("header.php");

    $con = mysqli_connect("localhost","root","","shoppingdb");
    $query = "select * from category";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        echo("<a href='http://localhost/ShoppingApp/displayProducts.php?catid=".$row["c_id"]."'>".$row["c_name"]."</a> <br/>" );
    }
    mysqli_close($con);


?>
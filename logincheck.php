<?php     session_start();    ?>


<?php
   $uid = $_REQUEST["uid"];
   $pwd = $_REQUEST["pwd"];

   $con = mysqli_connect("localhost","root","","shoppingdb");
   $query = "select * from users";
   $result = mysqli_query($con,$query); 
   //echo("<br/>".mysqli_num_rows($result));
   $flag=false;
   while($row = mysqli_fetch_assoc($result))
   {
        if(strcmp($row["u_id"],$uid)==0 && strcmp($row["password"],$pwd)==0)
        {
            $flag=true;
            $_SESSION["email"]=$row["email"];
            $_SESSION["contact"]=$row["contact"];
            $_SESSION["name"]=$row["fname"]." ".$row["mname"]." ".$row["lname"];
            break;
        }
   }
   //echo($flag);
   
   if($flag)
   {
        header('Location: home.php');
   }
   else
   {
        header('Location: login.php');
   }
   


?>

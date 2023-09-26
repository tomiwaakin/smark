<?php
session_start();
$un = $_POST["username"];
$pw = $_POST["password"];
   //connecting to mysql server
   $dbconnect = mysqli_connect("localhost","root","","inventory");
   //preparing sql query to retrieve data from database
   $sql = "SELECT * FROM user_table WHERE username= '$un'  
   AND user_password = '$pw'";
   $result = mysqli_query($dbconnect,$sql);
   $num = mysqli_num_rows($result);
   if($num == 1){
      while($rows = mysqli_fetch_assoc($result)){
           $username = $rows["username"];
           $userid = $rows["user_id"];
           $status = $rows["ustatus"];
           $_SESSION["username"] = $rows["username"];
           $_SESSION["user_id"] = $rows["user_id"];
           $_SESSION["user_status"] = $rows["ustatus"];
           header("Location:home.php");
      }
    
   }else{
    echo "username and password not found";
   }

   echo "<br>";
   echo "<br>";
   echo  '<a href="index.php">Go back</a>'; 
   ?>
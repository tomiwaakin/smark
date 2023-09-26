<?php
$id = $_POST["userid"];
$urole = $_POST["userrole"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE user_table SET ustatus = '$urole' WHERE user_id =".$id;
mysqli_query($connection,$sql);
echo "user role update successfully";

echo "<br>";
echo  '<a href="userlist.php">Go back</a>'; 
?>
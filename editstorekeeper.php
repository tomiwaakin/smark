<?php
$id = $_POST["skid"];
$nsk = $_POST["newstorekeeper"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE storekeeper SET s_name = '$nsk' WHERE s_id =".$id;
mysqli_query($connection,$sql);
echo "Storekeeper updated  successfully";

echo "<br>";
echo  '<a href="storekeeperlist.php">Go back</a>'; 
?>
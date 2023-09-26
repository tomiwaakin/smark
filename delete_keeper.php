<?php 

$id = $_GET["id"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "DELETE FROM sck_keeper WHERE id=".$id;
mysqli_query($connection,$sql);
echo "storekeepeer deleted successfully";

echo "<br>";
echo  '<a href="storekeeperlist.php">Go back</a>';
?>
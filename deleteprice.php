<?php

$id = $_GET["price_id"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "DELETE FROM price_table WHERE price_id=".$id;
mysqli_query($connection,$sql);
echo "price deleted successfully";

echo "<br>";
echo  '<a href="price.php">Go back</a>'; 
?>
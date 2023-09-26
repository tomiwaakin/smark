<?php 
$qly = $_POST["qty"];
$id = $_POST["item_id"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE qty SET item = $qly WHERE id =".$id;
mysqli_query($connection,$sql);
if("mysqli_query"){
    header("location:item.php");
}
?>
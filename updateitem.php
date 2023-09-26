
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET["item.id"];
$qlt = $_GET["qty"];
$connection = mysqli_connect("Localhost","root","","inventory");

echo  '<a href="price.php">Go back</a>'; 
?>
<form method="post" action="editqty.php">
     <input type="hidden" name="id" value="<?php echo $id  ?>">
    <input type="number" name="qty" value="<?php echo $qty?>" placeholder="Enter New qty">
    <button>Update Price</button>
</form>
</body>
</html>
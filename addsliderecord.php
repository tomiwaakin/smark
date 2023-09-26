<?php 

$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "INSERT INTO slideshow('slide_id', 'slide_image') VALUES (NULL,'');";
$recordeset = mysqli_query($connection,$sql);
echo '<script>
window.history.back();
</script>';

?>
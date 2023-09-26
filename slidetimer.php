<?php 
$tim = $_POST["ntime"];
echo $tim;
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE 'slide_time' SET 'time_in_sec' = $tim WHERE time_id =1";
mysqli_query($connection, $sql);
 echo ' <script>
      window.history.back();
    </script>';
?>
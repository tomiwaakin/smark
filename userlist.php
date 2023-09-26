<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List</h1>
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","inventory");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM user_table";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>User NAME</td>
                <td>status</td>
                <td>ACTIONS</td>
            </tr>
        </thead>
        <tbody>
            <?php $status = "";
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
               if($rows["ustatus"] == 1){
                    $status = "Admin";
               }elseif($rows["ustatus"] == 2){
                $status = "Staff";
               }elseif($rows["ustatus"]==3){
                $status = "Customer";
               }

                    echo '
                    <tr>
                        <td>'.$rows["user_id"].'</td>
                        <td>'.$rows["username"].'</td>
                        <td>'.$status.'</td>
                        <td><a href="useredit.php?user_id='.$rows["user_id"].'">Change Role</a></td>
                    </tr>';
               }
            }
            ?>
        </tbody>
    </table>
<?php 
echo "<br>";
echo  '<a href="home.php">Go back</a>'; 
?>
</body>
</html>
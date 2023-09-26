<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edituser.php" method="post">
        
        <input type="hidden"  name="userid" value="<?php echo $_GET["user_id"]; ?>" readonly>
        <input type="text" name="itemname" value=" <?php echo $_SESSION["username"] ?>" readonly>
       
        <select name="userrole">
            <option value="1"> Admin</option>
            <option value="2"> staff</option>
            <option value="3"> Customer</option>
        </select>
        <button>Change role</button>
    </form>
</body>
</html>
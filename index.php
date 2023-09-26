<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body style="margin: auto;">
    <form action="login.php" method="post">
       <div> <label>Username:</label>
        <input type="text"  name="username" placeholder="Enter Username">
        </div>
        <div>
        <label>Password:</label>
        <input type="password"  name="password" placeholder="Enter Password">
        </div>
        <button>Login</button>
        
    </form>
    <h3 style=" color: red; font-size: 20px; text-align: center;">Don't have account ? <a href="user_form.php">Sign up here</a></h3>
</body>
</html>
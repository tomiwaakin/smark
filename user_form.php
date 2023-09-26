<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user_form.css">
 </head>
 <body>
    
           <p class="login-box-msg">Create a new account</p>
      <div id="cont">
        <div>
          <form action="user.php" method="post">
            <div>
              <label>UserName</label>
              <input type="text" placeholder="Username" id="uname" name="uname" required>
            
            </div>
            <div>
              <label>Email</label>
              <input type="email" placeholder="Email" id="mail" name="mail" required>
            </div>
            <div>
             <label>Phone Number</label>
             <input type="number" placeholder="Phone Number" id="phone" name="phone" required>
           </div>
           <div>
             <label for="psw">Password</label>
    
               <input type="password" placeholder="password" id="pword" name="pword" required>
            </div>
            
            <input type="submit" value="submit" >
          </form>
      </div>

      
    </div>

     <div>
      <a href="index.php" class="text-center">Already have an account</a>
    </div>

    

    <script>

 

        
    </script>
</body>
</html>
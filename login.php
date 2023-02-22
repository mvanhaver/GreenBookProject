<?php


?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <body>
        <div class="loginbox">  <br>
        <div class ="img_container"><img src="images\pic.jpg"/>
</div>
            <h1>User Login</h1>
            <form action ="logindb.php" method="post">
                <input type = "email" name = "email" placeholder="Enter Your Email" id ="email" required>
                <input type = "password" name = "password" placeholder="Enter Your Password" id ="password" required> </br></br> 
                <button type ="submit"> Login</button></br>
                <p> New member?<a href="register.php">Sign Up</a>
            
                </form>
      
            </div>

          
        </div>
    </body>
    </head>
</html>



<?php


?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
    
    <body>
            <div class="loginbox"><br>
            <div class ="img_container"><img src="pic.jpg"/>
            </div>
            <h1>Admin Login</h1><br>
            <form action ="admindb.php" method="post">
                <p>User Name</p>
                <input type = "txt" name = "username" placeholder="Enter Your User Name" id ="username" required>
                <p>Password</p>
                <input type = "password" name = "password" placeholder="Enter Your Password" id ="password" required> </br></br> 
                <button type ="submit">Login</button></br>
               
               </form>

          
        </div>
    </body>
    </head>
</html>



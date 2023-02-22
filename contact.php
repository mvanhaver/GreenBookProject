<?php

?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>contact</title>
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    </head>
    <body>
        

        <div class ="contactbox">
            
            <h1>Contact Us</h1>
            <form action ="condb.php" method="post">
                <p> Full Name</p>
                <input type = "text" name= "fname" placeholder="Your full Name"required>
                <p> Phone Number</p>
                <input type = "text" name= "phone" placeholder="Phone Number"required>
                <p> Email</p>
                <input type = "email" name = "email" placeholder="Email"required>
                <label>Message</label>
                <input type = "text" name = "message" required>
                
                <button type ="submit"> Send</button>
                <p><a href="index.php">back</a></p>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                </form>
                
        </div>

    </body>
    
</html>

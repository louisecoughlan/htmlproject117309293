<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
        <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/hawcons/32/699966-icon-1-cloud-256.png">
        
    </head>
    
    <body>
        
        <h4 class="heading2">Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" class="lblname">
                Name
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            
            <label for="useremail" class="lblemail">
                Email address
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="userpin" class="lblpin">
                PIN
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numbers are allowed for the PIN)
            </label>
            
            <br>
            <br>
            
            <button class="btnproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="btnvalidate" onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
        
    </body>
</html>
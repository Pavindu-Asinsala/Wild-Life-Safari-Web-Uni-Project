
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>

    <link rel="stylesheet" href="../safari.lk/css/register.css">
</head>
<body>

<?php
include("head.php")
?>

    <div class="container">

    <div class="div1">
        
    </div>

    <div class="div2">
        <h1>SIGN-UP</h1>

        <form action="data.php" method="post">
            
            <div class="mains">
                <label for="firstname">First Name:</label><br>
                <input type="text" id="name" placeholder="Enter First Name" class="in" name="fname"><br>

                <label for="lastname">Last Name:</label><br>
                <input type="text" id="name" placeholder="Enter Last Name" class="in" name="lname"><br>
            
                <label for="addre">Address:</label><br>
                <textarea name="address" id="addre" cols="48" rows="4" style="border-radius: 10px; margin-bottom:15px; padding:10px;" placeholder="Enter Your Address"></textarea><br>
                
                <label for="email">Email :</label><br>
                <input type="text" id="email" placeholder="Enter Email Address" class="in" name="email"><br>

                <label for="contact">Contact :</label><br>
                <input type="number" id="contact" placeholder="Enter Phone Number" class="in" name="contact"><br>

                <label for="NIC">NIC Number :</label><br>
                <input type="text" id="NIC" placeholder="Enter Your NIC Number" class="in" name="nic"><br>
                
                <label for="password">Password:</label><br>
                <input type="password" id="password" placeholder="Enter a password" class="in" name="password"><br>
            
                <label for="confirm-password">Confirm Password:</label><br>
                <input type="password" id="confirm-password" placeholder="Re-Enter Password" class="in" name="repassword"><br>
            </div>
            
        
            <div class="checked">
                <input type="checkbox" id="terms" name="check" required>
                <label for="terms">I accept the <a href="../safari.lk/terms.php">Terms and Policies</a></label>
            </div>
        
    
        

            <center>
                <div class="btn">
                <input type="submit" value="Sign Up" class="submit" name="submit" >
                </div>
            </center>

        </form>
        <p>Already have an account? <a href="../safari.lk/login.php">Log In</a> </p>
    </div>

    
    </div>

   
    
    
    <?php
    include("footer.php");
    ?>
    
</body>
</html>
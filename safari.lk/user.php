<?php 

//session strts to get user's login email
session_start();

?>

<?php

//connect mysql database
require "confic.php";

//user login email set ti variable
$userEmail =$_SESSION['get_email']; 

//get user's data from register table
$sql = "SELECT * FROM register WHERE Email = '$userEmail'";
$result = $con->query($sql);

//get values and assign values to variables
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $firstName = $row["First_Name"];
    $lastName = $row["Last_Name"];
    $address = $row["Address"];
    $email = $row["Email"];
    $contact = $row["Contact"];
    $nic = $row["Nic"];
    $password=$row["Password"];
    $repassword=$row["Re_Password"];

    
}

$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>

    <link rel="stylesheet" href="../safari.lk/css/user.css">
</head>
<body>

<?php
include("head.php");
?>

    <div class="container">

    <div class="div1">
        
    </div>

    <div class="div2">
        <h1>User Account</h1>

        <form action="update.php" method="post">
            <label for="firstname">First Name:</label><br>
            <input type="text" id="firstname" placeholder="Enter First Name" name="firstname" required value="<?php echo $firstName; ?>"><br>

            <label for="lastname">Last Name:</label><br>
            <input type="text" id="lastname" placeholder="Enter Last Name" name="lastname" required value="<?php echo $lastName; ?>"><br>

            <label for="address">Address:</label><br>
            <textarea name="address" id="addre" cols="48" rows="4" style="border-radius: 10px; margin-bottom:15px; padding:10px; font-size:15px;" placeholder="Enter Your Address"  required><?php echo $address; ?></textarea><br>
            
            <label for="email">Email :</label><br>
            <input type="email" id="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required><br>

            <label for="Contact">Contact : </label><br>
            <input type="number" name="contact" id="Contact"  placeholder="Enter Contact Number" required value="<?php echo $contact; ?>" ><br>

            <label for="nicnum">NIC Number : </label><br>
            <input type="text" name="idnumber" id="nicnum" placeholder="Enter NIC Number" value="<?php echo $nic; ?>" required><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter a password" value="<?php echo $password; ?>" required><br>

            <label for="confirm-password">Confirm Password:</label><br>
            <input type="password" id="confirm-password" name="repassword" placeholder="Re-Enter Password" value="<?php echo $repassword; ?>" required><br>

            <center>
            <input type="submit" value="Update" class="btn" id="btn11" name="update">
            </center>
            

        </form>
    </div>

    
    </div>

    



    <?php
    include("footer.php");
    ?>
    
</script>


</body>
</html>

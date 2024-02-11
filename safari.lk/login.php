<?php 
session_start();
?>

<?php
require "confic.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION['get_email']=$email;

    // Validate and sanitize the user input (e.g., check for empty fields, sanitize email)

    $sql = "SELECT * FROM register WHERE Email = '$email' AND Password = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, redirect to the main page
        echo "<script> window.location='index.php';alert('Login successfully');</script>";
        exit();
    } else {
        $error = "Invalid email or password.";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>

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
        <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            
            <div class="mains">
                <label for="email">Email or User-Name:</label><br>
                <input type="email" id="email" placeholder="Enter E-mail or User Name" class="in" name="email"><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" placeholder="Enter a password" class="in" name="password"><br>
            
            </div>
            

            <center>
                <div class="btn">
                <input type="submit" value="LogIn" class="submit" >
                </div>
            </center>

        </form>
        <p>Don't have an account? <a href="../safari.lk/register.php">Sign Up</a> </p>
    </div>

    
    </div>
    
    
    <?php
    include("footer.php");
    ?>
    
</body>
</html>
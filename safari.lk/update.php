 
<?php

require "confic.php";

    if(isset($_REQUEST["update"])){
        $fname=$_REQUEST["firstname"];
        $lname=$_REQUEST["lastname"];
        $address=$_REQUEST["address"];
        $email=$_REQUEST["email"];
        $contact=$_REQUEST["contact"];
        $nic=$_REQUEST["idnumber"];
        $password=$_REQUEST["password"];
        $repassword=$_REQUEST["repassword"];
    }
    

    $sql="UPDATE register set First_Name = '$fname' ,Last_Name = ' $lname ',Address = '$address' ,Email = '$email',Contact = '$contact',Nic = '$nic',Password='$password',Re_Password='$repassword' where Email='$email'";

    if ($password !== $repassword) {
        echo "<script>window.location='user.php'; alert('Passwords do not match. Please re-enter.');</script>";
    } else if($con->query($sql)){
        echo "<script>window.location='user.php'; alert('Update successfully');</script>";
        exit();
    }else{
        echo "<script> alert('Error : '.$con->error);</script>";
            echo "Error : ".$con->error;
    }

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
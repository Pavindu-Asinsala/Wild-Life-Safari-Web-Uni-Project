<?php

require "confic.php";
    
        $fname=$_REQUEST["fname"];
        $lname=$_REQUEST["lname"];
        $address=$_REQUEST["address"];
        $email=$_REQUEST["email"];
        $contact=$_REQUEST["contact"];
        $nic=$_REQUEST["nic"];
        $password=$_REQUEST["password"];
        $repassword=$_REQUEST["repassword"];

        $sql="INSERT INTO register(First_Name,Last_Name,Address,Email,Contact,Nic,Password,Re_Password)VALUES('$fname','$lname','$address','$email','$contact','$nic','$password','$repassword')";
        if($con->query($sql)){
            echo "<script> window.location='register.php';alert('Inserted successfully');</script>";
            exit();
        }else{
            echo "<script> window.location='register.php';alert('Error : '.$con->error);</script>";
                echo "Error : ".$con->error;
        }

        $con->close();
        

    
?>

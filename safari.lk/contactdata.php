
<?php

require "confic.php";

    if(isset($_REQUEST['submit'])){

    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $contact=$_REQUEST["phone"];
    $sub=$_REQUEST["sub"];
    $content=$_REQUEST["content"];

    }

    $sql="INSERT INTO contact(Name,Email,Contact,sub,content)VALUES('$name','$email','$contact','$sub','$content')";
            if($con->query($sql)){
                echo "<script> window.location='contact.php';alert('Inserted successfully');</script>";
                exit();
            }else{
                echo "<script> window.location='contact.php';alert('Error : '.$con->error);</script>";
                    echo "Error : ".$con->error;
            }

            $con->close();


?>
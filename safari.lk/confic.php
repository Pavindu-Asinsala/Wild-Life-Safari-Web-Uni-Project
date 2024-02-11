<?php
$con=new mysqli("localhost","root","","safarilk");
if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

?>
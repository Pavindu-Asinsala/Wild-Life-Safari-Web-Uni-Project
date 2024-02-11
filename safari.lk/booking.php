<!--Booking Page-->
<!DOCTYPE html>
<html>
<head>
  <title>Wildlife Safari Trip Booking</title>
  <style>
    /* Adding CSS */
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
        margin-top: 130px;
      width: 520px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      margin-left: 550px;
      margin-bottom: 50px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select,
    .form-group input[type="date"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
      width: 480px;
    }

    .form-group button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
<?php
    include("head.php");
    ?>
  <div class="container">
    <h1>Book Your Wildlife Safari Trip</h1>

    <form  action="#" method="post">

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="safariType">Safari Type</label>
        <select id="safariType" name="safariType">
          <option value="">Select Safari Type</option>
          <option value="Classic Safari Adventure">Classic Safari Adventure</option>
          <option value="Family Safari Adventure">Family Safari Adventure</option>
          <option value="Luxury Safari Experience">Luxury Safari Experience</option>
        </select>
      </div>

      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="numPersons">Number of Persons</label>
        <input type="number" id="numPersons" name="numPersons" min="1" required>
      </div>

      <div class="form-group">
        <button type="submit" name="submit">Book Now</button>
      </div>

    </form>

    
  </div>
  <?php
    include("footer.php");
    ?>
  <script>
    // JavaScript code for handling form submission of user details
    document.getElementById("bookingForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form from submitting

      // Fetch form data
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var safariType = document.getElementById("safariType").value;
      var date = document.getElementById("date").value;
      var numPersons = document.getElementById("numPersons").value;

      // Validate form data (you can add more validation if needed)
      if (name === "" || email === "" || safariType === "" || date === "" || numPersons === "") {
        alert("Please fill in all fields.");
        return;
      }

      // Process the booking (you can make an AJAX request here to a server-side script)

      // Display a success message
      alert("Booking successful. Thank you!");

      // Reset the form
      document.getElementById("bookingForm").reset();
    });
  </script>


</body>

</html>

<?php

require("confic.php");

if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $type=$_REQUEST['safaritype'];
    $date=$_REQUEST['date'];
    $count=$_REQUEST['numPersons'];

    $sql="INSERT INTO booking(name,email,type,date,count)VALUES('$name','$email','$type','$date','$count')";
        if($con->query($sql)){
            echo "<script> window.location='booking.php';alert('Conrajulations!  Booking successfully!');</script>";
            exit();
        }else{
            echo "<script> window.location='booking.php';alert('Error : '.$con->error);</script>";
                echo "Error : ".$con->error;
        }

        $con->close();
}
?>
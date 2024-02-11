<!--1st package-->
<!DOCTYPE html>
<html>
<head>
  <title>Wildlife Safari Packages</title>
  <style>
    /* Adding CSS */

    .package {
        margin: 0 50px 50px 50px;
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #f4f4f4;
      border-radius: 10px;
    }

    .package h3 {
      margin-top: 0;
      color: #333;
      font-size: 24px;
      text-transform: uppercase;
    }

    .package p {
      margin-bottom: 10px;
      color: #555;
      font-size: 16px;
    }

    .package ul {
      list-style-type: disc;
      margin-left: 20px;
      color: #1583b5;
      font-size: 16px;
    }

    .package ul li {
      margin-bottom: 5px;
    }

    .package p.pricing {
      font-size: 18px;
      font-weight: bold;
      color: #009688;
    }

    .package a {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 10px;
      background-color: #009688;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 18px;
    }

    h1 {
      text-align: center;
      color: #eb8006;
      font-size: 36px;
      margin-top: 50px;
      margin-top: 130px;
      margin-bottom: 50px;
    }

  </style>
</head>

<body>

<?php
    include("head.php");
    ?>
  <h1>Yala Tour</h1>

  <div class="package">
    <h3>Classic Safari Adventure</h3>
    <p>Duration: 4 days, 3 nights</p>
    <p>Description: Immerse yourself in the heart of the wilderness with this classic safari adventure. Explore diverse ecosystems, spot a variety of wildlife, and experience the thrill of close encounters with majestic animals. This package includes guided game drives, accommodation in a luxury safari lodge, meals, and transportation.</p>
    <p>Highlights:</p>
    <ul>
      <li>Guided game drives in open safari vehicles</li>
      <li>Opportunity to see the Big Five (elephant, lion, leopard, rhinoceros, buffalo) and other wildlife species</li>
      <li>Knowledgeable and experienced safari guides</li>
      <li>Luxury accommodation in a safari lodge with modern amenities</li>
      <li>Delicious meals featuring local and international cuisine</li>
      <li>Transportation between the lodge and wildlife reserves</li>
    </ul>
    <p class="pricing">Pricing: $35.00 per person</p>
    <a href="booking.php">Book Now</a>
  </div>
  <?php
    include("footer.php");
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
    <link rel="stylesheet" type="text/css" href="../safari.lk/css/faqq.css">
</head>
<body>
<?php
    include("head.php");
    ?>
    <div class="container" id="container1">
        <div class="item1">
            <h1 id="faq-header">FAQ! NEED HELP?</h1>

        </div>
    </div>
     
    <div class="container" id="container2">
        <div class="item">

            <div id="faq-container">
                <div class="faq">
                    <h3>Q1: How do I book a wildlife safari trip?</h3>
                    <p>
                        A1: Booking a wildlife safari trip is easy. You can visit our website and fill out the booking form with your desired dates,
                        location, and any specific requirements you may have. Alternatively, you can call our customer service hotline to speak with a representative who will assist you with the booking process.
                    </p>
                </div>
            </div>

            <div id="faq-container">
                <div class="faq">
                    <h3>Q2: What should I pack for a wildlife safari trip?</h3>
                    <p>
                        A2:Packing the right items for your wildlife safari trip is important to ensure a comfortable and enjoyable experience. Some essential items to pack include:
                    </p>
                    <ol>
                        <li>Lightweight and breathable clothing in neutral colors to blend with the surroundings.</li>
                        <li>Sturdy and comfortable walking shoes or boots.</li>
                        <li>Insect repellent to protect against mosquitoes and other bugs.</li>
                        <li>Sunscreen, sunglasses, and a hat to shield yourself from the sun.</li>
                        <li>Binoculars and a camera to capture wildlife sightings.</li>
                        <li>A water bottle to stay hydrated.</li>
                        <li>Medications and first aid kit for any specific needs.</li>
                        <li>A light raincoat or poncho, as weather conditions can change quickly.</li>
                    </ol>
                </div>
            </div>

            <div id="faq-container">
                <div class="faq">
                    <h3>Q3: Are wildlife safaris safe?</h3>
                    <p>
                        A3: Wildlife safaris are generally safe, but it's important to follow safety guidelines and instructions provided by your tour guide. Here are some tips to ensure a safe safari experience:
                    </p>
                    <ol>
                        <li>Stay inside the designated safari vehicle and never attempt to approach or touch wild animals.</li>
                        <li>Listen to your guide's instructions and ask questions if you're unsure about anything.</li>
                        <li>Respect the wildlife and their natural habitat. Avoid making sudden movements or loud noises that may startle the animals.</li>
                        <li>Keep a safe distance from animals, especially predators like lions and leopards.</li>
                        <li>Follow any additional safety protocols provided by the safari operator.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
         

    <div class=" problem">
        <div class="container" id="container3">
            <div class="item">
                <h2 id="faq-header1">TELL US YOUR PROBLEM.</h2>
            </div>
        
            <div class="item">
                <form method="post" action="#">
                    <input type="text" id="questionInput" placeholder="Enter your question" name="text" required>
                    <button type="submit" name="button">Add FAQ</button>
                </form>
            </div>
         </div>
 
        <div id="faqList"></div>

        <script src="script.js"></script>
    </div>

    <?php
    include("footer.php");
    ?>
</body>
</html>

<?php

require("confic.php");

if(isset($_REQUEST['button'])){
    $faq=$_REQUEST['text'];

    $sql="INSERT INTO faq(faq)VALUES('$faq')";
        if($con->query($sql)){
            echo "<script> window.location='faq.php';alert('Question recived successfully');</script>";
            exit();
        }else{
            echo "<script> window.location='faqr.php';alert('Error : '.$con->error);</script>";
                echo "Error : ".$con->error;
        }

        $con->close();
}
?>
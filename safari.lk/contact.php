

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/e5ebd68b4d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../safari.lk/css/contact.css">
</head>
<body>

<?php
include("head.php");
?>
    <!-- <h1>Contact us</h1> -->
    <div class="main-container">
        <div class="row-contact" style="text-align: left;margin-left: -55%">
            <h1 class="contact-us">Contact Us</h1>
        </div>
        <!-- lorem -->
        <div class="row">
            .
            <div class="container lorem" style="padding-top: 3%; ">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat molestias consectetur tempora veniam cupiditate non voluptates impedit corporis velit, ipsam, blanditiis iste praesentium reprehenderit harum ipsum repellendus tenetur incidunt suscipit.
                </p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, a saepe id consequuntur vel, nemo numquam officia recusandae sed voluptatum fuga et animi impedit accusantium soluta unde quasi. Natus, deserunt?</p> 
                </div>
            
        </div>
        <!-- send messege card -->
        <div class="row">
            <section class="contact-sec sec-pad">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="contact-detail">
                        <h1 class="section-title">Contact us</h1>
              
                        <ul class="contact-ul">
                          <li><i class="fa fa-location-dot"></i> 123 Main street,Malabe,Sri Lanka</li>
              
                          <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:08510004495"><b>+94 77 2222 000</b></a>,
                            <a href="tel:08510005495"><b>+94 11 2222 000</b></a>
                          </li>
              
                          <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="wildlifesafari@gmail.com"><b> wildlifesafari@gmail.com</b></a>
                          </li>
                        </ul>
              
                        <span>
                          <a href="#" class="fb"><i class="fa-brands fa-facebook"></i></a>
                          <a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
                          <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                        </span>
                      </div>
                    </div>
              
                    <div class="col-md-6">
                      <form action="contactdata.php" class="contFrm" method="POST">
                        <div class="row">
                          <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your Name" class="inptFld" required />
                          </div>
              
                          <div class="col-sm-6">
                            <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
                          </div>
              
                          <div class="col-sm-6">
                            <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required />
                          </div>
              
                          <div class="col-sm-6">
                            <input type="text" name="sub" placeholder="Subject" class="inptFld" required />
                          </div>
              
                          <div class="col-12">
                            <textarea class="inptFld" rows="" cols="" placeholder="Your Message..." name="content" required></textarea>
                          </div>
              
                          <div class="col-12">
                            <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
              
                  <div style="text-align: center; margin-top: 20px;">
                  </div>
              
                </div>
              </section>
        </div>
        <!-- logo contact -->
        
    
    </div>
    
    <?php
    include("footer.php");
    ?>
</body>
</html>
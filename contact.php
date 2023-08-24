<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Angela's||Contact Us</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>


    <!--Homepagesection-->
    <div class="full-page">
        <!--Navigation section-->
       <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Angela's</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='app.php'>Home</a></li>
                    <li><a href='product.php'>Products</a></li>
                    <li><a href='contact.php'>Contact Us</a></li>
                    <i class="fa fa-shopping-cart" href="#" style="margin-right:20px; color:coral; cursor:pointer;"></i>
                    <li><a href="logout.php"><button>logout</button></a></li>
                </ul>
            </nav>
       </div>
       <!--End of navigation-->

       <!--Contact section-->
       <div class="contact">
            <div class="contact-us">
                <a href="https://wa.me/+254708363589">Whtasapp: 0708363589  </a>
                <div class="call">
                    <a href="#">Call Us: 0722 000 254</a>
                </div>
            </div>
            <input type="checkbox" id="toggle">
            <label for="toggle" class="show-btn">Show Modal</label>
            <div class="wrapper">
                <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
                <div class="icon"><i class="far fa-envelope"></i></div>
                <div class="content">
                   <h6>Become a Subscriber</h6>
                    <p>Subscribe to our blog and get the latest updates on discounts and offers</p>
                </div>
                <form action="contact.php" method="POST">
                    <?php
                    $userEmail =""; //We leave this field blank
                    if(isset($_POST['subscribe'])){//if subscribe button clicked
                        $userEmail = $_POST['email'];//getting user email
                        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//VALIDATING USER ENTERED EMAIL
                            $subject = "Thanks for subscribing us - Angela's Boutique";
                            $message = "Thanks for subscribing to our blog. You'll always receive updates on the latest offers and new arrival discounts.";
                            $sender = "From:webdomke@gmail.com";//This is the email which sends the message 
                            if(mail($userEmail, $subject, $sender)){
                                ?>
                                <!--Show a success message if mail sent successfully-->
                                <div class="alert success">Thanks For subscribing us.</div>
                                <?php
                                $userEmail =""; //We leave this field blank once email is sent
                            }else{
                                ?>
                                <!--Show a success message if mail can't be sent-->
                                <div class="alert error">Failed while sending Email</div>
                                <?php
                            }
                        }else{
                            ?>
                            <!--Show an error message if user email is invalid-->
                            <div class="alert error"><?php echo $userEmail ?> is not a valid Email!</div>
                            <?php
                        }
                    }
                    ?>
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
                    </div>
                    <div class="field btn">
                        <input type="submit" name="subscribe" value="Subscribe">
                    </div>
                </form>
                <div class="text">We do not share your information.</div>
            </div>
            <div class="loc">
                <h5>Our Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1846.728829925976!2d37.084169435782684!3d-1.0451945981769464!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1668344249461!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
            </div>
        </div>
        <!--End of contact section part one-->

        


    </div>



    <!--Footer section-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Angela's</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Products</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online Shop</h4>
                    <ul>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">Sunglasses</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Shoes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>   
                </div>
            </div>
        </div>
    </footer>
    <!--End of footer section-->



   
<body>
</html>
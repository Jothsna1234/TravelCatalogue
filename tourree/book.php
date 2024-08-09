<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
    
<!---header starts -->
<section  class="header">


<a href="home.php" class="logo">travel.</a>


<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
   
</nav>


<div id="menu-btn" class ="fas fa-bars"></div>


</section>
<div class="heading" style="background: url(bookback.png) no-repeat" ;>
    <h1>Book now</h1>

</div>
<section class="booking">
    <h1 class="heading-title">book your Trip!</h1>
    <form action ="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="email" placeholder="Enter Your Email" name="email">
            </div>
            <div class="inputBox">
                <span>phone number:</span>
                <input type="number" placeholder="Enter Your Number" name="phone">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="Enter Your Address" name="name">
            </div>
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date"  name="leaving">
            </div>
            

        </div>
        <input type="submit" value="submit" class="btn" name="send">


    </form>
</section>


























<!--header ends-->




<!-----footer starts---->

<section  class ="footer">
    <div class="box-container">
        <div class="box">
            <em><h3>Quick links</h3></em>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
</div>
<div class="box">
           <em> <h3>Extra Links</h3></em>
    <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>About us</a>
    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>Terms of Services</a>
</div>


<div class="box">
           <em><h3>Contact info</h3></em>
    <a href="#"><i class="fas fa-phone"></i>+124-456-7890</a>
    <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
    <a href="#"><i class="fas fa-envelope"></i>jothsnajothsna4@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Kerala,India-641606</a>
</div>

<div class="box">
    <em><h3>Follow us</h3></em>
    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
</div>


    </div>
    <div class ="credit">created by <span>Web designer</span>|all rights reserved!|</div>

</section>









<!----footer ends---->












<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="script.js"></script>
</body>
</html>
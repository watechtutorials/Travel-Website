<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Custome css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
</head>
<body>
<!-- start of header section -->

<section class="header">
 <a href="home.php" class="logo">adventure & tours</a> 
 
 <nav class="navbar">
     <a href="home.php">Home</a>
     <a href="about.php">About</a>
     <a href="package.php">Package</a>
     <a href="book.php">Book</a>
 </nav>
 <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- end of header section -->
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- Start of booking section -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- End  of booking section -->

<section class="footer">
<!-- Start of Footer Section -->
<div class="box-container">
    <div class="box">
        <h3>Quick Links</h3>
     <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
     <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
     <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
     <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
    </div>

    <div class="box">
        <h3>Extra Links</h3>
     <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
     <a href="#"><i class="fas fa-angle-right"></i> about us</a>
     <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
     <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
    </div>

    <div class="box">
        <h3>Contact Info</h3>
     <a href="#"><i class="fas fa-phone"></i> +123-333-456</a>
     <a href="#"><i class="fas fa-phone"></i> +111-666-999</a>
     <a href="#"><i class="fas fa-envelope"></i> developer@gmail.com</a>
     <a href="#"><i class="fas fa-map"></i> islamabad, Pakistan - 44400</a>
    </div>

    <div class="box">
        <h3>Follow Us</h3>
     <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
     <a href="#"><i class="fab fa-twitter"></i> twitter</a>
     <a href="#"><i class="fab fa-instagram"></i> instagram</a>
     <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
    </div>
</div>
<div class="credit">created by <span>alishah techspot</span> | all rights reserved </div>
</section>
<!-- End of Footer Section -->

<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="js/script.js"></script>
</body>
</html>
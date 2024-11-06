<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
     <link rel="stylesheet" href="styles.css">


</head>
<body>
    
<!-- header section-->
 <section class="header">

 <a href="home.php" class="logo">VistaVoyage</a>

 <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
 </nav>

 <div id="menu-btn" class="fas fa-bars"></div>
 </section>

 <div class="heading" style="background:url(images/download (1).jfif) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section  -->

<section class="booking">
   <h1 class="heading-title"> book your trip</h1>

   <form action="book_form.php" method="post" class="book-form">
      
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder= "enter your name" name="name">
         </div>
         <div class="flex">
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder= "enter your email" name="email">
         </div>
         <div class="flex">
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder= "enter your number" name="phone">
         </div>
         <div class="flex">
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder= "enter your address" name="address">
         </div>
         <div class="flex">
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder= "place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder= "number of guest" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date"  name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date"  name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
   </form>
</section>




<!-- footer section -->
 <section class="footer">
<div class="box-container">
   <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
      <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
      <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>

   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
      <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>

   </div>

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +91-9050843054 </a>
      <a href="#"> <i class="fas fa-phone"></i> +91-9050363054 </a>
      <a href="#"> <i class="fas fa-envelope"></i> harshjangid33815@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> chandigarh, india </a>

   </div>
   <div class="box">
      <h3>follow us </h3>
      <a href="#"><i class="fab fa-facebook"> </i>facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> twitter</a>
      <a href="#"><i class="fab fa-instagram"></i>instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
</div>

<div class="credit"> created by <span>Mr. Harsh </span>| all right reserved!</div>



 </section>







<!-- javascript file link  -->
 <script src="script.js"></script>

</body>
</html>
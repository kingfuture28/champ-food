<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>
         Our vision is to make real food the new standard in fast food. We empower fast food with the opportunity to help individuals and communities live happier lives by providing nourishing, delicious food in a convenient and affordable format--all while running a profitable business.We have perfected our processes to make scratch cooking fast, repeatable and profitable. Our menu’s “fresh from the market” vibe leans into plant-based goodness while our sustainable protein program is one of the best in the industry, enabling our franchise partners to serve up happiness for everyone!
         </p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>
            Most of the restaurants dont have minimium order requirement but you need to speak with confidence restaurant
            if they follow any such policy.
         </p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>
             The delivery service of many restaurants depends the order quantity and distance. It is better to contact Confidence restaurants
             to check if the free delivery option is available or not.
         </p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>
            Take your time, relax, enjoy and i will be right back to check and see if you need anything or another drink.
            A food serve should be constantly checking ,constantly working, hustling to do everything they can tp in crease their tips.
         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>
                If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu,
                banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>
                 If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu, 
                banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>
                 If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu, 
                 banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>
                  If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu,
                  banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>
                 If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu,
                 banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>
               If you’re looking for hearty home cooking Ghanaian-style, this is a reasonable bet. The staff were 'relaxed' on our last visit, but the food is freshly cooked – fufu, 
               banku and jollof rice all come with a choice of chicken, beef, mutton or fish. The palava sauce dishes are our favourite
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MBA</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
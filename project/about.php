<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> At our online book store, we're passionate about connecting you with the written word in the most convenient and delightful way possible. Here's why you should choose us:<br/>

            1. Vast Selection: With an extensive collection of books spanning various genres, from bestsellers to niche subjects, we have something for every reader. Explore new horizons or find old favorites—we've got you covered.<br/>

            2. Easy Browsing: Our user-friendly website offers intuitive navigation, making it a breeze to discover your next literary adventure. Filter by author, genre, or even recommendations, and let the journey begin.<br/>

            3. Exceptional Service: We prioritize your satisfaction above all else. Our dedicated support team is here to assist you, whether it's answering queries, tracking orders, or providing personalized recommendations. Your happiness is our utmost priority.<br/>

            4. Competitive Prices: We believe that books should be accessible to all. That's why we offer competitive prices, discounts, and special promotions, ensuring that you get the best value for your money.<br/>

            5. Seamless Experience: From the moment you place an order to the swift delivery at your doorstep, we strive to provide a seamless shopping experience. Enjoy hassle-free transactions and timely delivery, leaving you with more time to dive into your new literary treasures.<br/>

            Choosing us means choosing a trusted companion on your reading journey, a reliable source for quality books, and a community of book lovers who share your passion. Experience the joy of reading with us today! </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I absolutely love shopping at this online book store! The website is user-friendly, making it easy to browse and find the books I'm interested in. The selection is fantastic, with a wide range of genres and titles to choose from. The prices are competitive, and the shipping is always fast and reliable. I've been a loyal customer for years and have never been disappointed!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Max Muller</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I am absolutely thrilled with my experience shopping at this online bookstore. The selection is vast, with a wide range of genres and authors to choose from. The website is user-friendly, making it easy to navigate and find exactly what I was looking for. The prices are competitive, and the shipping was incredibly fast. I received my books in pristine condition, and the customer service was excellent. I highly recommend this online bookstore to all book lovers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sofia Kumer</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p> I stumbled upon this online bookstore while searching for a specific book, and I'm so glad I did! This website offers an incredible selection of both popular titles and lesser-known gems. The prices are unbeatable, often lower than other online retailers. The checkout process was simple, and my order arrived sooner than expected. The customer support team was helpful and responded promptly to my queries. I'm thrilled to have discovered this hidden gem and will be recommending it to my fellow bookworms.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Frank Castel</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>This online bookstore has truly impressed me with their prompt and efficient service. I placed an order for a couple of books, and within a few days, they were delivered to my doorstep. The packaging was secure, ensuring the books arrived in perfect condition. The website is well-organized, allowing me to find my desired titles quickly. The prices are reasonable, and the overall shopping experience was smooth. I will definitely be a returning customer!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elena Morse</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>As an avid reader, I prefer eBooks for their convenience, and this online bookstore has an impressive collection. The website has a sleek design and offers a seamless reading experience. The prices for eBooks are extremely competitive, and the purchasing process was a breeze. I appreciate the fact that they support multiple e-reader formats, making it easy to download and enjoy my purchases on my preferred device. I've found several great reads on this platform and will continue to explore their extensive eBook library.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luke Cage</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I had an issue with my order from this online bookstore, and I must say that their customer support team was outstanding. They responded to my email promptly and resolved the problem in a professional and friendly manner. It's refreshing to encounter a company that values its customers and goes the extra mile to ensure satisfaction. The quality of their service has made me a loyal customer, and I'll be sure to recommend them to my friends and family.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jade Kush</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/stephenking.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/stephenkingwriter/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/StephenKing" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/todostephenking/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/stephen-king-a393a3188" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/jkrowling.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/JKRowling" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/jk_rowling" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/robertgalbraith/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/jk-rowling-co" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/chetanbhagat.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/chetanbhagat.fanpage" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/chetan_bhagat?lang=en" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/chetanbhagat/?hl=en" class="fab fa-instagram"></a>
            <a href="https://in.linkedin.com/in/chetan-bhagat-9b0b34247?trk=people-guest_people_search-card" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/elifshafak.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/Elif.Shafak/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/Elif_Safak?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/shafakelif/?hl=en" class="fab fa-instagram"></a>
            <a href="https://uk.linkedin.com/in/elif-shafak-9b5089a2?original_referer=https%3A%2F%2Fwww.google.com%2F" class="fab fa-linkedin"></a>
         </div>
         <h3>Elif Shafak</h3>
      </div>

      <div class="box">
         <img src="images/jerryjenkins.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/jerry.b.jenkins/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/JerryBJenkins" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/jerrybjenkins/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/pulse/check-out-writing-tips-from-jerry-b-jenkins-reals" class="fab fa-linkedin"></a>
         </div>
         <h3>Jerry Jenkins</h3>
      </div>

      <div class="box">
         <img src="images/jhumpalahiri.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/JhumpaLahiriAuthor/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/hashtag/jhumpalahiri?src=hashtag_click&f=live" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/lahiri_jhumpa/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/pulse/other-words-jhumpa-lahiri-manya-jain" class="fab fa-linkedin"></a>
         </div>
         <h3>Jhumpa Lahiri</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
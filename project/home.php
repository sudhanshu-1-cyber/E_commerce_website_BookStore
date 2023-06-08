<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>Discover a world of captivating stories, knowledge, and imagination at our online book store. From thrilling adventures to 
         heartwarming tales, our carefully curated collection offers something for every reader. Dive into a universe of words and let 
         your mind soar with the turn of every page. Find your next great read today!</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Welcome to our Online Bookstore! At our Online Bookstore, we are passionate about connecting readers with the vast world of 
            literature. We believe that books have the power to inspire, educate, entertain, and transform lives. With an extensive 
            collection of titles across various genres, we strive to be your ultimate destination for all your reading needs. Our website
            is designed to provide you with a seamless and user-friendly experience. Whether you are a seasoned bookworm or just 
            starting your reading journey, we have something for everyone. From bestselling novels to non-fiction masterpieces, from 
            classic literature to contemporary works, our diverse range of books ensures that there is always a captivating read 
            waiting for you. Discovering new books and authors is one of the most exciting aspects of reading, and we are dedicated to 
            helping you explore the literary landscape. Our platform features curated book recommendations, author interviews, and 
            insightful reviews to help you make informed choices. We understand that personal taste varies, which is why we aim to 
            offer a wide selection that caters to different interests and preferences. In addition to our extensive book collection, 
            we also provide various formats to suit your reading preferences. Whether you prefer the traditional feel of a physical book, 
            the convenience of an e-book, or the versatility of an audiobook, we have you covered. Our goal is to ensure that you can 
            enjoy your favorite stories and gain knowledge in the format that suits you best. We take pride in delivering exceptional 
            customer service. Our team is always ready to assist you with any inquiries, recommend books based on your interests, or 
            provide support with your orders. Your satisfaction is our top priority, and we strive to create a pleasant and hassle-free 
            shopping experience for you. Furthermore, our Online Bookstore values the importance of fostering a reading community. We 
            regularly organize virtual book clubs, author events, and literary discussions to engage with fellow book lovers. We 
            believe in the power of sharing ideas, exchanging perspectives, and creating meaningful connections through the written 
            word. Thank you for visiting our Online Bookstore. We invite you to immerse yourself in the world of literature and embark 
            on a journey of imagination, knowledge, and discovery. Start browsing our vast collection and let the pages come alive 
            with stories that will captivate your mind and touch your heart. Happy reading!
         </p>
         <a href="about.php" class="btn">read more</a>
      </div>
   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>
         We're here to help!<br/>1. **How to place an order?**<br/>Browse, select, and proceed to checkout. <br/>2. **Accepted payment 
         methods?**<br/>Credit/debit cards, PayPal, and more.<br/>3. **Delivery time?**<br/>Varies by location and shipping method.<br/>4. 
         **Damaged or incorrect book?**<br/>Contact us for assistance.<br/>5. **Can I cancel/modify my order?**<br/>Contact us ASAP for 
         possible changes.<br/>6. **International shipping available?**<br/>Yes, with additional fees and customs duties.<br/>7. **Return 
         policy?**<br/>30-day return period. See details on our website.<br/>For further assistance, reach out to our support team. 
         Enjoy your reading experience!
      </p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>
</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
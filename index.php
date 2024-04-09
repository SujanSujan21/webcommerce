<?php
  include 'includes/connection.php';
  if(isset($_POST['add_to_cart'])){
    $products_title=$_POST['product_title'];
    $products_price=$_POST['product_price'];
    $products_image1=$_POST['product_image1'];
    $product_quantity=1;
      
    //Select cart Data based on condition
    $select_cart=mysqli_query($con,"Select * from `cart` where name='$products_title' ");
    if(mysqli_num_rows($select_cart)>0){
      $display_message="Product already added to cart";
    }else{
      //Insert Cart Data into Cart Table
      $insert_products=mysqli_query($con, "insert into `cart` (name,price,image,quantity) values('$products_title',
                                  '$products_price','$products_image1',$product_quantity)");
     $display_message="Product  added to cart";
  
  }
    }
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet-A-Rap</title>
  <meta name="title" content="Pet-A-Rap - Hight Quality Pet Food">
  <meta name="description" content="This is an eCommerce Website made by Sujan">

  <!-- favicon -->
  <link rel="shortcut icon" href="./favv.png" type="image/svg+xml">

  <!-- custom css link-->
  <link rel="stylesheet" href="./assets/css/style.css">
 

  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"rel="stylesheet">


</head>

<body id="top">
<header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn"  data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo"><img src="assets/images/tete.png" alt=""></a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="navbar-item">
            <a href="#hii" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>
      
    
       <a href="includes/login.php"> <button type="button" class="btn btn-primary btn-lg">Log in</button></a>

      <div class="header-actions">


        <!-- Cart Icon -->
        <?php 
      $select_product=mysqli_query($con,"Select * from `cart`") or die('query failed');
      $row_count=mysqli_num_rows($select_product);
      ?>
        <a href="cart.php">  <button class="action-btn" aria-label="cart" >
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge"><?php
          echo $row_count ?> </span>
          
        </button></a>
       

      </div>

    </div>
  </header>

  <main>
    <article>

      <!--  #HERO-->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/pexe.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">Doggy Dreams</span>Come True
          </h1>

          <p class="hero-text">Treat Your Dog, Save More</p>

          <a href="#shop" class="btn">Shop Now</a>

        </div>
      </section>

      <!--  #CATEGORY-->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Top</span> categories
          </h2>

          <ul class="has-scrollbar">

            

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/ima.jpg" width="330" height="300" loading="lazy" alt="Dog Food"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a  href="#" class="card-title">Dog Food </a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300; margin-left: 190px;">
                  <img src="./assets/images/ime.jpg" width="330" height="300" loading="lazy" alt="Dog Toys"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a style="margin-left: 180px" href="#" class="card-title">Dog Toys</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;margin-left: 200px;">
                  <img src="./assets/images/nal.jpg" width="330" height="300" loading="lazy"
                    alt="Dog Sumpplements" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a style="margin-left: 210px" href="#" class="card-title">Dog Sumpplements</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- #OFFERS-->

      <section class="section offer" aria-label="offer">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/bn1.jpg'); --width: 540; --height: 374;">

               <!-- <p class="card-subtitle">Selected Items. Online Only.</p> -->

                <h3 class="h3 card-title">
                  Playful<span class="span">Pup Love</span>
                </h3>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/offer-banner-2.jpg'); --width: 540; --height: 374;">

                

                <h3 class="h3 card-title">
                  Care your <span class="span">Pets</span>
                </h3>
              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('./assets/images/offer-banner-3.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle"></p>

                <h3 class="h3 card-title">
                  Loyal<span class="span">Canine Duo</span>
                </h3>
              </div>
            </li>

          </ul>

        </div>
      </section>


      <!--  #PRODUCT-->
      

      <section class="section product" id="shop" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Best</span> Seller
          </h2>
          <?php 
              if(isset($display_message)){
                echo "<span>$display_message</span> ";
              }
          
          ?>
          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-1.0.jpg" width="360" height="360" loading="lazy"
                    alt="Pedigree Pro Adult Small Breed" class="img-cover default">
                  <img src="./assets/images/prod-1.jpg" width="360" height="360" loading="lazy"
                    alt="Pedigree Pro Adult Small Breed" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Pedigree Pro Adult Small Breed, Dry Dog Food (9 Months Onwards) </a>
                  </h3>
                  
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='1'");
                 
                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="15">Rs.189.00</data> <br><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-2.jpg" width="360" height="360" loading="lazy"
                    alt="Drools Focus Puppy Super Premium Dry Dog Food" class="img-cover default" >
                  <img src="./assets/images/prod-2.0.jpg" width="360" height="360" loading="lazy"
                    alt="Drools Focus Puppy Super Premium Dry Dog Food" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Drools Focus Puppy Super Premium Dry Dog Food, Chicken Flavor, 4Kg</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='2' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="45">Rs.1692.00</data><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-3.jpg" width="360" height="360" loading="lazy"
                    alt="Meat Up Chicken Flavour Real Chicken Biscuit" class="img-cover default">
                  <img src="./assets/images/prod-3.0.jpg" width="360" height="360" loading="lazy"
                    alt="Meat Up Chicken Flavour Real Chicken Biscuit" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Meat Up Chicken Flavour Real Chicken Biscuit 1kg (Buy 1 Get 1 Free ), Total 2kg</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='3' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="45">Rs.375.00</data><br>
                    <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-4.0.jpg" width="360" height="360" loading="lazy"
                    alt="Himalaya Healthy Pet Chunk Dog Food" class="img-cover default">
                  <img src="./assets/images/prod-4.jpg" width="360" height="360" loading="lazy"
                    alt="Himalaya Healthy Pet Chunk Dog Food" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Himalaya Healthy Pet Chunk Dog Food - Adult, Chicken Flavour, Medium, 1.2 Kg</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='4' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="49">Rs.327.00</data><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-5.jpg" width="360" height="360" loading="lazy"
                    alt="Foodie Puppies Interactive Ball" class="img-cover default">
                  <img src="./assets/images/prod-5.0.jpg" width="360" height="360" loading="lazy"
                    alt="Foodie Puppies Interactive Ball" class="img-cover hover">

                </div>

                <div class="card-content">


                  <h3 class="h3">
                    <a href="#" class="card-title">Foodie Puppies Interactive Non-Toxic Soft Latex Chew Squeaky Rugby Ball for Dogs and Puppies (Large) | Chewing, Floating, Training, and Bouncing |</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='5' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="85">Rs. 525.00</data><br><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-6.jpg" width="360" height="360" loading="lazy"
                    alt="Non Toxic Rubber Spiked Ball" class="img-cover default">
                  <img src="./assets/images/prod-6.0.jpg" width="360" height="360" loading="lazy"
                    alt="Non Toxic Rubber Spiked Ball" class="img-cover hover">

                </div>

                <div class="card-content">


                  <h3 class="h3">
                    <a href="#" class="card-title"> Non Toxic Rubber Spiked Ball | Chew Toy for Dogs, Puppies, Pets | Hard and Durable Teething Toy</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='6' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="85">Rs.250.45</data><br><br><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-7.jpg" width="360" height="360" loading="lazy"
                    alt="Petroyale Furpro-40 | Protein Powder for Dogs" class="img-cover default">
                  <img src="./assets/images/prod-7.0.jpg" width="360" height="360" loading="lazy"
                    alt="Petroyale Furpro-40 | Protein Powder for Dogs" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Petroyale Furpro-40 | Protein Powder for Dogs | Shedding Control for Pets |
                       Skin & Coat Care | Pet Supplement - 1kg</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='7' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="85">Rs. 1200.60</data><br><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/prod-8.jpg" width="360" height="360" loading="lazy"
                    alt="Drools Absolute Skin + Coat Tablet" class="img-cover default">
                  <img src="./assets/images/prod-8.0.jpg" width="360" height="360" loading="lazy"
                    alt="Drools Absolute Skin + Coat Tablet" class="img-cover hover">

                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Drools Absolute Skin + Coat Tablet- Dog Supplement, 50 Pieces</a>
                  </h3>
                  <?php 
                  $select_products=mysqli_query($con,"Select * from `products` WHERE product_id='8' ");

                   if($fetch_product=mysqli_fetch_assoc($select_products)){
                      
                     
                  ?>
                  <form method="post" action="">
                  <data class="card-price" value="55">Rs. 386.80</data><br><br><br>
                  <input type="hidden"name="product_title" value="<?php echo $fetch_product['product_title'] ?>">
                  <input type="hidden" name="product_price"value="<?php echo $fetch_product['product_price'] ?>">
                  <input type="hidden"name="product_image1"value="<?php echo $fetch_product['product_image1'] ?>">
                  <input type="submit" class="submit_btn cart_btn" value="Add to Cart"name="add_to_cart">

                </div>
                </form>
                <?php 
                   }
                  
                  ?>
              </div>
            </li>

          </ul>

        </div>

        
      </section>

      <!--#SERVICE -->

      <section class="section service" aria-label="service">
        <div class="container">

          <img src="./assets/images/service-image.png" width="122" height="136" loading="lazy" alt="" class="img">

          <h2 class="h2 section-title">
            <span class="span">Treat Your Dog:</span> Delicious Delights for Happy Tails !!
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-1.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Free Same-Day Delivery</h3>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-2.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">30 Day Return</h3>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-3.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">Security payment</h3>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./assets/images/service-icon-4.png" width="70" height="70" loading="lazy"
                    alt="service icon">
                </figure>

                <h3 class="h3 card-title">24/7 Support</h3>
              </div>
            </li>

          </ul>

        </div>
      </section>
      <br>
      <br>
      <br>


      <!--  #CTA-->

      <section class="cta has-bg-image" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="900" height="660" loading="lazy" alt="cat" class="w-100">
          </figure>

          <div class="cta-content">

            <img src="./assets/images/cta-icon.png" width="120" height="35" loading="lazy" alt="taste guarantee"
              class="img">

            <h2 class="h2 section-title">Taste it, love it or we’ll replace it… Guaranteed!</h2>

            <p class="section-text">
              At Pet-A-Rap, we believe your dog will love their food so much that if they don’t … we’ll help you
              find a  replacement with some blogs and tips. <br>
            </p>

            <a href="#" class="btn">Find out more</a>

          </div>

        </div>
      </section>

      <!-- #BRAND -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Our</span> Brands
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 100;">
                <img src="./assets/images/brand-12.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-2.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 100;">
                <img src="./assets/images/brand-3.0.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-4.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
                <img src="./assets/images/brand-5.jpg" width="150" height="150" loading="lazy" alt="brand logo"
                  class="img-cover">
              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>


  <!-- #FOOTER -->
<section id="hii">
  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Pet-A-Rap</a>

          <p class="footer-text">
            If you have any question, please contact us at <a href="mailto:sujan252567@gmail.com"
              class="link">sujan252567@gmail.com</a>
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="address">
                 Plot 12 A, Senthil Nagar, Palayamkottai, Tirunelveli
              </address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">(+91) 6382257901</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="https://x.com/JD_Sujan?t=ING5SWjkC4k1FND8qJzRuA&s=09" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.linkedin.com/in/sujan07?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-link">
                <ion-icon name="logo-linkedIn"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/sujan__.m?igsh=N2RoNDBsbmN2Nm83" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 Made by <a href="#" class="copyright-link">Sujan.</a>
        </p>

        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>
</section>

  </footer>
  <!--  #BACK TO TOP -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- custom js link-->
  <script src="./assets/js/script.js" defer></script>

  <!-- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
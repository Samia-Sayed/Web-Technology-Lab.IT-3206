<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="prac_style.css">
    <title>Website</title>
</head>
<body>
  

    <header>
            <!--<div class="logo">
                <img src="image/logos.JPG" alt="">
            </div>-->
            <nav class="nav">
                <div class="logo"><img src="logo-modified.png" alt="" width="40px"></div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Our Service</a></li>
                    <li><a href="#pg">Photo Gallery</a></li>
                    <li><a href="#join">Contact</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="review.html">Reviews</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
    </header>
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
    <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Welcome to <strong>MediCare</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">A place for serving the people</p></br>
            <p class="section_form">Please <a href="form.php" style="color:red">CLICK HERE</a> to donate medicine.</p></br>
            <!--<img src="image/logo-modified.png" alt="a logo" class="intro__img">-->
    </section>


    <!-- About us -->
    <section class="about-us" id="about">
           <h2 class="section__title section__title--about">About Us</h2>
           <!--<p class="section__subtitle section__subtitle--about"></p>-->
           
           <div class="about-me__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           </div>
           
           <img src="sa.jpg" alt="" class="about-us__img">
    </section>



    <section class="our-services" id="services">
            <h2 class="section__title section__title--services">Our Services</h2>
            <div class="services">
                <div class="service">
                    <h3>Medicine Collection</h3>
                    <p>People or NGOs can donate medicine by using our website. They can fill up a form. The rest of the things will be done by us.</p>
                </div> <!-- / service -->
                
                <div class="service">
                    <h3>Medicine Donation</h3>
                    <p>After getting any request we will go their address and receive the medicine. They can come to our address as well and then we will directly receive their product in hand in our office.</p>
                </div> <!-- / service -->
                
                <div class="service">
                    <h3>Maintaining repository</h3>
                    <p>We maintain our website status according to the warehouse information. We always update our website and also take care of our received products in our store house according to specific medicine's requirements.</p>
                </div> <!-- / service -->
            </div> <!-- / services -->
    </section>

<!-- Photo Gallery -->
<section class="photo-gallery" id="pg">
            <h2 class="section__title section__title--gallery">Photo Gallery</h2>
            <p class="section__subtitle"></p>
            
            <div class="photo">
                <!-- photo item 01 -->
                <a href="#" class="photo__item">
                    <img src="image/Banner 2.jpg" alt="" class="photo__img">
                </a>
                
                <!-- photo item 02 -->
                <a href="image/Banner.jpg" class="photo__item">
                    <img src="image/Banner.jpg" alt="" class="photo__img">
                </a>
                
                <!--photo item 03 -->
                <a href="Charity.jpg" class="photo__item">
                    <img src="image/Charity.jpg" alt="" class="photo__img">
                </a>
                
                <!-- photo item 04 -->
                <a href="#" class="photo__item">
                    <img src="image/Instrument.jpg" alt="" class="photo__img">
                </a>
                
                <!-- photo item 05 -->
                <a href="#" class="photo__item">
                    <img src="image/Medicine 2.jpg" alt="" class="photo__img">
                </a>
                
                <!-- photo item 06 -->
                <a href="#" class="photo__item">
                    <img src="image/Medicine 3.jpg" alt="" class="photo__img">
                </a>
                
               <!-- photo item 07 -->
                <a href="#" class="photo__item">
                    <img src="image/Medicine.jpg" alt="" class="photo__img">
                </a>
                
                <!-- photo item 08 -->
                <a href="#" class="photo__item">
                    <img src="image/Treatment.jpg" alt="" class="photo__img">
                </a>
                
                
            </div>
        </section>
        
        
        <!-- Footer -->
        <footer>
            <!-- replace with your own email address -->
            <!--<a href="mailto:servicesm618@gmail.com" class="footer__link">servicesm618@gmail.com</a>-->
            <p class="footer__link" id="join">Contact Us</p>
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.facebook.com/MediCare-Services-103537492294372">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://api.whatsapp.com/send?phone=+8801817648233">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="mailto:servicesm618@gmail.com">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
                
            </ul>
        </footer>



<!--<script src="index.js"></script>-->
<script src="jscript_nav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
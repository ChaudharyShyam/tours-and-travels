<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Satisfy&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
  <title> Go trip</title>
</head>

<body>
  <div id="preloader"></div>

  <body>

    <!--===========Nav Bar=================-->
    <section class="nav-bar">
      <div class="logo">Radhekrishna tours and travels</div>
      <ul class="menu">
        <li><a href="#">home</a></li>
        <li><a href="gallary.php">gallery</a></li>
        <li><a href="#">package</a></li>
        <li><a href="#">blog</a></li>
        <li><a href="about.php">about us</a></li>
        <li><a href="#">contact us</a></li>


      </ul>
      <div><button class="btnLogin-popup" id="login">Login</button></div>
      </div>
    </section>

    </section>

    <div id="loginForm" class="form-popup">
      <form class="form-container" action="login.php" method="post">
        <h2>Login</h2>
          <input type="email" placeholder="Email" class="email" name="Email" required><br>
          <input type="password" placeholder="Password" class="pass" name="Password" required><br>
        <button id="loginButton" type="submit" class="submit-button">Log In</button>
        <p>Dont't Have An Account ?<button type="button" class="register"
            onclick="openForm('registerForm'); closeForm('loginForm')">Register</button></p>
        <button type="button" class="close-button" onclick="closeForm('loginForm')">Close</button>

      </form>
    </div>

    <div id="registerForm" class="form-popup">
      <form class="form-container" action="registration.php" method="post">
      <h2>Register</h2>
      
        <div>
          <input type="text" placeholder="Full Name" class="name" name="Name" required><br>
          <input type="text" placeholder="Address" class="address"name="Address" required><br>
          <input type="text" placeholder="Phone No." class="Phoneno" name="Phoneno" pattern="[0-9]{10}" required><br>
          <input type="email" placeholder="Email" class="email" name="Email" required><br>
          <input type="password" placeholder="Password" class="pass" name="Password" required><br>
          
        </div>
        <input type="submit" class="registerButton" name="registerButton" value="Register">
        <button type="button" class="close-button" onclick="closeForm('registerForm')">Close</button>

  
      </form>
    </div>


    <!--===============Banner================-->
    
    <div class="slider-container">
      <div class="title" style="margin-top: 14%; position: absolute; z-index: 2; font-weight: bolder; font-size: 60px; margin-left: 21%; color: white;">Keep In Touch</div>
      <div class="title1" style="margin-top: 18%; position: absolute; z-index: 2; font-weight: bolder; font-size: 120px; margin-left: 20%; color: white;" > Travel With Us !</div>
        <div class="slider" >
            <img class="slider-image active" src="image/slider1.png.jpg" alt="Slider Image 1">
            <img class="slider-image" src="image/slider2.png.jpg" alt="Slider Image 2">
            <img class="slider-image" src="image/slider3.png.jpg" alt="Slider Image 3">
            <img class="slider-image" src="image/slider4.png.jpg" alt="Slider Image 4">
            <img class="slider-image" src="image/slider5.png.jpg" alt="Slider Image 5">
        </div>
    </div>
 
    </section>

    <!--=========Services===============-->
    <section class="services">
      <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png">
        <h2>8000+ Our Local Guides</h2>
      </div>
      <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png">
        <h2>100% Trusted Tour Agency</h2>
      </div>
      <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png">
        <h2>28+ Years of Travel Experience</h2>
      </div>
      <div class="service-item">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png">
        <h2>98% Our Travelers are Happy</h2>
      </div>
    </section>
    <!--==============Places===================-->
    <section class="discover__container">
      <div class="discover__item discover__img-1">
        <h4>Discover Cities</h4>
        <a href="" class="discover__btn-1">DETAILS</a>
      </div>

      <div class="discover__item discover__img-2">
        <h4>Discover Nature</h4>
        <a href="" class="discover__btn-2">DETAILS</a>
      </div>
    </section>
    <!--===========About Us===============-->
    <section class="about">
      <div class="about-img">
        <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293719/outdoor_tjjhxk.jpg">
      </div>
      <div class="about-text">
        <h2>Welcome To Radhekrishna tours and travels</h2>
        <p>Radhekrishna travels Support Company is dedicated to providing exceptional travel assistance. We specialize in making your journeys seamless and memorable, offering tailored solutions to meet your unique needs. Travel with confidence, knowing we're your reliable partner.</p>
        <label><input type="checkbox" checked>Dedication to Travelers</label>
        <label><input type="checkbox" checked>Tailored Solutions</label>
        <label><input type="checkbox" checked>Seamless Experiences</label>
        <label><input type="checkbox" checked>Trustworthy Partner</label>
        <a href="about.php">ABOUT US</a>
      </div>
    </section>

    <!--===========Footer=================-->
    <div class="footer">
      <div class="links">
        <h3>Quick Links</h3>
        <ul>
          <li>Offers & Discounts</li>
          <li>Get Coupon</li>
          <li>Contact Us</li>
          <li>About</li>
        </ul>
      </div>
      <div class="links">
        <h3>New Products</h3>
        <ul>
          <li>Woman Cloth</li>
          <li>Fashion Accessories</li>
          <li>Man Accessories</li>
          <li>Rubber made Toys</li>
        </ul>
      </div>
      <div class="links">
        <h3>Support</h3>
        <ul>
          <li>Frequently Asked Questions</li>
          <li>Report a Payment Issue</li>
          <li>Terms & Conditions</li>
          <li>Privacy Policy</li>
        </ul>
      </div>
    </div>
  </body>

</html>
<script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load",function(){
    loader.style.display = "none";
  })
</script>


</body>

</html>
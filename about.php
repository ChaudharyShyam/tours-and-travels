<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');


/*====nav- bar====*/
.nav-bar {
  display: flex;
  flex-flow: row wrap;
  width: 102%;
  height: 90px;
  background-color:yellow;
  box-shadow: 3px 3px 10px lightslategray;
  align-items: center;
  margin-left:-2%;

  position:fixed;
  top: 0;
  z-index: 6;
}

.logo {
  flex: 1;
  font-size: 40px;
  padding: 20px;
  margin-left: 50px;
  font-family: Satisfy;
}

ul.menu {
  flex: 1;
  display: flex;
  flex-flow: row wrap;
}

.menu li {
  flex: 1;
  list-style-type: none;
  font-size: 16px;
  font-family: "Barlow Condensed";
  text-align: center;
}

.menu li a {
  text-decoration: none;
  color: #000;
  text-transform: uppercase;
}

.menu li a:hover {
  color: midnightblue;
  text-decoration: underline;
}

/*====*/
  

  .title-box {
    position: absolute;
    margin-top: 80px;
    padding-top: 0.001px;
    padding-bottom: 0.001px;
    padding-left: 300px;
    padding-right: 300px;
    left: 0;
    transform: translateY(-50%);
    background-color: #cc5f3d;
    color: white;
    border-top-right-radius: 40px;
    border-bottom-right-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    animation: slideInLeft 1s forwards;
  }

  
  @keyframes slideInLeft {
    0% {
      transform: translateY(-50%) translateX(-100%);
      opacity: 0;
    }
    100% {
      transform: translateY(-50%) translateX(0);
      opacity: 1;
    }
  }

  .title-box2 {
  position: absolute;
  margin-top: 90px;
  padding-top: 0.001px;
  padding-bottom: 0.001px;
  padding-left: 220px;
  padding-right: 220px;
  right: 0; 
  transform: translateY(-50%);
  background-color: #dbb134;
  color: white;
  border-top-left-radius: 40px; 
  border-bottom-left-radius: 40px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  animation: slideInRight 1s forwards;
}

@keyframes slideInRight {
  0% {
    transform: translateY(-50%) translateX(100%); 
    opacity: 0;
  }
  100% {
    transform: translateY(-50%) translateX(0);
    opacity: 1;
  }
}


  .container {
  width: 700px; 
  height: 300px; 
  background-color: transparent;
  border: none;
  padding: 20px;
  text-align: justify;
  margin-top: 7.5%;
  animation: fadeIn 5s;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}



.content {
  font-family: 'Courgette', cursive;
  font-size: 20px;
  line-height: 1.5;
  color: #333;
}

.container2 {
  float: left;
  width: 50%; 
  height: 300px; 
  background-color: transparent;
  border: none;
  padding: 20px;
  text-align: justify;
  margin-top: 7.5%;
  animation: fadeIn 5s;
}

.content2 {
  font-family: 'Courgette', cursive;
  font-size: 20px;
  width: 90%;
  line-height: 1.5;
  color: #333;
  margin-left: 105%;
  margin-top: 2%;
  float: left;

}


.awards {
  display: flex;
  flex-wrap: wrap;
  gap: 25px; 
}

.award {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  font-family: 'Sedgwick Ave Display', cursive; 
}

.award img {
  width: 50px; 
  height: auto;
  margin-right: 10px;
}

.team{
  position: relative;
  justify-content: center;
  font-size: 47px;
  font-family: 'Dancing Script', cursive;
  text-align: center;
  margin-top: 20%;
}

.circle {
    position: relative;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  .outer-circle {
    width: 225px;
    height: 225px;
    background: rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 2px rgba(77, 77, 77, 0.46);
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    border: 1px solid #fff;
  }
  .inner-circle {
    width: 205px;
    height: 205px;
    border: 3px solid #fff;
    box-shadow: 0px 0px 1px 2px #dddada inset;
    z-index: 1;
    overflow: hidden;
  }
  .inner-circle img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
  }
  .sq {
    position: absolute;
    width: 50%;
    height: 120%;
    max-height: 0;
    background: rgb(242, 92, 5);
  }
  .outer-circle:hover .sq {
    max-height: 130%;
  }

  .circle-3 .sq-1 {
    top: -5%;
    right: 0;
    transition: max-height 0.4s linear;
  }
  .circle-3 .sq-2 {
    bottom: -5%;
    left: 0;
    transition: max-height 0.4s linear;
  }

  

  .founder {
    display: flex;
    flex-direction: column;
    display: inline-block;
    margin: 50px;
    justify-content: center;
    align-items: center; 
    margin-top: 4%;
  }

  .staff{
    margin-top: -3%;
  }

  .icon-container {
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: serif;
  }
  
  .line {
    width: 50%;
    height: 2px;
    background-color: black; 
    font-weight: bolder;
    margin: 0 auto;
  }
  
  .bottom{
    margin-top: 5%;
    justify-content: center;
    text-align: center;
    font-size: 40px;
    font-family: 'Dancing Script', cursive;
  }

  .footer {
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: black;
    padding: 20px 0;
    text-align: center;
    font-size: 20px;
    margin-top: 5%;
    color: white;
  }
 
</style>

<script>



document.addEventListener('DOMContentLoaded', function () {
        const url = new URL(window.location.href);
        const targetSection = url.hash.substr(2); 

        if (targetSection) {
            const targetElement = document.getElementById(targetSection);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });


</script>
</head>
<body>
 

<section class="nav-bar">
      <div class="logo">Radhekrishna tours and travels</div>
      <ul class="menu">
        <li style="margin-left: 50%; "><a href="index.php" >home</a></li>
        <li><a href="#">contact us</a></li>
      </ul>
</section>

<div class="title-box" style="margin-top: 3%;">
    <h1>About Us</h1>
  </div>
  <div class="container">
    <div class="image" style="margin-left: 130%; position: sticky; margin-top: 5%;">
     <img src="image/7.png" alt="about" style="width: 400px; height: 300px;">
    </div>
    <div class="content"  style="margin-top: -35%;">
    At [Radhekrishna tours and travels], we're more than just a travel agency- we're your gateway to incredible adventures. With a deep love for exploration and a commitment to crafting unforgettable journeys,
     we're here to make your travel dreams a reality. Our experienced team is dedicated to providing you with seamless and enriching travel experiences that will leave you with lasting memories. 
     Join us in discovering the world's wonders, one adventure at a time
    </div>
  </div>

  <div class="title-box2" style="margin-top: 9%;">
    <h1>Mission and Values</h1>
  </div>
  <div class="container2">
    <div class="image" style="margin-left: 10%; position: sticky; margin-top: 0%;">
      <img src="image/about2.png.jpg" alt="mission" style="width: 400px; height: 300px;">
    </div>
    <div class="content2" style="margin-top: -32%;">
    At Radhekrishna tours and travels, our mission is to kindle the wanderlust in every traveler's heart.
     We are committed to curating exceptional travel experiences that not only fulfill dreams but also promote responsible and sustainable tourism. Our core values include a deep passion for exploration, 
     unwavering customer focus, a commitment to responsible travel, and a dedication to quality and excellence.
      We believe in the power of travel to create lasting memories and meaningful connections while leaving a positive mark on the places we visit.
    </div>
  </div>

  <section id="awards">
  <div class="title-box" style="margin-top: 35%; padding-left: 190px; padding-right: 190px; background-color: #06c606;">
    <h1>Achievment And Awards</h1>
  </div>
  <div class="container2">
    <div class="image" style="margin-left: 130%; position: sticky; margin-top: 20%;">
      <img src="image/about1.png.jpg" alt="about" style="width: 380px; height: 350px;">
     </div>
  <div class="content2" style="margin-left: 1%; margin-top:-60%;">
  Over the years, Radhekrishna tours and travels has earned a reputation for excellence in the travel industry.
   Our dedication to delivering exceptional travel experiences has been recognized with numerous awards and accolades, 
   including excellencein tour management. These achievements serve as a testament to our commitment to providing our travelers with unforgettable journeys, 
   our dedication to responsible tourism practices, and our unwavering passion for exploring the world. We take pride in these accomplishments and view them as motivation to continue raising the bar in the travel industry.<br><br>
    <div class="awards">
      <div class="award">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/badge.png" alt="">
        <p>Culinary Creativity Award</p>
      </div>
      <div class="award">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/badge.png" alt="Excellence in Event Catering">
        <p>Excellence in tours management</p>
      </div>
      <div class="award">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/badge.png" alt="Customer's Choice Award">
        <p>Customer's Choice Award</p>
      </div>
      <div class="award">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/badge.png" alt="Industry Innovation Honors">
        <p>Industry Innovation Honors</p>
      </div>
      <div class="award">
        <img src="https://raw.githubusercontent.com/sahlalu19/project/main/images/badge.png" alt="Gourmet Magazine's Choice">
        <p>Gourmet Magazine's Choice</p>
      </div>
    </div>
  </div>
  </div>
  </section>

  <section id="call">
  <div class="title-box2" style="margin-top: 2%; padding-right: 200px; padding-left: 200px; background-color: #06c6c3;">
    <h1>Social Media & Contacts</h1>
  </div>
  <div class="container" style="margin-top: 80%; margin-left: 51%;">
    <div class="image" style="margin-left: -40%; position: absolute; margin-top: 10%;">
      <img src="image/about3.png.jpg" alt="mission" style="width: 300px; height: 300px;">
    </div>
    <div class="content" style="margin-top: 8%;">
      <div class="icon-container">
        <span class="material-symbols-outlined">
          apartment
          </span>
        <span>
          Office Address:
        </span>
        <span class="email-id" style="margin-top: 100px;">
          Radhekrishna tours and travels, Haji Malang Road,<br>
           Kalyan East. 421306
        </span>
      </div>
      <div class="icon-container">
        <span class="material-symbols-outlined">
          mail
        </span>
        <span>
          Email Id:
        </span>
        <span class="email-id" style="margin-top: 100px;">
          Radhekrishnatours@gmail.com<br>
          contact@Radhekrishnatours@gmail.com
        </span>
      </div>
      <div class="icon-container">
        <span class="material-symbols-outlined">
          call
          </span>
        <span>
          Mobile Number:
        </span>
        <span class="email-id" style="margin-top: 100px;">
          9702573679 / 7710541254
        </span>
      </div>
      </div>
      
    </div>
 

  </section>
<section id="team" style="position: absolute; margin-top: 20%;">
<div class="staff">
<div class="founder" style="margin: 60px;">
  <div class="outer-circle circle circle-3">
    <span class="sq sq-1"></span>
    <span class="inner-circle circle">
      <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/tour-guide_onzla9.png"/>
    </span>
    <span class="sq sq-2"></span>
  </div>
  <p style="text-align: center; margin-top: 2px; display: inline-block; margin-left: 40px; font-family: 'Roboto Slab', serif; font-weight: bold;">
  8000+ Our Local Guides<br>
  </p>
</div>

<div class="founder">
  <div class="outer-circle circle circle-3">
    <span class="sq sq-1"></span>
    <span class="inner-circle circle">
      <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293738/reliability_jbpn4g.png"/>
    </span>
    <span class="sq sq-2"></span>
  </div>
  <p style="text-align: center; margin-top: 2px; display: inline-block; margin-left: 40px; font-family: 'Roboto Slab', serif; font-weight: bold;">
  100% Trusted Tour Agency<br>

  </p>
</div>

<div class="founder">
  <div class="outer-circle circle circle-3">
    <span class="sq sq-1"></span>
    <span class="inner-circle circle">
      <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293635/experience_a3fduk.png"/>
    </span>
    <span class="sq sq-2"></span>
  </div>
  <p style="text-align: center; margin-top: 2px; display: inline-block; margin-left: 30px; font-family: 'Roboto Slab', serif; font-weight: bold;">
  28+ Years of Travel Experience<br>
    
  </p>
</div>

<div class="founder">
  <div class="outer-circle circle circle-3">
    <span class="sq sq-1"></span>
    <span class="inner-circle circle">
      <img src="https://res.cloudinary.com/dxssqb6l8/image/upload/v1605293634/feedback_s8z7d9.png"/>
    </span>
    <span class="sq sq-2"></span>
  </div>
  <p style="text-align: center; margin-top: 2px; display: inline-block; margin-left: 55px; font-family: 'Roboto Slab', serif; font-weight: bold;">
  98% Our Travelers are Happy<br>
  </p>
</div>
</div>
</section>


</body>
</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Satisfy&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="next.css" rel="stylesheet" type="text/css" />
    <title>Package Details</title>
    <style>
        /* Styles for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        .popup-content {
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        /* Style for the close button */
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<HTML>
<head>

    <title>CODE</title>

    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="css/next.css">
</head>


<body>
<div id="preloader"></div>

<section class="nav-bar">
      <div class="logo">Radhekrishna tours and travels</div>
      
    </section>

    </section>
   
    
    <div class="sidebar">

        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>

        

        <nav>

            <div class="nav-title">
                MENU
            </div>

            <ul>
                <li class="nav-item">
                    <i class="bx bx-trip"></i>
                    <a href="form.php">
                    <span>Book Trip<span>
                    </a>
                </li>
                <li class="nav-item">
                    <i class="bx bxs-hotel"></i>
                    <a href="hotel.php">
                    <span>Book Hotels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <i class="bx bxs-wallet"></i>
                    <a href="tripbill.php">
                    <span>Recept</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <i class="bx bxs-cog"></i>
                    <a href="index.php">
                    <span>LogOut</span>
                    </a>
                </li>
            </ul>

            <hr>

            <div class="nav-title">
                Supports
            </div>

            <ul>
                <li class="nav-item">
                    <i class="bx bxs-help-circle"></i>
                    <a href="gethelp.py">
                    <span>Get Help</span>
                    </a>
                </li>
                <li class="nav-item">
                    <i class="bx bxs-message-dots"></i>
                    <span>Send Feedback</span>
                </li>
            </ul>
          <CENTER>
           <div class="nav-title">
               
            </div>
          </CENTER>

        </nav>

    </div>
     <!--------place------>
     <section class="places">
      <div class="places-text">
        <h2>Our populer package</h2>
      </div>

      <div class="cards">
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/2.png">
            </div>
          </div>

          <div class="text">
            <span class="rating" style="font-size: 25px; font-weight:bolder">Package 1</span>
            <h2>Shimla Manali Tours</h2>
            <p class="cost">$1870 / Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/2.png">
                    <input type="hidden" name="Package" value="Shimla Manali tours">
                    <input type="hidden" name="Duration" value="6 Days">
                    <input type="hidden" name="Location" value="Himachal Pradesh">
                    <input type="hidden" name="Key_Destinations" value="Shimla, Manali, Rohtang Pass, Kullu, Solang Valley">
                    <input type="hidden" name="Activities" value="Scenic views, fast-paced adventure, trekking, hot springs">
                    <input type="hidden" name="cost" value="$1870 / person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/3.png">
            </div>
          </div>

          <div class="text">
          <span class="rating" style="font-size: 25px; font-weight:bolder">Package 2</span>
          <h2>Tropical Paradise Getaway</h2>
            <p class="cost">$3,500/ Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/3.png">
                    <input type="hidden" name="Package" value="Tropical Paradise Getaway">
                    <input type="hidden" name="Duration" value="10 Days">
                    <input type="hidden" name="Location" value="Maldives">
                    <input type="hidden" name="Key_Destinations" value="Male, Bora Bora Island, Maafushi">
                    <input type="hidden" name="Activities" value="Snorkeling, beach relaxation, water villa stay, dolphin watching">
                    <input type="hidden" name="cost" value="Starting at $3,500 per person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/4.png">
            </div>
          </div>

          <div class="text">
          <span class="rating" style="font-size: 25px; font-weight:bolder">Package 3</span>
          <h2>Safari Adventure in Africa</h2>
            <p class="cost">$6,000 / Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/4.png">
                    <input type="hidden" name="Package" value="Safari Adventure in Africa">
                    <input type="hidden" name="Duration" value="12 Days">
                    <input type="hidden" name="Location" value="Kenya and Tanzania">
                    <input type="hidden" name="Key_Destinations" value="Serengeti National Park, Maasai Mara, Ngorongoro Crater">
                    <input type="hidden" name="Activities" value="Wildlife safaris, hot air balloon rides, cultural experiences">
                    <input type="hidden" name="cost" value="Starting at $6,000 per person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/5.png">
            </div>
          </div>

          <div class="text">
          <span class="rating" style="font-size: 25px; font-weight:bolder">Package 4</span>
          <h2>Spiritual Journey India</h2>
            <p class="cost">$1870 / Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/5.png">
                    <input type="hidden" name="Package" value="Spiritual Journey through India">
                    <input type="hidden" name="Duration" value="15 Days">
                    <input type="hidden" name="Location" value="India">
                    <input type="hidden" name="Key_Destinations" value="Delhi, Varanasi, Jaipur, Rishikesh, ayodhya">
                    <input type="hidden" name="Activities" value="Temple visits, Ganges river rituals, yoga retreat,Ram mandir aarti ">
                    <input type="hidden" name="cost" value="Starting at $1870 per person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/8.png.jpg">
            </div>
          </div>

          <div class="text">
          <span class="rating" style="font-size: 25px; font-weight:bolder">Package 5</span>
          <h2>South American Explorer</h2>
            <p class="cost">$3,500/ Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/8.png.jpg">
                    <input type="hidden" name="Package" value="South American Explorer">
                    <input type="hidden" name="Duration" value="18 Days">
                    <input type="hidden" name="Location" value="South America">
                    <input type="hidden" name="Key_Destinations" value="Machu Picchu, Amazon Rainforest, Rio de Janeiro, Buenos Aires">
                    <input type="hidden" name="Activities" value="Inca Trail trek, Amazon jungle adventures, tango dance lessons">
                    <input type="hidden" name="cost" value="Starting at $3,500 per person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/8.png.jpg">
            </div>
          </div>

          <div class="text">
          <span class="rating" style="font-size: 25px; font-weight:bolder">Package 6</span>
          <h2>Grand European Expedition</h2>
            <p class="cost">$6,000 / Per Person</p>
            <div class="card-box">
            <form action="details.php" method="post">
                    <input type="hidden" name="image" value="image/8.png.jpg">
                    <input type="hidden" name="Package" value="Grand European Expedition">
                    <input type="hidden" name="Duration" value="18 Days">
                    <input type="hidden" name="Location" value="Europe">
                    <input type="hidden" name="Key_Destinations" value="Paris, Rome, Barcelona, Amsterdam, Prague">
                    <input type="hidden" name="Activities" value=" Sightseeing, museum visits, culinary tours">
                    <input type="hidden" name="cost" value="Starting at $6,000 per person">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>
        </div>
    </section>


<!---------hotels------>
<section class="hotels">
      <div class="places-text">
        <h2>Our hotels</h2>
      </div>

      <div class="cards">
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/hotel1.png.jpg">
            </div>
          </div>

          <div class="text">
            <span class="rating">⭐⭐⭐⭐⭐</span>
            <h2>Luxury Hotels</h2>
            <p class="cost">$500 / Per room</p>
            <div class="card-box">
            <form action="hoteldetails.php" method="post">
                    <input type="hidden" name="image" value="image/hotel1.png.jpg">
                    <input type="hidden" name="hotel_type" value="Luxury Hotels">
                    <input type="hidden" name="Discription" value="Luxury hotels are known for their opulent accommodations, top-notch amenities, and exceptional service. They often have spacious rooms or suites, fine dining restaurants, spas, and other extravagant features.">
                    <input type="hidden" name="Target Audience" value="High-end travelers, honeymooners, and those seeking a lavish and indulgent experience.">
                    <input type="hidden" name="Examples" value="The Ritz-Carlton, Four Seasons, St. Regis">
                    <input type="hidden" name="cost" value="$500 / Room">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/hotel2.png.jpg">
            </div>
          </div>

          <div class="text">
            <span class="rating">⭐⭐⭐⭐⭐</span>
            <h2>Boutique Hotels</h2>
            <p class="cost">$400 / Per room</p>
            <div class="card-box">
            <form action="hoteldetails.php" method="post">
                    <input type="hidden" name="image" value="image/hotel2.png.jpg">
                    <input type="hidden" name="hotel_type" value="Boutique Hotels">
                    <input type="hidden" name="Discription" value=" Boutique hotels are small, independently owned properties that offer personalized service, unique interior designs, and a distinct atmosphere. They focus on creating a memorable and intimate experience for guests.">
                    <input type="hidden" name="Target Audience" value=" Travelers looking for a more charming and individualized stay.">
                    <input type="hidden" name="Examples" value="The Library Hotel in New York City, The Dylan in Amsterdam, Aria Hotel in Prague.">
                    <input type="hidden" name="cost" value="$400 / Room">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/hotel3.png.jpg">
            </div>
          </div>

          <div class="text">
            <span class="rating">⭐⭐⭐⭐⭐</span>
            <h2>Budget Hotels</h2>
            <p class="cost">$200 / Per Room</p>
            <div class="card-box">
            <form action="hoteldetails.php" method="post">
                    <input type="hidden" name="image" value="image/hotel3.png.jpg">
                    <input type="hidden" name="hotel_type" value="Budget Hotels">
                    <input type="hidden" name="Discription" value=" Budget hotels offer affordable accommodations without compromising on basic comforts. They are ideal for travelers on a tight budget and provide clean rooms and essential amenities.">
                    <input type="hidden" name="Target Audience" value=" Budget-conscious travelers, backpackers, and families.">
                    <input type="hidden" name="Examples" value="Motel 6, Premier Inn, Ibis Budget">
                    <input type="hidden" name="cost" value="$200 / Room">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/hotel4.png.jpg">
            </div>
          </div>

          <div class="text">
            <span class="rating">⭐⭐⭐⭐⭐</span>
            <h2>Resort Hotels</h2>
            <p class="cost">$600 / Per room</p>
            <div class="card-box">
            <form action="hoteldetails.php" method="post">
                    <input type="hidden" name="image" value="image/hotel4.png.jpg">
                    <input type="hidden" name="hotel_type" value="Resort Hotels">
                    <input type="hidden" name="Discription" value="Resort hotels are typically located in vacation destinations and offer a wide range of amenities and activities on-site, such as pools, water sports, entertainment, and multiple dining options. They cater to guests looking for a complete holiday experience.">
                    <input type="hidden" name="Target Audience" value=" Families, couples, and vacationers seeking relaxation and recreation.">
                    <input type="hidden" name="Examples" value=" Atlantis Paradise Island in the Bahamas, Club Med resorts, and The Venetian Resort in Las Vegas.">
                    <input type="hidden" name="cost" value="$600 / Room">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>

        </div>
        <div class="card">
          <div class="zoom-img">
            <div class="img-card">
              <img src="image/6.png">
            </div>
          </div>

          <div class="text">
            <span class="rating">⭐⭐⭐⭐⭐</span>
            <h2>Eco-Friendly Hotels</h2>
            <p class="cost">$300 / Per Room</p>
            <div class="card-box">
            <form action="hoteldetails.php" method="post">
                    <input type="hidden" name="image" value="image/6.png">
                    <input type="hidden" name="hotel_type" value="Eco-Friendly and Sustainable Hotels">
                    <input type="hidden" name="Discription" value=" Eco-friendly hotels prioritize sustainability and environmental responsibility. They incorporate green practices such as energy conservation, waste reduction, and use of eco-friendly materials. Some may even have on-site renewable energy sources.">
                    <input type="hidden" name="Target Audience" value=" Environmentally conscious travelers and nature enthusiasts.">
                    <input type="hidden" name="Examples" value="Six Senses Resorts & Spas, Bardessono Hotel & Spa in California's Napa Valley, and Soneva Fushi in the Maldives.">
                    <input type="hidden" name="cost" value="$300 / Room">
                    <input type="submit" class="Details_button" value="View Details" style="background-color: yellow; font-size: 20px; ">
           </form>
            </div>
          </div>
    </section>

    
     

    <!-- JS File -->
   

</body>
</html>
<body>
  <script src="next.js"></script>
  <script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load",function(){
    loader.style.display = "none";
  })
</script>

</body>

</html>
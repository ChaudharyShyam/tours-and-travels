<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Satisfy&display=swap" rel="stylesheet">
    <title>Hotel Booking Form</title>
    <style>
        body {
            background-image: url('image/hotel2.png.jpg');  
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 60px;
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
            background-color: rgba(255, 255, 255, 0.119); 
            box-shadow: 1px 2px 6px 6px rgba(0, 0, 0, 0);
            backdrop-filter: blur(10px); 
            border: 2px solid #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="date"]{
            width: 100%;
            padding: 10px;
            border: 2px solid #333;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            cursor: pointer;
        }
        .nav-bar {
            margin-left: -1%;
            display: flex;
            flex-flow: row wrap;
            width: 100%;
            height: 90px;
            background-color:yellow;
            box-shadow: 3px 3px 10px lightslategray;
            align-items: center;
            position: fixed;
            top: 0;
            z-index:3;
        }
        .logo {
            flex: 1;
            font-size: 40px;
            padding: 20px;
            margin-left: 50px;
            font-family: Satisfy;
        }



    </style>
</head>
<body>
<section class="nav-bar">
      <div class="logo">Radhekrishna tours and travels</div>
</section>
    <div class="container"><br><br>
        <h1>Hotel Booking</h1>
        <form action="bookhotel.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="hotel-type">Hotel Type:</label>
                <select id="hotel-type" name="hotel-type" style="width: 104%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; border: 2px solid #333;" required>
                <option value="Budget Hotel">Budget Hotel</option>
                <option value="Luxury Hotel">Luxury Hotel</option>
                <option value="Mid-range Hotel">Mid-range Hotel</option>
        <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="check-in">Check-in Date:</label>
                <input type="date" id="check-in" name="check-in" required>
            </div>
            <div class="form-group">
                <label for="check-out">Check-out Date:</label>
                <input type="date" id="check-out" name="check-out" required>
            </div>
            <div class="form-group">
                <label for="rooms">Number of Rooms:</label>
                <select id="rooms" name="rooms" style=" width: 104%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; border: 2px solid #333;" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

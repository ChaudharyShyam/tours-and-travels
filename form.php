<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Satisfy&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours and Travels Form</title>
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="nav-bar">
      <div class="logo">Radhekrishna tours and travels</div>
</section>
<section>
    <form action="genrate_bill.php" method="post">
        <div class="container">
            <h1>Book Your Trip !</h1>
            
            <label for="name">Name:</label>
            <input type="text" id="name" class="name" name="Name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" class="email" name="Email" required><br><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" class="tel" name="Phone" required><br><br>

            <label for="destination">Select Package:</label>
            <select id="destination" class="destination" name="Destination">
                <option value="Shimla Manali Tours">Package 1</option>
                <option value="Tropical Paradise Getaway">Package 2</option>
                <option value="Safari Adventure in Africa">Package 3</option>
                <option value="Spiritual Journey India">Package 4</option>
                <option value="South American Explorer">Package 5</option>
                <option value="Grand European Expedition">Package 6</option>
            </select><br><br>

            <label for="departure-date">Departure Date:</label>
            <input type="date" id="departure_date" class="deprature_date" name="Departure_Date" required><br><br>

            <label for="return-date">Return Date:</label>
            <input type="date" id="return-date" class="return_date" name="Return_Date" required><br><br>

            <label for="people-count">Number of People:</label>
            <input type="number" id="people-count" class="people" name="Num_of_people" required><br><br>

            <label for="message">Additional Message:</label><br>
            <textarea id="message" class="message" name="Add_message" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Proceed">
        </div>
    </form>
    </section>
  </div>
</body>

</html>
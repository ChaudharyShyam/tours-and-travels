<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recept</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Style for the container */
        .data-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Style for the header */
        .data-header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        /* Style for individual data items */
        .data-item {
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        /* Style for labels */
        .label {
            font-weight: bold;
            color: #333;
        }

        /* Style for data values */
        .value {
            color: #555;
        }

        /* Style for the "Proceed to Payment" button */
        .proceed-button {
            text-align: center;
            margin-top: 20px;
        }

        .proceed-button button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .proceed-button button:hover {
            background-color: #005f7f;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <div class="data-header">
            <h2>Hotel Booking Details</h2>
        </div>
        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "radhekrishna";

        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM hotel_bookings ORDER BY id DESC LIMIT 1";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // You can access the retrieved data like this
            $name = $row["name"];
            $email = $row["email"];
            $hotelType = $row["hotel_type"];
            $checkIn = $row["check_in"];
            $checkOut = $row["check_out"];
            $rooms = $row["rooms"];

            // Display the retrieved data
            echo '<div class="data-item"><span class="label">Name:</span> <span class="value">' . $name . '</span></div>';
            echo '<div class="data-item"><span class="label">Email:</span> <span class="value">' . $email . '</span></div>';
            echo '<div class="data-item"><span class="label">Hotel Type:</span> <span class="value">' . $hotelType . '</span></div>';
            echo '<div class="data-item"><span class="label">Check-In:</span> <span class="value">' . $checkIn . '</span></div>';
            echo '<div class="data-item"><span class="label">Check-Out:</span> <span class="value">' . $checkOut . '</span></div>';
            echo '<div class="data-item"><span class="label">Number of Rooms:</span> <span class="value">' . $rooms . '</span></div>';
        } else {
            echo "No data found";
        }

        // Close the database connection
        $conn->close();
        ?>
               <script>
            // Automatically trigger the print dialog when the page loads
            window.onload = function() {
                window.print();
            };
        </script>
    </div>
</body>
</html>

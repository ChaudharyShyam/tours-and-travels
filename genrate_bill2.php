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

// Initialize variables with default values
$name = "";
$email = "";
$phone = "";
$destination = "";
$departureDate = "";
$returnDate = "";
$numOfPeople = "";
$additionalMessage = "";
$totalCost = 0;

// Assuming you have received the trip ID as a parameter
if (isset($_GET['trip_id'])) {
    $trip_id = $_GET['trip_id'];

    // Fetch the trip details from the database based on trip_id
    // Corrected SQL query using booking_id instead of id
$sql = "SELECT * FROM trips WHERE booking_id = $trip_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Retrieve data from the database
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $destination = $row['destination'];
        $departureDate = $row['departure_date'];
        $returnDate = $row['return_date'];
        $numOfPeople = $row['num_of_people'];
        $additionalMessage = $row['additional_message'];

        // Function to calculate total cost (you need to define this function)
        function calculateTotalCost($destination, $departureDate, $returnDate, $numOfPeople) {
            // Define base prices for each destination
            $destinationPrices = [
                'Shimla Manali Tours' => 1870,     // Price for Paris per person per day
                'Tropical Paradise Getaway' => 3500,   // Price for New York per person per day
                'Safari Adventure in Africa' => 6000,
                'Spiritual Journey India' => 1870,
                'South American Explorer' => 3500,
                'Grand European Expedition' => 6000    // Price for Tokyo per person per day
            ];

            // Calculate the number of days for the trip
            $departureTimestamp = strtotime($departureDate);
            $returnTimestamp = strtotime($returnDate);
            $numberOfDays = ceil(($returnTimestamp - $departureTimestamp) / (60 * 60 * 24));

            // Get the base price for the selected destination
            $basePrice = $destinationPrices[$destination];

            // Calculate the total cost
            $totalCost = $basePrice * $numOfPeople;

            return $totalCost;
        }

        // Calculate the total cost
        $totalCost = calculateTotalCost($destination, $departureDate, $returnDate, $numOfPeople);
    } else {
        echo "No trip data found.";
    }
    
    // Close the database connection
    $conn->close();
}
// Store the totalCost in localStorage
echo "<script>localStorage.setItem('totalCost', $totalCost);</script>";

?>


<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #888888;
            margin: 0 auto;
            max-width: 100%;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total-cost {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .print-button {
            text-align: center;
            margin-top: 20px;
        }

        .print-button button {
            background-color: #008CBA; 
            color: #ffffff; 
            padding: 10px 20px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .print-button button:hover {
            background-color: #005f7f; 
        }

        /* Print-specific styles */
        @media print {
            body {
                background-color: white;
            }

            .container {
                box-shadow: none;
                border: 1px solid #ccc;
            }

            .print-button {
                display: none;
            }
        }
    </style>
    <script>
        
    // Store the totalCost in localStorage
    localStorage.setItem('totalCost', <?php echo $totalCost; ?>);

    function redirectToPayment() {
        // Get the current totalCost value
        var totalCost = <?php echo $totalCost; ?>;
        
        // Redirect to the next page with totalCost as a query parameter
        window.location.href = 'payment.php?totalCost=' + totalCost;
    }
</script>

        
</head>
<body>
<div class="container">
    <h1>Booking Details</h1>
    <table>
        <tr>
            <td><strong>Booking ID:</strong></td>
            <td><?php echo $trip_id; ?></td>
        </tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <td><strong>Destination:</strong></td>
            <td><?php echo $destination; ?></td>
        </tr>
        <tr>
            <td><strong>Departure Date:</strong></td>
            <td><?php echo $departureDate; ?></td>
        </tr>
        <tr>
            <td><strong>Return Date:</strong></td>
            <td><?php echo $returnDate; ?></td>
        </tr>
        <tr>
            <td><strong>Number of People:</strong></td>
            <td><?php echo $numOfPeople; ?></td>
        </tr>
    </table>
    <div class="total-cost">
        <p><strong>Total Cost:</strong> $<?php echo $totalCost; ?></p>
    </div>
    
    <div class="print-button">
        <button onclick="redirectToPayment()">proceed to payment</button>
    </div>
</div>
</body>
</html>





<?php
// Step 1: Set up your database connection (you can reuse the code from your previous file)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radhekrishna";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve the most recent booking from the database
$sql = "SELECT * FROM hotel_bookings ORDER BY id DESC LIMIT 1"; // Order by ID in descending order to get the most recent booking
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Step 3: Calculate the price based on hotel type and number of rooms (same code as before)
    $hotelType = $row["hotel_type"];
    $rooms = $row["rooms"];

    $pricePerRoom = [
        "Budget Hotel" => 100, // Change this to your actual price
        "Luxury Hotel" => 150,   // Change this to your actual price
        "Mid-range Hotel" => 200
    ];

    $totalPrice = $pricePerRoom[$hotelType] * $rooms;

    echo "<script>localStorage.setItem('totalPrice', $totalPrice);</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bill</title>
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
    localStorage.setItem('totalPrice', <?php echo $totalPrice; ?>);

function redirectToPayment() {
    // Get the current totalCost value
    var totalPrice = <?php echo $totalPrice; ?>;
    
    // Redirect to the next page with totalCost as a query parameter
    window.location.href = 'payment2.php?totalPrice=' + totalPrice;
}
        </script>
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>
        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $row["name"]; ?></td>
            </tr>
            <tr>
                <td>Hotel Type:</td>
                <td><?php echo $hotelType; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row["email"]; ?></td>
            </tr>
            <tr>
                <td>Check-In:</td>
                <td><?php echo $row["check_in"]; ?></td>
            </tr>
            <tr>
                <td>Check-Out:</td>
                <td><?php echo $row["check_out"]; ?></td>
            </tr>
            <tr>
                <td> No. of Rooms:</td>
                <td><?php echo $rooms; ?></td>
            </tr>
           
        </table>
        <div class="total-cost">
            <p><strong>Total Cost:</strong> $<?php echo $totalPrice; ?></p>
        </div>
        <div class="print-button">
        <button onclick="redirectToPayment()">proceed to payment</button>
        </div>
    </div>
</body>
</html>

<?php
} else {
    echo "No bookings found.";
}

// Close the database connection
$conn->close();
?>

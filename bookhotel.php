<?php
// Step 1: Set up your database connection
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

// Step 2: Handle form submission and database insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 3: Retrieve form data
    $name = $_POST["name"];
    $hotelType = $_POST["hotel-type"];
    $email = $_POST["email"];
    $checkIn = $_POST["check-in"];
    $checkOut = $_POST["check-out"];
    $rooms = $_POST["rooms"];
    $comments = $_POST["comments"];

    // Step 4: Sanitize and validate data (you should add more validation)
    // For example, you can use functions like filter_var or regular expressions.

    // Step 5: Insert data into the database
    $sql = "INSERT INTO hotel_bookings (name, hotel_type, email, check_in, check_out, rooms, comments)
            VALUES ('$name', '$hotelType', '$email', '$checkIn', '$checkOut', '$rooms', '$comments')";

if ($conn->query($sql) === TRUE) {
    // Redirect to a success page
    header("Location: hotelbill.php?id=$bookingId");
    exit; // Terminate script execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    // Close the database connection
    $conn->close();
}
?>

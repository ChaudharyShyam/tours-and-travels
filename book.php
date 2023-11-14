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

// Process the form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $destination = $_POST["Destination"];
    $departureDate = $_POST["Deprature_Date"];
    $returnDate = $_POST["Return_Date"];
    $numOfPeople = $_POST["Num_of_people"];
    $additionalMessage = $_POST["Add_message"];

    // SQL statement to insert data into the database
    $sql = "INSERT INTO trips (name, email, phone, destination, departure_date, return_date, num_of_people, additional_message) VALUES ('$name', '$email', '$phone', '$destination', '$departureDate', '$returnDate', '$numOfPeople', '$additionalMessage')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the next page after successful submission
        header("Location: process.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

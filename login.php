<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radhekrishna";

$check = mysqli_connect($servername, $username, $password, $dbname);

if (!$check) {
    echo "Connection failed";
} else {
    echo "Connection ok";
}

$email = $_POST['Email'];
$pass = $_POST['Password'];

// Use prepared statements to prevent SQL injection
$query = "SELECT * FROM User_data WHERE Email = ? LIMIT 1";
$stmt = mysqli_prepare($check, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($pass, $row['Password'])) {
        // Password is correct, redirect to the next page
        header('location: next.php');
    } else {
        // Password is incorrect
        header('location: http://localhost/toursandtravels/loginfailed.html');
    }
} else {
    // User with the provided email doesn't exist
    header('location: http://localhost/toursandtravels/loginfailed.html');
}
?>

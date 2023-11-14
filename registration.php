<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radhekrishna";

// Create a connection to the database
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['Phoneno']) && isset($_POST['Email']) && isset($_POST['Password'])) {
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $phoneno = $_POST['Phoneno'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Check if the email already exists
    $check_query = "SELECT COUNT(*) as email_count FROM User_data WHERE Email = ?";
    $stmt = mysqli_prepare($con, $check_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $email_count = $row['email_count'];

    if ($email_count > 0) {
        echo "Email already exists. Please choose a different email.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert the new record with hashed password and timestamp using a prepared statement
        $insert_query = "INSERT INTO User_data (Name, Address, Phoneno, Email, Password, RegistrationTime) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)";
        $stmt = mysqli_prepare($con, $insert_query);
        mysqli_stmt_bind_param($stmt, "sssss", $name, $address, $phoneno, $email, $hashed_password);
        $data = mysqli_stmt_execute($stmt);

        if ($data) {
            echo "Registration is done.";
            header('location: index.php');
        } else {
            echo "Data is not sent.";
        }
    }
} else {
    echo "Invalid input data.";
}

mysqli_close($con);
?>
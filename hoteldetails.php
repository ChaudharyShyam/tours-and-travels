<!DOCTYPE html>
<html>
<head>
    <title>Hotel Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: yellow;
            color: black;
            padding: 20px;
        }

        .details-container {
            max-width: 1000px; /* Increase the max-width as per your preference */
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border-radius: 10px;
        }

        .details-left {
            flex: 0 0 70%; /* 70% of container width */
        }

        .details-right {
            flex: 0 0 30%; /* 30% of container width */
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s; /* Add transition for smooth hover effect */
        }

        .details-right img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            margin-left: 17px;
        }

        /* Add hover effect to enlarge the image */
        .details-right:hover {
            transform: scale(1.06); /* Increase size by 10% on hover */
        }

        strong {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        a {
            display: inline-block; /* Make the links inline */
            text-align: center;
            margin-left: 17%;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
            padding: 10px 20px; /* Add padding to the links */
            background-color: #fff;
            border: 1px solid #007BFF;
            border-radius: 5px; /* Add rounded corners to the links */
            transition: background-color 0.2s, color 0.2s;
        }

        a:hover {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Hotel Details</h1>

    <div class="details-container">
        <div class="details-left" style="line-height: 200%;">
            <?php
            // Check if the form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve the form data
                $hotelType = $_POST["hotel_type"];
                $description = $_POST["Discription"]; // Corrected key name
                $targetAudience = $_POST["Target_Audience"];
                $examples = $_POST["Examples"];
                $cost = $_POST["cost"];

                // Display the hotel details in a table
                echo "<table>";
                echo "<tr><td><strong>Hotel Type:</strong></td><td>$hotelType</td></tr>";
                echo "<tr><td><strong>Description:</strong></td><td>$description</td></tr>"; // Corrected key name
                echo "<tr><td><strong>Target Audience:</strong></td><td>$targetAudience</td></tr>";
                echo "<tr><td><strong>Examples:</strong></td><td>$examples</td></tr>";
                echo "<tr><td><strong>Cost:</strong></td><td>$cost</td></tr>";
                echo "</table>";
            } else {
                echo "No data submitted.";
            }
            ?>
        </div>
        <div class="details-right">
            <?php
            // Check if the form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Display the hotel image
                $image = $_POST["image"];
                echo "<img src='$image' alt='Hotel Image'>";
            }
            ?>
        </div>
    </div>

    <a href="next.php">Back</a><a href="hotel.php">Book Hotel</a>
</body>
</html>

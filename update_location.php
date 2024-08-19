<?php
// update_location.php

// Check if latitude and longitude are set in the POST request
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Example: Log the location to a file (replace with database code)
    $file = 'locations.txt';  // Replace with your database code
    $current = file_get_contents($file);
    $current .= "Latitude: $latitude, Longitude: $longitude\n";
    file_put_contents($file, $current);

    // Example: Insert into database (uncomment and modify if needed)
    /*
    $servername = "your_server";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";

    if ($conn->query($sql) === TRUE) {
        echo "Location updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    */
    
    echo "Location updated successfully";
} else {
    echo "No location data received.";
}
?>

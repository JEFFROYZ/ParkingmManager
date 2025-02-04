<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "parking_manager");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get form data
$driverName = $_POST['driverName'];
$carNumber = $_POST['carNumber'];
$vehicleType = $_POST['vehicleType'];

// Insert data into database
$sql = "INSERT INTO vehicle_records (driver_name, car_number, vehicle_type) VALUES ('$driverName', '$carNumber', '$vehicleType')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close connection
$mysqli->close();
?>

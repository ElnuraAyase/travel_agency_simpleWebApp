<?php

$conn = new mysqli('localhost', 'username', 'password', 'MyTravelAgency');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Trips (name, destination, departure_date, return_date) VALUES ('Beach Getaway to Bali', 'Bali, Indonesia', '2024-07-10', '2024-07-17')";
if ($conn->query($sql) === TRUE) {
    echo "New trip added successfully";
} else {
    echo "Error adding trip: " . $conn->error;
}

$conn->close();
?>

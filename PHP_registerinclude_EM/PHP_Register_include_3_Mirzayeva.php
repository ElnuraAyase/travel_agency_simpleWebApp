<?php


$conn = new mysqli('localhost', 'username', 'password', 'MyTravelAgency');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Bookings (client_id, trip_id, book_date) VALUES (1, 3, '2024-07-20')";
if ($conn->query($sql) === TRUE) {
    echo "New booking added successfully";
} else {
    echo "Error adding

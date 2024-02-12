<?php


$conn = new mysqli('localhost', 'username', 'password', 'MyTravelAgency');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Clients (name, email) VALUES ('John Doe', 'johndoe@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New client added successfully";
} else {
    echo "Error adding client: " . $conn->error;
}

$conn->close();
?>

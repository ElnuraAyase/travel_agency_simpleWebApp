<?php


include '../PHP_dbinclude_EM/connect_db.php';


$sql = "SELECT * FROM Clients";

// Execute sql
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    //  HTML table to display the data
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['client_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No clients found";
}

$conn->close();
?>

<?php

include_once '../PHP_general_EM/navigation.php';

$conn = new mysqli('localhost', 'root', '', 're_mirzayeva_55404_mid2_travel_agency');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$tripsData = getTripsData($conn);


$conn->close();


displayTripsTable($tripsData);

function getTripsData($conn) {
  $tripsData = $conn->query("SELECT * FROM Trips");
  return $tripsData;
}

function displayTripsTable($tripsData) {
  echo "<h2>Trips</h2>";
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Destination</th><th>Departure Date</th><th>Return Date</th></tr>";
  if ($tripsData->num_rows > 0) {
    while ($row = $tripsData->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['trip_id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['destination'] . "</td>";
      echo "<td>" . $row['departure_date'] . "</td>";
      echo "<td>" . $row['return_date'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "No trips found";
  }
  echo "</table>";
}
include_once '../PHP_general_EM/footer.php';

?>

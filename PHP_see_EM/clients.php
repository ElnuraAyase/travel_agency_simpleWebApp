<?php

include_once '../PHP_general_EM/navigation.php';


$conn = new mysqli('localhost', 'root', '', 're_mirzayeva_55404_mid2_travel_agency');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$clientsData = getClientsData($conn);


$conn->close();


displayClientsTable($clientsData);

function getClientsData($conn) {
  $clientsData = $conn->query("SELECT * FROM Clients");
  return $clientsData;
}

function displayClientsTable($clientsData) {
  echo "<h2>Clients</h2>";
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
  if ($clientsData->num_rows > 0) {
    while ($row = $clientsData->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['client_id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "No clients found";
  }
  echo "</table>";
}



include_once '../PHP_general_EM/footer.php';


?>

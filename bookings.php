
<?php
include_once '../PHP_general_EM/navigation.php';

$conn = new mysqli('localhost', 'root', '', 're_mirzayeva_55404_mid2_travel_agency');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->error);
}

if (isset($_POST['addBooking'])) {
  $clientId = $_POST['clientId'];
  $tripId = $_POST['tripId'];

  if (!empty($clientId) && !empty($tripId)) {
    $sql = "INSERT INTO Bookings (client_id, trip_id) VALUES ($clientId, $tripId)";
    $result = $conn->query($sql);

    if ($result) {
      echo "<div class=\"alert alert-success\">Booking created successfully.</div>";
    } else {
      echo "<div class=\"alert alert-danger\">Error creating booking: " . $conn->error . "</div>";
    }
  } else {
    echo "<div class=\"alert alert-danger\">Please enter valid booking details.</div>";
  }
}

$allBookings = getBookingsData($conn);
displayBookingsTable($allBookings, $conn);

$conn->close();

function getBookingsData($conn) {
  $sql = "SELECT * FROM Bookings";
  $bookingsData = $conn->query($sql);
  return $bookingsData;
}

function displayBookingsTable($bookingsData, $conn) {
  echo "<h2>Bookings</h2>";
  echo "<table>";
  echo "<tr><th>ID</th><th>Client Name</th><th>Trip Name</th><th>Book Date</th></tr>";
  if ($bookingsData->num_rows > 0) {
    while ($row = $bookingsData->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['booking_id'] . "</td>";
      $clientName = getClientName($conn, $row['client_id']);
      echo "<td>" . $clientName . "</td>";
      $tripName = getTripName($conn, $row['trip_id']);
      echo "<td>" . $tripName . "</td>";
      echo "<td>" . $row['book_date'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "No bookings found";
  }
  echo "</table>";
}

function getClientName($conn, $clientId) {
  $sql = "SELECT name FROM Clients WHERE client_id = $clientId";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row['name'];
  } else {
    return "";
  }
}

function getTripName($conn, $tripId) {
  $sql = "SELECT name FROM Trips WHERE trip_id = $tripId";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row['name'];
  } else {
    return "";
  }
}



include_once '../PHP_general_EM/footer.php';

?>

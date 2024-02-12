<?php

if (isset($_POST)) {

    $name = $_POST['name'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];

    echo "Name: $name <br>";
    echo "Destination: $destination <br>";
    echo "Departure Date: $departure_date <br>";
    echo "Return Date: $return_date <br>";
}
?>

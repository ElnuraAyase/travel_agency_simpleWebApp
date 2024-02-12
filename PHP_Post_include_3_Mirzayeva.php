<?php


if (isset($_POST)) {

    $client_id = $_POST['client_id'];
    $trip_id = $_POST['trip_id'];
    $book_date = $_POST['book_date'];

    echo "Client ID: $client_id <br>";
    echo "Trip ID: $trip_id <br>";
    echo "Book Date: $book_date <br>";
}
?>

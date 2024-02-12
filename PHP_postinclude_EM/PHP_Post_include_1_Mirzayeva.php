<?php


if (isset($_POST)) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
?>

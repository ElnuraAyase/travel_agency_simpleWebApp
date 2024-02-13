<?php

include '../PHP_EM/databaseMirzayeva.php';

$animals = [];

$sql = "SELECT * FROM animals";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $animal = [
        'name' => $row['name'],
        'price' => $row['price'],
        'image' => $row['image'],
        'sound' => $row['sound']
    ];

    $animals[] = $animal;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="../CSS_EM/stylesheetMirzayeva.css">
    <script src="../JS_EM/ELnurascript.js"></script>
</head>
<body>
    <header>
        <h1>Market</h1>
        <nav>
            <ul>
                <li><a href="../HTML_EM/main55404.html">Home</a></li>
                <li><a href="../PHP_game_EM/Elnuragame.php">Game</a></li>
                <li><a href="../PHP_contacts_EM/Elnuracontacts.php">Contacts</a></li>
                <li><a href="../PHP_about_EM/Elnuraabout.php">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Animal Market</h2>

        <table id="marketTable"></table>

        <button onclick="submitOrder()">Submit Order</button>
    </main>

    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
</body>
</html>

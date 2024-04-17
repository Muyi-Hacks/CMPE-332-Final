<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Preferences</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>View Preferences</h1>
        <nav>
            <ul>
                <li><a href="rental.php">Home</a></li>
                <li><a href="properties.php">Properties</a></li>
                <li><a href="list_rental.php">View Preferences</a></li>
                <li><a href="rental_groups.php">Edit Preferences</a></li>
                <li><a href="average_rent.php">Average Rent</a></li>
            </ul>
        </nav>
    </header>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your Preferences:</h1>
<table>
<?php
// $result = $connection->query("SELECT fname, lname from renter as r JOIN person as p on r.renter.ID=p.personID WHERE rentalGroup=$code");
$query = 'SELECT *, fname, lname from renter as r 
            JOIN person as p on r.renterID=p.personID 
            LEFT JOIN rentalGroup as rg on rg.code=r.rentalGroup
            WHERE rentalGroup="' . $_POST["code"] . '"';

$result = $connection->query($query);

echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Type</th><th>Beds</th><th>Baths</th><th>Parking</th><th>Laundry</th><th>Cost</th><th>Accessibility</th></tr>";


while ($row = $result->fetch()) {
         // Each row in the table
    echo "<tr>";
    echo "<td>".$row["fname"]."</td>";
    echo "<td>".$row["lname"]."</td>";
    echo "<td>".$row["prefType"]."</td>";
    echo "<td>".$row["prefNumBeds"]."</td>";
    echo "<td>".$row["prefNumBath"]."</td>";
    echo "<td>".$row["prefParking"]."</td>";
    echo "<td>".$row["prefLaundry"]."</td>";
    echo "<td>".$row["cost"]."</td>";
    echo "<td>".$row["prefAccessibility"]."</td>";
    echo "</tr>";
}

echo "</table>";

//$preferences = $connection->query("SELECT * from rentalGroup WHERE CODE = $id");
?>
</table>
<?php
   $connection = NULL;
?>
</body>
<footer>
        <p>&copy; 20220300 Muyi Omorogbe</p>
    </footer>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Rental Group Preferences</title>
    <style>
        header {
            background-color: #4CAF50; /* Green background */
            color: white;
            text-align: center;
            padding: 20px;
        }
        footer {
            background-color: #333333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h1>✔ Updated Rental Group Preferences</h1>
</header>

<?php include 'connectdb.php'; ?>

<h2>Updated Rental Group Preferences for: <?php echo htmlspecialchars($_POST["code"]); ?></h2>
<p>Using this query:</p>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign variables from the form data
    $code = $_POST['code'];
    $prefType = $_POST['prefType'];
    $prefNumBeds = $_POST['prefNumBeds'];
    $prefNumBath = $_POST['prefNumBath'];
    $prefParking = $_POST['prefParking'];
    $prefLaundry = $_POST['prefLaundry'];
    $cost = $_POST['cost'];
    $prefAccessibility = $_POST['prefAccessibility'];
    $leases = $_POST['leases'];

    // Update query
    $query = "UPDATE RentalGroup SET prefType = '$prefType', 
              prefNumBeds = '$prefNumBeds', 
              prefNumBath = '$prefNumBath', 
              prefParking = '$prefParking', 
              prefLaundry = '$prefLaundry', 
              cost = '$cost', 
              prefAccessibility = '$prefAccessibility' 
              WHERE code='$code' ";

    // Execute query and fetch new data
    $connection->query($query); 
    echo "<table border='1'>";
    echo "<tr><th>Type</th><th>Beds</th><th>Baths</th><th>Parking</th><th>Laundry</th><th>Cost</th><th>Accessibility</th></tr>";

    $query2 = 'SELECT * FROM RentalGroup WHERE code="' . $code . '"';
    $result = $connection->query($query2); 
    while ($row = $result->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["prefType"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["prefNumBeds"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["prefNumBath"]) . "</td>";
        echo "<td>" . ($row["prefParking"] ? "Yes" : "No") . "</td>"; 
        echo "<td>" . ($row["prefLaundry"] ? "Yes" : "No") . "</td>"; 
        echo "<td>" . htmlspecialchars($row["cost"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["prefAccessibility"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "Changes successfully made";
}
?>

<footer>
    <p>&copy; 20220300 Muyi Omorogbe</p>
</footer>

</body>
</html>

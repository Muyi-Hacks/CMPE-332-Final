<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"> <!-- Ensure this path is correct -->
</head>
<body>
<header style="background-color: #007bff; color: #ffffff; padding: 20px; text-align: center;">
    <h1 style="margin: 0;">Edit Preferences</h1>
    <nav>
        <ul style="padding: 0;">
            <li style="display: inline; margin-right: 20px;"><a href="rental.php" style="color: #ffffff; text-decoration: none;">Home</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="properties.php" style="color: #ffffff; text-decoration: none;">Properties</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="list_rental.php" style="color: #ffffff; text-decoration: none;">View Preferences</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="rental_groups.php" style="color: #ffffff; text-decoration: none;">Edit Preferences</a></li>
            <li style="display: inline;"><a href="average_rent.php" style="color: #ffffff; text-decoration: none;">Average Rent</a></li>
        </ul>
    </nav>
</header>
<body>
<?php
include 'connectdb.php';
?>

<h2>Info about Rental Group Preferences for: <?php echo htmlspecialchars($_POST["code"]); ?></h2>

<?php 
   $query = 'SELECT * FROM RentalGroup WHERE code="' . $_POST["code"] . '"';
   $result=$connection->query($query);
   echo "<table border='1'>";
echo "<tr><th>Type</th><th>Beds</th><th>Baths</th><th>Parking</th><th>Laundry</th><th>Cost</th><th>Accessibility</th></tr>";

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
?>

<h2>Update Rental Group Preferences for: <?php echo htmlspecialchars($_POST["code"]); ?></h2>
<form action="update_preferences.php" method="post">
<input type="hidden" name="code" value="<?php echo htmlspecialchars($_POST["code"]); ?>"> 
    
    <label for="prefType">Preferred Type:</label>
    <input type="text" name="prefType" id="prefType" required><br><br>

    <label for="prefNumBeds">Number of Beds:</label>
    <input type="number" name="prefNumBeds" id="prefNumBeds" required><br><br>
    
    <label for="prefNumBath">Number of Baths:</label>
    <input type="number" name="prefNumBath" id="prefNumBath" required><br><br>
    
    <label for="prefParking">Preferred Parking:</label>
    <select name="prefParking" id="prefParking">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select><br><br>
    
    <label for="prefLaundry">Preferred Laundry:</label>
    <select name="prefLaundry" id="prefLaundry">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select><br><br>
    
    <label for="cost">Cost:</label>
    <input type="number" name="cost" id="cost" required><br><br>
    
    <label for="prefAccessibility">Accessibility:</label>
    <input type="text" name="prefAccessibility" id="prefAccessibility" required><br><br>
    
    <label for="leases">Leases Property ID:</label>
    <input type="number" name="leases" id="leases"><br><br>
    
    <input type="submit" value="Update Preferences">
</form>
<footer style="background-color: #333333; color: #ffffff; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%;">
    <p>&copy; 20220300 Muyi Omorogbe</p>
</footer>

</body>
</html>

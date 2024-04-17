<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"> <!-- Ensure this path is correct -->
</head>
<body>
<header style="background-color: #007bff; color: #ffffff; padding: 20px; text-align: center;">
    <h1 style="margin: 0;">Edit Prefrences</h1>
    <nav>
        <ul style="padding: 0;">
            <li style="display: inline; margin-right: 20px;"><a href="rental.php" style="color: #ffffff; text-decoration: none;">Home</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="properties.php" style="color: #ffffff; text-decoration: none;">Properties</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="list_rental.php" style="color: #ffffff; text-decoration: none;">View Prefrences</a></li>
            <li style="display: inline; margin-right: 20px;"><a href="rental_groups.php" style="color: #ffffff; text-decoration: none;">Edit Preferences</a></li>
            <li style="display: inline;"><a href="average_rent.php" style="color: #ffffff; text-decoration: none;">Average Rent</a></li>
        </ul>
    </nav>
</header>

<?php include 'connectdb.php'; ?>

<h1>Choose the 4-digit Code Associated with Your Rental Group</h1>
<h2>Codes</h2>
<form action="getrentals.php" method="post">
    <?php include 'getdata.php'; ?>
    <input type="submit" value="Edit">
</form>

<footer style="background-color: #333333; color: #ffffff; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%;">
    <p>&copy; 20220300 Muyi Omorogbe</p>
</footer>

<?php $connection = NULL; ?>
</body>
</html>

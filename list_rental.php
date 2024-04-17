<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose Your Rental Group</title>
    <link rel="stylesheet" href="style.css"> <!-- Make sure the path to your CSS file is correct -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
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

<?php include 'connectdb.php'; ?>

<h1>Choose the 4-digit code associated with your Rental Group</h1>
<h2>Codes</h2>
<form action="getlist.php" method="post">
    <?php include 'getdata.php'; ?>
    <input type="submit" value="View">
</form>

<footer>
    <p>&copy; 20220300 Muyi Omorogbe</p>
</footer>

<?php $connection = NULL; ?>
</body>
</html>

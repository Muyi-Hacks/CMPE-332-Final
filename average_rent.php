<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Rent</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Average Rent</h1>
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
    <main>
        <?php include 'connectdb.php'; ?>
        <?php include 'get_avg_rent.php'; ?>
        <!-- The above PHP scripts should output content here in the main section -->
    </main>
    <footer>
        <p>&copy; 20220300 Muyi Omorogbe</p>
    </footer>
</body>
</html>
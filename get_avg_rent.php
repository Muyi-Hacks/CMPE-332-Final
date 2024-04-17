<?php
// Alternte Answer 1
// $query = "SELECT 
//         ( SELECT AVG(cost) FROM Property 
//             WHERE propertyID IN 
//             ( SELECT houseID FROM House ) ) AS Houses, 
//             ( SELECT AVG(cost) FROM Property 
//             WHERE propertyID IN 
//             ( SELECT aptID FROM Apartment ) ) AS Apartments, 
//             ( SELECT AVG(cost) FROM Property 
//             WHERE propertyID IN 
//             ( SELECT roomID FROM Room ) ) AS Rooms 
//             FROM Property 
//             LIMIT 1;";

$query = "SELECT 
    AVG(CASE WHEN h.houseID IS NOT NULL THEN p.cost ELSE NULL END) AS Houses,
    AVG(CASE WHEN a.aptID IS NOT NULL THEN p.cost ELSE NULL END) AS Apartments,
    AVG(CASE WHEN r.roomID IS NOT NULL THEN p.cost ELSE NULL END) AS Rooms
FROM 
    Property p
LEFT JOIN 
    House h ON p.propertyID = h.houseID
LEFT JOIN 
    Apartment a ON p.propertyID = a.aptID
LEFT JOIN 
    Room r ON p.propertyID = r.roomID;";

$result = $connection->query($query);

// Start table and add header row for clarity
echo "<table border='1'>";
echo "<tr><th>Houses</th><th>Apartments</th><th>Rooms</th></tr>";

// Loop through rows of the result set
while ($row = $result->fetch()) {
    // Each row in the table
    echo "<tr>";
    echo "<td>".$row["Houses"]."</td>";
    echo "<td>".$row["Apartments"]."</td>";
    echo "<td>".$row["Rooms"]."</td>";
    echo "</tr>";
}

// End the table
echo "</table>";
?>

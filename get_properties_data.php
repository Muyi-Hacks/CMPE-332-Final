<?php
$query = "SELECT *, P.fname as OwnerFName, P.lname as OwnerLName, K.fname as ManagerFName, K.lname as ManagerLName, O.propertyID as prop  
from Person P 
join Owns O on P.personID = O.ownerID
JOIN Property H ON H.propertyID = O.propertyID
LEFT JOIN Manages M ON H.propertyID = M.propertyID
LEFT JOIN Manager L ON M.managerID = L.managerID
LEFT JOIN Person K ON L.managerID = K.personID;";
$result = $connection->query($query);

// Start table and add header row for clarity
echo "<table border='1'>";
echo "<tr><th>Property ID</th><th>Owner Name</th><th>Manager Name</th></tr>";

// Loop through rows of the result set
while ($row = $result->fetch()) {
    // Each row in the table
    echo "<tr>";
    echo "<td>".$row["prop"]."</td>"; // Here we show the propertyID
    echo "<td>".$row["OwnerFName"]." ".$row["OwnerLName"]."</td>";
    echo "<td>".(!empty($row["ManagerFName"]) ? $row["ManagerFName"]." ".$row["ManagerLName"] : "No Manager")."</td>";
    echo "</tr>";
}

echo "</table>";
?>




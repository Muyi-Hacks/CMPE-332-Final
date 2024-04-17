<?php
$query = "select * from RentalGroup";
$result = $connection->query($query);
echo "Who are you looking up? </br>";
while ($row = $result->fetch()) {
	 echo '<input type="radio" name="code" value="';
	 echo $row["code"];
	 echo '">' . $row["code"] . " " . $row[""] . "<br>";
}
?>
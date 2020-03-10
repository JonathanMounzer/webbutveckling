<?php
require 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM Biljetter");
print '<P>';
while($row = mysqli_fetch_array($result)) {
	print $row['ssn']. '<P>';
	print $row['firstName']. '<P>';
	print $row['lastName']. '<P>';
	print $row['email']. '<P>';
	print $row['event']. '<P>';
	print $row['tickets']. '<P>';
	print '<P>';
}
mysqli_close($conn);
?>

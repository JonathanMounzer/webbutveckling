<?php
include 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM Ansok");
print '<P>';
while($row = mysqli_fetch_array($result)) {
	print $row['id']. '<P>';
	print '<P>';
	print $row['fname']. '<P>';
	print '<P>';
	print $row['lname']. '<P>';
	print '<P>';
	print $row['email']. '<P>';
	print '<P>';
	print $row['section']. '<P>';
	print '<P>';

}


mysqli_close($conn);
?>

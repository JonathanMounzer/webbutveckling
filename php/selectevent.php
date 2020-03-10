<?php
require 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM Events");
print '<P>';
while($row = mysqli_fetch_array($result)) {
	print $row['id']. '<P>';
	print '<P>';
	print $row['info']. '<P>';
	print '<P>';
	print '<img src="data:image;base64,'. base64_encode($row['pic']) .'" />';
	print '<P>';
}
mysqli_close($conn);
?>

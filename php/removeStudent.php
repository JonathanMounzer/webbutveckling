<?php
	require 'connect.php';

	$ssn = $conn->real_escape_string($_POST['ssn']);

	$sql = "DELETE FROM student WHERE ssn ='" . $ssn . "'";
	$result = mysqli_query($conn, $sql);


	$count = mysqli_affected_rows($conn);

	if($count >= 1){
		echo "student info deleted!";
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php');
	}else{
		$error = "Invalid SSN";
		echo $error;
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php');
	}
	mysqli_close($conn);
    exit();
 ?>

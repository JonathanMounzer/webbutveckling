<?php
	require 'connect.php';

	$ssn = $conn->real_escape_string($_POST['ssn']);
	$firstname = $conn->real_escape_string($_POST['firstname']);
	$lastname = $conn->real_escape_string($_POST['lastname']);
	$section = $conn->real_escape_string($_POST['section']);


	$sql = "UPDATE student SET firstname ='$firstname', lastname = '$lastname', section = '$section'
			WHERE ssn = '$ssn'";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_affected_rows($conn);

	if($count >= 1){
		echo "Student updated!";
		header("Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php");
	}else{
		$error = "The ssn you used is invalid";
		echo $error;
		echo mysqli_error($conn);
		header("Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php");
	}
	mysqli_close($conn);
    exit();
 ?>

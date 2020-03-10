<?php
	require 'connect.php';

	$ssn = $conn->real_escape_string($_POST['ssn']);
	$firstname = $conn->real_escape_string($_POST['firstname']);
	$lastname = $conn->real_escape_string($_POST['lastname']);
	$section = $conn->real_escape_string($_POST['section']);

	$sql= "INSERT INTO student(ssn, firstname, lastname, section)
		VALUES ('" . $ssn . "', '" . $firstname . "', '" . $lastname . "', '" . $section . "')";
	$result = mysqli_query($conn, $sql);

		if (!$conn) {
    	printf("Error: %s\n", mysqli_error($conn));
   		exit();
	}
	if ($result) {
    echo "Student added!";
    header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php');
} else {
    echo mysqli_error($conn);
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/main.php');
}
	mysqli_close($conn);
	exit();
?>

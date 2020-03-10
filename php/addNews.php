<?php
	require 'connect.php';

	$title = $conn->real_escape_string($_POST['title']);
	$content = $conn->real_escape_string($_POST['content']);


	$sql = "INSERT INTO news (title, content)
				VALUES ('". $title . "', '" . $content . "')";

	$result = mysqli_query($conn, $sql);

		if (!$conn) {
    	printf("Error: %s\n", mysqli_error($conn));
   		exit();
	}

	if ($result) {
    echo "Newspost has been posted!";
} else {
    echo mysqli_error($conn);
		echo "Något gick fel!";
}
	mysqli_close($conn);
	exit();
?>

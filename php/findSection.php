<link rel="stylesheet" type="text/css" href="../css/findStudentStyle.css">

<?php
	require 'connect.php';

	$section = $conn->real_escape_string($_POST['section']);

	$sql = "SELECT * FROM student WHERE section = '" . $section . "'";
	$result = mysqli_query($conn, $sql);

	if (!$conn) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
	}

	$count = mysqli_num_rows($result);

    echo "<table>";
    echo "<tr><th>Id</th><th>ssn</th><th>firstname</th><th>lastname</th><th>section</th></tr>";

    while($row = mysqli_fetch_assoc($result)){

    	echo "<tr><td>";
    	echo $row['id'];
    	echo "</td>";

    	echo "<td>";
    	echo $row['ssn'];
    	echo "</td>";

    	echo "<td>";
    	echo $row['firstname'];
    	echo "</td>";

    	echo "<td>";
    	echo $row['lastname'];
    	echo "</td>";

    	echo "<td>";
    	echo $row['section'];
    	echo "</td></tr>";
    }
    echo "</table>";

    mysqli_close($conn);
 ?>

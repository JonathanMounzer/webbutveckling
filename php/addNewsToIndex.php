<?php
	require 'connect.php';

	$sql = "SELECT * FROM news ORDER BY Id DESC LIMIT 3";
	$result = mysqli_query($conn, $sql);

	if (!$conn) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}

    while($row = mysqli_fetch_assoc($result)){

								echo "<h1>".$row['title']."</h1>";
								echo "<p>".$row['content']."</p>";
    }

    mysqli_close($conn);
 ?>

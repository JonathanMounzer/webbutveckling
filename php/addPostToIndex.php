<?php
	require 'connect.php';
    $table = 'event';
    $column ='id';

	$sql = "SELECT * FROM event ORDER BY id DESC LIMIT 3";
	$result = mysqli_query($conn, $sql);

	if (!$conn) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}



    while($row = mysqli_fetch_array($result)){




								print '<div class="dark">';
								if($row['picture'] == null){
									print '<p>Bilden är null</p>';
									}else{
										print '<p>Bilden är giltig</p>';
										}
								print '<h1>'.$row['title'].'</h1>';
								print '<p>'.$row['date'].'</p>';
								print '<p>'.$row['info'].'</p>';
								print '</div>';


    }

    mysqli_close($conn);
 ?>

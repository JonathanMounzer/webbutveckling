<?php
session_start();
$errors = array();
	require 'connect.php';

	if (isset($_POST['submit'])) {

		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$info = mysqli_real_escape_string($conn, $_POST['info']);

		$result = mysqli_query($conn, $sql);

	if($_FILES["picture"]["size"] == 0){
			$picture = null;
			print 'Bilden är null!  ';
		}else{
			$picture = addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
		}


		if (empty($title) OR empty($info)) {
	array_push($errors, "Skriv innehåll och titel!");
}

if ($result == 0) {
	$query = "INSERT INTO event(title, info, picture) VALUES('$title','$info', '$picture')";
	echo "Eventet har lagrats i databasen!";
		}
			 else {
				array_push($errors, "Ett fel påträffades, försök snart igen!");
				print 'Försöket misslyckades.';
			}


	mysqli_close($conn);
	exit();
}
?>

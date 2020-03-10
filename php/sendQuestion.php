<?php
$errors = array();
require 'connect.php';

if (isset($_POST['upload'])) {

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$question = mysqli_real_escape_string($conn, $_POST['question']);

	if (empty($question) OR empty($name)) {
		array_push($errors, "Fyll i båda fälten!");
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/faq.php');
	}
	if (count($errors) == 0) {
		$query = "INSERT into forum(name, question) values('$name', '$question')";

		if (mysqli_query($conn, $query)) {
			echo " Din fråga har skickats!";
			header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/faq.php');
		}else {
			array_push($errors, "Error: Testa igen!");
			header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/faq.php');
		}
	}
}
?>

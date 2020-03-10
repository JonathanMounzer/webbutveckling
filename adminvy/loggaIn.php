<?php
	session_start();
	require '../php/connect.php';

	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);

	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

	if($count >= 1){
		header('Location: main.php');
		$_SESSION['username'] = $_POST['username'];
	}else{
		echo "Fel användarnamn/lösenord!";
		    header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/adminvy/loginPage.php');
	}
	mysqli_close($conn);
	exit();
 ?>

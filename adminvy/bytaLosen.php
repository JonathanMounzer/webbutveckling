<?php
session_start();
$errors = array();
$errorsTwo = array();
require '../php/connect.php';

if (isset($_POST['upload'])) {

	$username= mysqli_real_escape_string($conn, $_POST['username']);
	$currentPassword = mysqli_real_escape_string($conn, $_POST['currentPassword']);
	$newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
	$newPasswordAgain = mysqli_real_escape_string($conn, $_POST['newPasswordAgain']);


 if($newPassword != $newPasswordAgain ){
		array_push($errors, "Nya lösenordet matchar inte!");
	}
	if (count($errors) == 0) {
		$queryCheck = "SELECT password FROM admin WHERE password = '$currentPassword'";
		$queryCheck = "SELECT username FROM admin WHERE username = '$username'";
		$result = mysqli_query($conn, $queryCheck);
		if(mysqli_num_rows($result) > 0){
			$query = "UPDATE `admin` SET password = '$newPassword' WHERE username = '$username'";
			if (mysqli_query($conn, $query)) {
				array_push($errors, "Lösenord är nu bytat!");
			}else {
		array_push($errors, mysqli_error($conn));
	}
}else{
	array_push($errors, "Lösenord eller användarnamn matchar inte!");
}

}
}

if (isset($_POST['uploadUser'])) {

	$currentUsername = mysqli_real_escape_string($conn, $_POST['currentUsername']);
	$newUsername = mysqli_real_escape_string($conn, $_POST['newUsername']);
	$currentPassword = mysqli_real_escape_string($conn, $_POST['currentPassword']);


	if (count($errorsTwo) == 0) {
		$queryCheck = "SELECT password FROM admin WHERE password = '$currentPassword'";
		$result = mysqli_query($conn, $queryCheck);
		if(mysqli_num_rows($result) > 0){
			$query = "UPDATE `admin` SET username = '$newUsername' WHERE username = '$currentUsername'";

			if (mysqli_query($conn, $query)) {

				echo "användarnamnet har bytats!";
			}else {
				array_push($errorsTwo, mysqli_error($conn));
			}
		}else{
			array_push($errorsTwo, "Fel lösenord eller användarnamn!");
		}

	}
}
?>
<html>
<link rel="stylesheet" type="text/css" href="css/adminStyle.css">
<head>
	<title>ADMIN</title>
	<?php require 'includes/includeMeta.php';?>
</head>
<Header id="header" class="container headcontainer" style="text-align:center"><p class="Admin">Lundakarnevalen Admin</p></Header>
<?php if(isset($_SESSION['username'])){
	include 'includes/includeBytaLosen.php';
} else{
	header("Location: loggaIn.php");
	exit;
}
?>
</html>

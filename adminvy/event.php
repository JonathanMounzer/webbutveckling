<?php
session_start();
$errors = array();
require '../php/connect.php';

if (isset($_POST['upload'])) {

	$content = mysqli_real_escape_string($conn, $_POST['content']);

	if($_FILES["pic"]["size"] == 0){
		$pic = null;
	}else{
		$pic = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
	}

	if (empty($content)) {
		array_push($errors, "Innehåll måste vara ifyllt!");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO `event` VALUES(DEFAULT, '$content', '$pic')";

		if (mysqli_query($conn, $query)) {
			array_push($errors, "Eventet är upplagt");
		}else {
			array_push($errors, mysqli_error($conn));
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lundakarnevalen - ADMIN</title>
	<?php require 'includes/includeMeta.php';?>
</head>
<Header id="header" class="container headcontainer" style="text-align:center"><p class="logoTextAdmin">Lundakarnevalen Admin</p></Header>
<?php if(isset($_SESSION['username'])){
	include 'includes/includeEvent.php';
} else{
	header("Location: loggaIn.php");
	exit;
}
?>
</html>

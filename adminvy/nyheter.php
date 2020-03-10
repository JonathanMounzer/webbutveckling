<?php
session_start();
$errors = array();
require '../php/connect.php';

if (isset($_POST['upload'])) {
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	if($_FILES["pic"]["size"] == 0){
		$picture = null;
	}else{
		$picture = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
	}

	if (empty($title) OR empty($content)) {
		array_push($errors, "Fyll i innehåll OCH titel!");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO `mainNews` VALUES(DEFAULT, '$title', '$content', '$pic')";

		if (mysqli_query($conn, $query)) {
			array_push($errors, "Nyheter är uppdaterat!");
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
	include 'includes/includeNyheter.php';
} else{
	header("Location: loggaIn.php");
	exit;
}
?>
</html>

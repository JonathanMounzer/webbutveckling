<?php
require 'connect.php';

$firstName = filter_input(INPUT_POST, 'firstname');
$lastName = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$section = filter_input(INPUT_POST, 'section');
$sql = "INSERT into ansok values(DEFAULT,'$firstName', '$lastName', '$email', '$section')";
$check = "SELECT * FROM ansok where section = '$section'";
$checkApplicant = "SELECT * FROM ansok where email = '$email' and section = '$section'";

if ($_POST["firstname"] == "" or $_POST["lastname"] == "" or $_POST["section"] == "") {
	print "Fyll i alla fält!";
} else {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = mysqli_query($conn, $check);
		$resultApplicant = mysqli_query($conn, $checkApplicant);
		$applicantNumRows = mysqli_num_rows($resultApplicant);
		$numRows = mysqli_num_rows($result);
		if($applicantNumRows < 1){
			if($numRows < 5){
				if (mysqli_query($conn, $sql)) {
					print "Din ansökan har skickats!";
					header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/ansök.php');
				}

			}else{
				print "$section full, vänligen prova en annan sektion!";
				header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/ansök.php');
			}
		} else {
			print "Du har redan ansökt till $section";
			header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/ansök.php');
		}
	}else {
		print "Dubbelkolla mail!!";
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/ansök.php');
	}
}
mysqli_close($conn);
?>

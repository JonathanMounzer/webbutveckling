<?php
require 'connect.php';

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$event = filter_input(INPUT_POST, 'event');
$tickets = filter_input(INPUT_POST, 'tickets');

$sql = "INSERT INTO ticket values(DEFAULT,'$firstname', '$lastname', '$email', '$event', '$tickets')";
$check = "SELECT tickets from ticket where `event` = '$event'";


if ($_POST["firstname"] == "" or $_POST["lastname"] == "" or $_POST["event"] == "") {
	print "Fyll i alla fält";

} else {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = mysqli_query($conn, $check);

		while($row = mysqli_fetch_array($result)) {
			$sum += $row['tickets'];
		}
		$total = ($sum + $tickets);
		if(($total) <= 10){
			if (mysqli_query($conn, $sql)) {
				print "Dina biljetter till $event är nu reserverade";
				header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/reserverabiljetter.php');
			}

		} else {
			print " $event är fullt. Vänligen prova annan event eller mindre antal biljetter!";
			header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/reserverabiljetter.php');
		}

	} else {
		print "Dubbelkolla email och fälten!";
		header('Refresh: 5; URL=http://www.grupp19.icsweb.se/karneval/reserverabiljetter.php');
	}
}
mysqli_close($conn);
?>

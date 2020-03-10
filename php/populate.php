<?php
require 'connect.php';

$sql7 = "INSERT into forum(name, question) values('test', 'hej fråga')";

	if (mysqli_query($conn, $sql7)) {
		print "admin skapad";
	} else {
		$message = "Något gick fel, prova igen!";
	}


/*
$sql = "insert into grupp18Biljetter values(DEFAULT,'lyuss', 'lasdasd', 'a@b.c', 'operan', '5')";

	if (mysqli_query($conn, $sql)) {
		print "reserviert 5 billes";
	} else {
		$message = "Något gick fel, prova igen!";
	}

$sql = "insert into grupp18Ansok values(DEFAULT,'totte', 'eek', 't@e', 'biljon')";

	if (mysqli_query($conn, $sql)) {
		$message = "Din ansökan är nu skickad!";
	} else {
		$message = "Något gick fel, prova igen!";
	}
*/
mysqli_close($conn);

?>

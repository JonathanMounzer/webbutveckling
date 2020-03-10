<?php
define('DB_USER','d36234-db19'); //d36234-db19
define('DB_PASSWORD','OUjL42u3L'); //OUjL42u3L
define('DB_HOST','mysqlsemi1.space2u.com');
define('DB_NAME','d36234_db19'); //d36234_db19

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$conn){
	die("Connection Failed " . mysqli_connect_error());
}
//print "Connection Successful!"
?>

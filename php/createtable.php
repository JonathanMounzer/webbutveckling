<?php
require 'connect.php';

$sql1 = "CREATE TABLE `forum` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`title` varchar(100) NOT NULL,
`name` VARCHAR(50) NOT NULL,
`question` text NOT NULL,
`postedDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql1)) {
    print "Forum succesfully created!";
} else {
    print "Error creating table: " . mysqli_error($conn);
}

?>

<?php
require 'connect.php';
$section = filter_input(INPUT_POST, 'section');
$result = mysqli_query($conn,"SELECT * FROM ansok where `section` = '$section'");

$numOfRows = mysqli_num_rows($result);
print $numOfRows.'/5 ansökningar kvar';
mysqli_close($conn);
?>

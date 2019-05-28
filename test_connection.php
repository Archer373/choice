 
<?php
include("includes/connection.php");

// 2. Get results from database

$subjects_query = "SELECT * from subjects";
$all_subjects = $connection -> query($subjects_query);
while ($subject = $all_subjects -> fetch()) {
	echo $subject['id']." - " . $subject['name'] . "<br/>";
}

?>



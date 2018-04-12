<?php 

	$picid = $_POST['id'];
	include 'inc/db.inc.php';
	//$approved = 1;

	$query = "DELETE FROM pics WHERE pid='$picid'";
	$query_run = mysqli_query($con, $query);

	if($query_run) {
		echo 'deleted';
	} else {
		echo 'oops';
	}
 ?>
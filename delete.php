<?php
include 'database.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$con->query("DELETE FROM course_log WHERE id=".$id);
	header("location: dashboard.php");
}


?>
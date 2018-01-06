<?php
session_start();
include('config/database.php');
$_SESSION['username']=="";
session_unset();
session_destroy();
$_SESSION['err']="You have successfully logout";
header("location: login.php");

?>
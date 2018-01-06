<?php include 'inc/head.php';?>

<?php
	// if (isset($_SESSION['dept'])=="") {
	// 	header("location: .");
	// }
?>

	<div class="main_area fix">
		<?php include 'inc/sidebar.php';?>
		<div class="main fix">
			<?php
				$time = $_SESSION['c_time'];
				if(isset($_GET['roll'])){
					if($_GET['present']=='yes'){
						$_SESSION['yes']=$_SESSION['yes']+1;
						$con->query("INSERT INTO std_log(std_id, action, date, course_id, date_id, month_id) VALUES(".$_GET['roll'].", 1, ".$time.", ".$_GET['course_id'].", 1, 10)");		
					}else{
						$_SESSION['no']=$_SESSION['no']+1;
						$con->query("INSERT INTO std_log(std_id, action, date) VALUES(".$_GET['roll'].", 0, ".$time.")");
					}
					$sql = "SELECT * FROM std WHERE roll > ".$_GET['roll']." ORDER BY roll ASC LIMIT 1";
				}else{
					$_SESSION['yes'] = 0;
					$_SESSION['no'] = 0;
					$sql = "SELECT * FROM std ORDER BY roll ASC LIMIT 1";	
				}
				$query = $con->query($sql);		
				$row=$query->fetch_assoc();
				$num = $query->num_rows;
				if($num==0){
					$std = "SELECT * FROM std";

					$q = $con->query($std);
					
					$total_std = $q->num_rows;

					$con->query("INSERT INTO course_log(date, course_title, course_code, total_std, present, absent) VALUES(".$time.", '".$_SESSION['c_title']."', '".$_SESSION['c_code']."', ".$total_std.", ".$_SESSION['yes'].", ".$_SESSION['no']." )");
					header('location: dashboard.php');
				}

			?>


			<?php include 'inc/std.php';?>
		</div>
	</div>


<?php include 'inc/footer.php';?>
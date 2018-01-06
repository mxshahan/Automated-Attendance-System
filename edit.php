<?php include 'inc/head.php';?>
<?php
	$_SESSION['err'] = "";
	if(isset($_POST['update'])){
		if(empty($_POST['course_title']) || empty($_POST['course_code'])){
			$_SESSION['err'] = "Course title or course code can not be empty :/";
		}else{
			$con->query("UPDATE course_log SET course_title='".$_POST['course_title']."', course_code='".$_POST['course_code']."' WHERE id=".$_GET['id']);
			header("location: dashboard.php");
		}
	}
?>

	<div class="main_area fix">
		<?php include 'inc/sidebar.php';?>
		<div class="main fix">
			<div class="std fix" id="std">
				<div class="std_info_head fix">
					<h3 class="fl std_name" id="std_name">Attendence Information</h3>
				</div>

				<div class="sth_info fix dashboard_info">
					<?php 
						$query = $con->query("SELECT * FROM course_log WHERE id=".$_GET['id']."");
						$row = $query->fetch_assoc();

						$date = date('d M Y', $row['date']);
						$time = date("h:i:sa", $row['date']);
					?>
					<form action="" method="POST" enctype="multipart/form">
						<table>
							<tr>
								<th>Date</th>
								<td><?php echo $date?></td>
							</tr>
							<tr>
								<th>Time</th>
								<td><?php echo $time?></td>
							</tr>
							<tr>
								<th>Course Code</th>
								<td><input type="text" name="course_code" value="<?php echo $row['course_code']?>"></td>
							</tr>
							<tr>
								<th>Course Title</th>
								<td><input type="text" name="course_title" value="<?php echo $row['course_title']?>"></td>
							</tr>
							<tr>
								<th>Total Students</th>
								<td><?php echo $row['total_std']?></td>
							</tr>
							<tr>
								<th>Present</th>
								<td><?php echo $row['present']?></td>
							</tr>
							<tr>
								<th>Absent</th>
								<td><?php echo $row['absent']?></td>
							</tr>
						</table>
						<span style="font-size:14px;color:#f01"><?php echo $_SESSION['err']?></span>
						<input type="submit" name="update" value="Update">
					</form>
				</div>
			</div>	
		</div>
	</div>


<?php include 'inc/footer.php';?>

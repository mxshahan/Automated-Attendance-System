<?php include 'inc/head.php';?>
<?php
	$_SESSION['err'] = "";
?>

<?php
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];
		$dept = $_POST['dept'];
		$level = $_POST['level'];


		$query = $con->query("INSERT INTO `std` (`roll`, `reg`, `name`, `level`, `dept`) VALUES ('$roll', '$reg', '$name', '$level', '$dept')");
		if($query){
			$_SESSION['err'] = "Successfully inserted";
		}else{
			$_SESSION['err'] = "ERROR Found";
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
					<form action="" method="POST" enctype="multipart/form">
						<table>
							<tr>
								<th>Name</th>
								<td><input type="text" name="name" required></td>
							</tr>
							<tr>
								<th>Roll</th>
								<td><input type="text" name="roll" required></td>
							</tr>
							<tr>
								<th>Registration</th>
								<td><input type="text" name="reg" required></td>
							</tr>
							<tr>
								<th>Department</th>
								<td>
									<select name="dept" required>
										<option value="">Select Department</option>
										<option value="CSE">CSE</option>
										<option value="ECE">ECE</option>
										<option value="EEE">EEE</option>
										<option value="BBA">BBA</option>
										<option value="ENG">ENG</option>
										<option value="LLB">LLB</option>
									</select>
								</td>
							</tr>
							</tr>
							<tr>
								<th>Level</th>
								<td>
									<select name="level" required>
										<option value="">Select Level</option>
										<option value="1-1">1-1</option>
										<option value="1-2">1-2</option>
										<option value="2-1">2-1</option>
										<option value="2-2">2-2</option>
										<option value="3-1">3-1</option>
										<option value="3-2">3-2</option>
										<option value="4-1">4-1</option>
										<option value="4-2">4-2</option>
									</select>
								</td>
						</table>
						<span style="font-size:14px;color:#f01"><?php echo $_SESSION['err']?></span>
						<input type="submit" name="add" value="Add Student">
					</form>
				</div>
			</div>	
		</div>
	</div>




<?php include 'inc/footer.php';?>

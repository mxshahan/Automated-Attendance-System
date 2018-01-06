<?php
	if (isset($_SESSION['dept'])!="") {
		header("location: attendence.php");
	}
	if(isset($_POST['submit'])){
		if(empty($_POST['dept'])||empty($_POST['c_title'])){
			$_SESSION['err'] = "Department or Course Title Cannot Be Empty :/";
		}else{
			$_SESSION['dept'] = $_POST['dept'];
			$_SESSION['c_code'] = $_POST['c_code'];
			$_SESSION['c_title'] = $_POST['c_title'];
			$_SESSION['c_time']= time();
			header("location: attendence.php");
		}
	}
?>

<div class="std fix" id="std">
	<div class="std_info_head fix">
		<h3 class="fl std_name" id="std_name">Wizard</h3>
	</div>
	<div class="std_info wizard fix">
		<form action="" method="POST" enctype="multipart/form">
			<label>Department</label>
			<select name="dept" required>
				<option value="">SELECT</option>
				<option value="CSE">CSE</option>
			</select>
			<label>Course Code</label>
			<select name="c_code" required>
				<option value="">SELECT</option>
				<option value="CSE-301">CSE-301</option>
				<option value="CSE-302">CSE-302</option>
				<option value="CSE-303">CSE-303</option>
				<option value="CSE-304">CSE-304</option>
				<option value="CSE-305">CSE-305</option>
				<option value="CSE-306">CSE-306</option>
			</select>
			<label>Course Title</label>
			<input required type="text" name="c_title">
			<input type="submit" name="submit" value="SET">
			<span style="font-size:14px;color:#f01"><?php echo $_SESSION['err']?></span>
		</form>
		<h2 style="padding: 10px;overflow: hidden;margin-top:15px;font-size: 15px;color:#f01">Please Complete the wizard before taking attendence</h2>
	</div>
</div>	

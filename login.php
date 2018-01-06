<?php 
	session_start();
	include 'database.php';
	$_SESSION['err'] = "";

	if(isset($_SESSION['username'])!=""){
		header("location: .");
	}

	function validate($data){
		$data = trim($data);
		$data = htmlentities($data);
		$data = htmlspecialchars($data);
		return $data;
	}
		

	if(isset($_POST['login'])){
		$user = validate($_POST['email']);
		$pass = md5(validate($_POST['pass']));
		$sql = "SELECT * FROM admin WHERE email='".$user."' && password='".$pass."'";
		$query = $con->query($sql);
		$row = $query->fetch_assoc();
		$num = $query->num_rows;
		if($num>0){
			$_SESSION['username'] = $user;
			$_SESSION['id'] = $row['id'];
			header("location: .");
		}else{
			$_SESSION['err'] = "<p>Username or Password Incorrect</p>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Attendance | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main_area fix">
		<div class="main fix" style="margin:30px auto;width: 350px;box-shadow: 1px 1px 3px 2px #dadada;background-color: #efefef">
			<div class="std fix" id="std">
				<div class="std_info_head fix">
					<h3 class="std_name" id="std_name">Teacher Login</h3>
				</div>
				<div class="std_info login fix">
					<form action="" method="POST" enctype="multipart/form">
						<label>Email:</label><br/>
						<input type="email" name="email" placeholder="Email" required="required"><br/>
						<label>Password:</label><br/>
						<input type="password" name="pass" placeholder="Password" required="required"><br/><br/>
						<input type="submit" name="login" value="Login">
						<span style="font-size:14px;color:#f01"><?php echo $_SESSION['err']?></span>
					</form>
				</div>
			</div>	
		</div>
	</div>


</body>
</html>
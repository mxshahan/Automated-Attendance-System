<?php $_SESSION['c_code'] = ""?>
<?php include 'inc/head.php';?>
<?php
	// if(isset($_SESSION['dept'])==''){
	// 	header('location: .');
	// }
?>


	<div class="main_area fix">
		<?php include 'inc/sidebar.php';?>

		<div class="main fix">

			<div class="std fix" id="std">
				<div class="std_info_head fix">
					<h3 class="fl std_name" id="std_name">Attendence Information</h3>
				</div>
				<div class="std_info fix dashboard_info">
					<table>
						<thead>
							<td>Date</td>
							<td>Time</td>
							<td>Course Code</td>
							<td>Course Title</td>
							<td>Total Students</td>
							<td>Present</td>
							<td>Absent</td>
							<td>Action</td>
						</thead>
						<tbody>
							<?php 
							date_default_timezone_set("Asia/Dhaka");
							$q = $con->query("SELECT * FROM course_log WHERE course_code='".$_SESSION['c_code']."'");
							while($res=$q->fetch_assoc()){
								$date = date('d M Y', $res['date']);
								$time = date("h:i:sa", $res['date']);
							?>
							<tr>
								<td><?php echo $date?></td>
								<td><?php echo $time?></td>
								<td><?php echo $res['course_code']?></td>
								<td><?php echo $res['course_title']?></td>
								<td><?php echo $res['total_std']?></td>
								<td><?php echo $res['present']?></td>
								<td><?php echo $res['absent']?></td>
								<td class="actionBar">
									<a id="editBtn" href="edit.php?id=<?php echo $res['id']?>">
										<i class="fa fa-edit"></i>
									</a>
									<a id="deleteBtn" onclick="confirmBox(<?php echo $res['id']?>)"><i class="fa fa-close"></i></a>
								</td>

							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
	</div>

	<div class="model" id="model">
		<div class="confirmBox">
			<h3>Do you want to delete the item?</h3>
			<a id="yesBtn">YES</a>
			<a id="noBtn">NO</a>
		</div>
	</div>


<script type="text/javascript">
	function confirmBox(id){
		var model = document.getElementById('model');
		model.style = "display:block;opacity:1;";
		var yesBtn = document.getElementById('yesBtn');
		var noBtn = document.getElementById('noBtn');
		yesBtn.onclick = function(){
			window.location.href="delete.php?id="+id+"";
		}
        noBtn.onclick = function(){
            model.style = "display:none;opacity:0";
        }
        window.onclick = function(event){
            if(event.target == model){
                model.style.display = "none";
            }
        }
	}

</script>

<?php include 'inc/footer.php';?>
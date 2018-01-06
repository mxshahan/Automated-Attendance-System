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
					<?php 
						$sql = "SELECT * FROM course WHERE aid=".$_SESSION['id'];
						$query = $con->query($sql);
						$num = $query->num_rows;
						if($num==0){
							echo '<span>No Data Available</span>';
						}else{

					?>
					<table>
					<?php 
							while($row = $query->fetch_assoc()){
							echo '<tr>';
							echo '<td><a href="./dashboard.php?course_id='.$row['id'].'&course_code='. urlencode($row['c_code']).'" style="padding:5px;color:#325521;font-size:14px;">'.$row['c_code'].'</a></td>';
							echo '<td><b><a href="./dashboard.php?course_id='.$row['id'].'&course_code='.urlencode($row['c_code']).'" style="padding:5px;color:#070;font-size:14px;">'.$row['c_title'].'</a></b></td>';
							echo '</tr>';

						}
					}
					?>
					</table>
				</div>
			</div>	
<!-- 
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> -->

<!-- <p>Date: <input type="text" id="datepicker"></p> -->
			
			<?php
				if(isset($_GET['course_id'])){
					include 'inc/monthly-data.php';
				}
			?>
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
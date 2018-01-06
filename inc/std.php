			<div class="std fix" id="std">
				<div class="std_info_head fix">
					<h3 class="fl std_name" id="std_name"><?php echo $row['name']?></h3>
					<h3 class="fr std_roll" id="std_roll"><?php echo $row['roll']?></h3>
				</div>
				<div class="std_info fix">
					<table>
						<tr>
							<td><label>Level: </label></td>
							<td id="level"><?php echo $row['level']?></td>
						</tr>
						<tr>
							<td><label>Department: </label></td>
							<td id="dept"><?php echo $row['dept']?></td>
						</tr>
						<tr>
							<td><label>Registration No: </label></td>
							<td id="reg"><?php echo $row['reg']?></td>
						</tr>
					</table>

					<div class="action">
						<a href="attendence.php?roll=<?php echo $row['roll']?>&present=yes" id="yes" class="fl">Yes</a>
						<a href="attendence.php?roll=<?php echo $row['roll']?>&present=no" id="no" class="fl">No</a>
					</div>
				</div>
			</div>	
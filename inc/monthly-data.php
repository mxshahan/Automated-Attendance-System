			<div class="std fix" id="std">
				<div class="std_info_head fix">
					<p class="fl">Current Month - <?php echo date('F - Y')?></p>
					<p class="fr">Course Code - <?php echo $_GET['course_code']?></p>
				</div>
				<div class="std_info">
					<div class="fr" style="display: block;overflow: hidden;">
						<select>
							<option value="-1">Select Month</option>
							<?php
							$q = $con->query("SELECT * FROM month");
							while($row=$q->fetch_assoc()){
								if(date('F')==$row['month']){
									echo '<option selected>'.$row['month'].'</option>';
									continue;
								}
								?>
								<option value="<?php echo $row['month']?>"><?php echo $row['month']?></option>
								<?php
							}
							?>

						</select>
						<select>
							<option value="-1">Select Year</option>
							<?php
							$q = $con->query("SELECT * FROM year");
							while($row=$q->fetch_assoc()){
								if(date('Y')==$row['year']){
									echo '<option selected value="'.$row['year'].'">'.$row['year'].'</option>';
									continue;
								}
								?>
								<option value="<?php echo $row['year']?>"><?php echo $row['year']?></option>
								<?php
							}
							?>

						</select>	
					</div>
					<div class="info">
						<?php
						$key = array();
						$value = array();
						$data = array($key, $value);
						$s = "SELECT * FROM std_log WHERE month_id=".intval(date('m'))." ORDER BY std_id ASC";
						$q = $con->query($s);
						// $loc = 0;
						while($r = $q->fetch_assoc()){
							$std = $r['std_id'];
							if(in_array($std, $key)){
								$loc = array_search($std, $key);
								// echo '<br/>ID = '.$r['id'].' Action:'. $r['action'];
								if($r['action']=='1'){
									$value[$loc]=intval($value[$loc])+1;
									// echo $r['id'].'<br/>'.$value[$loc]; 
									// array_slice($value, $loc, 0, )
								}else{
									continue;
								}
							}else{
								array_push($key, $std);
								if($r['action']==1){
									array_push($value, 1);
								}else{
									array_push($value, 0);
								}
							}

						}

						?>

						<table>
							<thead>
								<tr>
									<td>Student ID</td>
									<td>Present</td>
									<td>Absent</td>
									<td>Action</td>
								</tr>
							</thead>
						<?php 
							echo '<tbody>';
							
							for($i=0;$i<sizeof($key);$i++){
								echo '<tr>';
								echo '<td>'.$key[$i].'</td>';
								echo '<td>'.$value[$i].'</td>';
								echo '<td>'.$value[$i].'</td>';
								echo '<td><a href="">View Details</a></td>';
								echo '</tr>';
							}
							echo '<tbody>';

						
						?>
						</table>
					</div>
				</div>
			</div>
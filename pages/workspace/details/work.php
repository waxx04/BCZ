<?php
/* MySQL DB Connect*/
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_db = 'bluedb';
	
	$workid = 0;
	$workno = 0;
	$type = '';
	$status = 0;
	$budget = 0;
	$received = 0;
	$balance = 0;
	$dep = '';
	$prefworkers = '';
	$workers = '';
	
	$lastWork = 0;
	$print = 0;

	$TReceived = 0;
	$TBudget = 0;
	$TBalance = 0;
	
	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db)){
		echo 'Cannot connect to Database at the moment';
		die(mysql_error());

	}
	
/* MySQL DB Connect <ENDS>*/ 	
	
	?>
	
		<div id="table">
		<?php
			$query = "SELECT * FROM `workdetails`";
			$query2 =mysql_query($query);
				if(mysql_query($query)){
					while($row=mysql_fetch_array($query2)){ 
						$workid = $row['workid'];
						$workno = $row['workno'];
						$type = $row['type'];
						$status = $row['status'];
						$budget = $row['budget'];
						$received = $row['received'];
						$balance = $budget - $received;
						$dep = $row['dep'];
						$prefworkers = $row['prefworkers'];
						$workers = $row['workers'];
						
						$TReceived += $received;
						$TBudget += $budget;
						$TBalance += $balance;
						
						if($print == 0 ){
						?>
								<div id="TrowHead">
									<div id="TcellSH">
										Work ID
									</div>
									<div id="TcellSH">
										Work No
									</div>
									<div id="TcellMH">
										Type
									</div>
									<div id="TcellMH">
										Status
									</div>
									
									<div id="TcellLH">
										Department
									</div>
									<div id="TcellLH">
										Preferred Workers
									</div>
									<div id="TcellLH">
										Workers
									</div>
									
									<div id="TcellMH">
										Budget
									</div>
									<div id="TcellMH">
										Received
									</div>
									<div id="TcellMH">
										Balance
									</div>
								</div>
						
						<?php
						$print = 1;
						}
						if($lastWork == $workno){
						?>
								<div id="TrowSame">
									<div id="TcellS">
										<?php echo $workid; ?>
									</div>
									<div id="TcellS">
										<?php echo $workno; ?>
									</div>
									<div id="TcellM">
										<?php echo $type; ?>
									</div>
									<div id="TcellM">
										<?php
										getMeStatus($status);
										 ?>
									</div>
									
									<div id="TcellL">
										<?php getMeDep($dep); ?>
									</div>
									<div id="TcellL">
										<?php echo $prefworkers; ?>
									</div>
									<div id="TcellL">
										<?php echo $workers; ?>
									</div>
									
									<div id="TcellM">
										<?php echo $budget; ?>
									</div>
									<div id="TcellM">
										<?php echo $received; ?>
									</div>
									<div id="TcellM">
										<?php echo $balance; ?>
									</div>
								</div>
						
						
							<?php
						}else{
						?>
								<div id="Trow">
									<div id="TcellS">
										<?php echo $workid; ?>
									</div>
									<div id="TcellS">
										<?php echo $workno; ?>
									</div>
									<div id="TcellM">
										<?php echo $type; ?>
									</div>
									<div id="TcellM">
										<?php getMeStatus($status); ?>
									</div>
									
									<div id="TcellL">
										<?php getMeDep($dep); ?>
									</div>
									<div id="TcellL">
										<?php echo $prefworkers; ?>
									</div>
									<div id="TcellL">
										<?php echo $workers; ?>
									</div>
									
									<div id="TcellM">
										<?php echo $budget; ?>
									</div>
									<div id="TcellM">
										<?php echo $received; ?>
									</div>
									<div id="TcellM">
										<?php echo $balance; ?>
									</div>
								</div>
						
						
						<?php
						}
						
						$lastWork = $workno;
					}
					
					?>
							<div id="TrowTail">
									<div id="TcellSH">
										-
									</div>
									<div id="TcellSH">
										-
									</div>
									<div id="TcellMH">
										-
									</div>
									<div id="TcellMH">
										-
									</div>
									
									<div id="TcellLH">
										-
									</div>
									<div id="TcellLH">
										-
									</div>
									<div id="TcellLH">
										-
									</div>
									
									<div id="TcellMH">
										<?php echo $TBudget; ;?>
									</div>
									<div id="TcellMH">
										<?php echo $TReceived; ;?>
									</div>
									<div id="TcellMH">
										<?php echo $TBalance; ;?>
									</div>
								</div>
					<?php
				}
				
				function getMeStatus($status){
					if($status == 0){echo 'Not Started';} else
					if($status == 1){echo 'Progress';} else
					if($status == 2){echo 'Finished';} else
					if($status == 3){echo 'Maintaining';}
				}
				
				function getMeDep($dep){
					if($dep == 1){echo 'Web and Graphics';} else
					if($dep == 2){echo 'Network and Control';} else
					if($dep== 3){echo 'Coding';}
				}
		?>
		</div>

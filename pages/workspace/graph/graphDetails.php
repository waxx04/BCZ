<?php
	session_start();
	require '../../../includes/connect.inc.php';
	
	$ticker2 = 1;
	$number = 1;
	
	
	//<<<<<<<<<<<<<<<<<<<<<< MARKETING VARIABLES <<<<<<<<<<<<<<<<<<<
	$DateDay = $_SESSION["dateDay"];
	$shop = 0;
	
	$query = "SELECT `id` FROM `sales`";
	
	if ($query_run = mysql_query($query) ) {
		$query_num_rows = mysql_num_rows($query_run);
		$shop = $query_num_rows;
	}else{
		echo 'shop count cant found';
	}
	
	$totalSale = 0;
	$TlastMonthSale = 0;
	$Testimated = 0;
	
	$Sname = '';
	$sale = 0;
	$estimated = 0;
	$lastMonth = 0;

	//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
	
?>

<div id="graphSale" class="graphDBox">
		<div id="head" ><?php echo $DateDay; ?> - SALE</div>
		<table>
				<tr>
					<td id="th1"> No </td>	 
					<td id="th2" > Pharmacy </td>		
					<td id="th3"> Sale </td>
					<td id="th3"> Estimate </td>
					<td id="th3"> LastMonth </td>
				</tr>
			<?php 
			$query = "SELECT * FROM `sales`";
			
			$query2 =mysql_query($query);
				if(mysql_query($query)){
				
			while($row=mysql_fetch_array($query2)){ 
			
			$Sname = $row['name'];
			$sale = $row['d'.$DateDay];
			$estimated = 0;
			$lastMonth = 0;
			if($sale != 0){
			?>
				<tr>
					<td id="td1"> <?php echo $number; ?> </td>
					<td id="td2"> <?php echo "Shop".$ticker2; ?> </td>
					<td id="td3"> <?php echo $sale; ?> </td>
					<td id="td3"> <?php echo $estimated; ?> </td>
					<td id="td3"> <?php echo $lastMonth; ?> </td>
				</tr>
			<?php 
			$number++;
			}
			$totalSale += $sale;
			$Testimated += $estimated;
			$TlastMonthSale  += $lastMonth;
			
			$ticker2++;
			 } 
			 $number=0;
			
			}else{
			echo 'query not working';
			}
			
			?>
			
			<tr>
					<td id="th1"> = </td>	 
					<td id="th2" > TOTAL</td>		
					<td id="th3"> <?php echo $totalSale; ?> </td>
					<td id="th3"> <?php echo $Testimated; ?>  </td>
					<td id="th3"> <?php echo $TlastMonthSale; ?>  </td>
				</tr>
				
		</table>
	</div>
		
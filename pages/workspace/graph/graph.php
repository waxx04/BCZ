<?php


/* MySQL DB Connect*/
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_db = 'glixpharmadb';

	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db)){
		echo 'Cannot connect to Database at the moment';
		die(mysql_error());

	}
/* MySQL DB Connect <ENDS>*/ 	
	
	$daySales = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$ticker4 = 1;
	$ticker5 = 1;
	
	$query = "SELECT * FROM `sales`";
	$query2 =mysql_query($query);
		if(mysql_query($query)){
			while($row=mysql_fetch_array($query2)){ 
				while($ticker4 <= 31){
					$daySales[$ticker4-1] += $row['d'.$ticker4];
					$ticker4++;
				}
			$ticker4 = 1;
			}
		}
?>

<?php while( $ticker5 <= 31){ ?>
	<input type="hidden" id="V<?php echo $ticker5 ?>" value="<?php echo $daySales[$ticker5-1]; ?>">
<?php $ticker5++; } ?>

<script>
	jQuery(document).ready(function() {
	
	var ClassCounter = 1;
	var ticker3 = 1;
	var ticker4 = 1;
	var HighValue = 1;
	
	var Rating = 'GOOD';
	
	var gv = 0;
	
	var gvA = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,23,0,0,0,0,0,0,0,0,0,0,0,0);
	var gvATemp = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,23,0,0,0,0,0,0,0,0,0,0,0,0);
	
	
	
	
	ticker4 =1;
	while(ticker4 <= 31){
	
		gvA[ticker4-1] =  document.getElementById("V"+ticker4).value;
		gvATemp[ticker4-1] = document.getElementById("V"+ticker4).value;
		
	ticker4++;
	}
	
	HighValue = Math.max.apply(Math, gvA);
	
	ticker4 =1;
	while(ticker4 <= 31){
	
		gvA[ticker4-1] = ( gvA[ticker4-1] * 100 ) / HighValue;
		
	ticker4++;
	}
	
	//*********************************** GRAPH ********************************************//
	
	
	function graphGenerator(){
		
				while(ClassCounter<=31){
			
					$(".g"+ClassCounter).css( { marginTop : (350 - (gvA[ClassCounter-1] * 3)) });
					colorPicker();
					$(".g"+ClassCounter).css( { height : (gvA[ClassCounter-1] * 3)+ 100 });
					
					document.getElementById("BDate"+ClassCounter).innerHTML = ClassCounter;
					document.getElementById("BSale"+ClassCounter).innerHTML = "TS : "+gvATemp[ClassCounter-1];
					PRater();
					document.getElementById("BRating"+ClassCounter).innerHTML = Rating;
					
					ClassCounter++;
				}
				
				function colorPicker(){
					if(gvA[ClassCounter-1] >= 90 && gvA[ClassCounter-1] < 100)$(".g"+ClassCounter).css( { backgroundColor : "#62ff6d" });else
					if(gvA[ClassCounter-1] >= 80 && gvA[ClassCounter-1] < 90)$(".g"+ClassCounter).css( { backgroundColor : "#7fff67" });else
					if(gvA[ClassCounter-1] >= 70 && gvA[ClassCounter-1] < 80)$(".g"+ClassCounter).css( { backgroundColor : "#7fff67" });else
					if(gvA[ClassCounter-1] >= 60 && gvA[ClassCounter-1] < 70)$(".g"+ClassCounter).css( { backgroundColor : "#c5ff59" });else
					if(gvA[ClassCounter-1] >= 50 && gvA[ClassCounter-1] < 60)$(".g"+ClassCounter).css( { backgroundColor : "#a0ff60" });else
					
					if(gvA[ClassCounter-1] >= 40 && gvA[ClassCounter-1] < 50)$(".g"+ClassCounter).css( { backgroundColor : "#d7ff55" });else
					if(gvA[ClassCounter-1] >= 30 && gvA[ClassCounter-1] < 40)$(".g"+ClassCounter).css( { backgroundColor : "#e8ff53" });else
					if(gvA[ClassCounter-1] >= 20 && gvA[ClassCounter-1] < 30)$(".g"+ClassCounter).css( { backgroundColor : "#ffee4f" });else
					if(gvA[ClassCounter-1] >= 10 && gvA[ClassCounter-1] < 20)$(".g"+ClassCounter).css( { backgroundColor : "#ffb14f" });else
					if(gvA[ClassCounter-1] >= 0 && gvA[ClassCounter-1] < 10)$(".g"+ClassCounter).css( { backgroundColor : "#ff684f" });
				}
				
				function PRater(){
					if(gvA[ClassCounter-1] == 100)Rating = 'SALE OF <br/> THE <br/> MONTH';else
					if(gvA[ClassCounter-1] >= 90 && gvA[ClassCounter-1] < 100)Rating = 'Excellent';else
					if(gvA[ClassCounter-1] >= 80 && gvA[ClassCounter-1] < 90)Rating = 'Excellent';else
					if(gvA[ClassCounter-1] >= 70 && gvA[ClassCounter-1] < 80)Rating = 'Great';else
					if(gvA[ClassCounter-1] >= 60 && gvA[ClassCounter-1] < 70)Rating = 'Great';else
					if(gvA[ClassCounter-1] >= 50 && gvA[ClassCounter-1] < 60)Rating = 'Good';else
					
					if(gvA[ClassCounter-1] >= 40 && gvA[ClassCounter-1] < 50)Rating = 'Good';else
					if(gvA[ClassCounter-1] >= 30 && gvA[ClassCounter-1] < 40)Rating = 'Average';else
					if(gvA[ClassCounter-1] >= 20 && gvA[ClassCounter-1] < 30)Rating = 'Average';else
					if(gvA[ClassCounter-1] >= 10 && gvA[ClassCounter-1] < 20)Rating = 'Not bad';else
					if(gvA[ClassCounter-1] >= 0 && gvA[ClassCounter-1] < 10)Rating = 'Bad';
				}
		}
		
	//*********************************** GRAPH ENDS ***************************************//
		
	
	
	graphGenerator();
	
	
	
	//*********** AJAX **********//
				while(ticker3 <= 31){
				$('#'+ticker3).click(function(){
					var ChatText = this.id;
						
						$.ajax({
							type:'POST',
							url:'pages/workspace/graph/dateSetter.php',
							data:{Text:ChatText},
							success:function(){
								$('#graphDetails').load("pages/workspace/graph/graphDetails.php");
								
							}
						});
				});	
				ticker3++;
			}
	
	});
</script>
	
	<?php 
	
	$ticker = 1;
		while($ticker <= 31){
	?>
			<div id="Gbar" class="<?php echo 'g'.$ticker; ?>" >
				<div id="lineDate" > <?php echo $ticker; ?> </div>
				
				<div id="BDate<?php echo $ticker; ?>" class="BBox" > </div>
				<div id="BSale<?php echo $ticker; ?>" class="BBox"  > SALE </div>
				<div id="<?php echo $ticker; ?>"+ class="BBoxD"  > DETAILS </div>
				<div id="BRating<?php echo $ticker; ?>" class="BRating"> GOOD </div>
			</div>
	<?php
		$ticker++;
		}
		$ticker = 1;
	?>
	
		
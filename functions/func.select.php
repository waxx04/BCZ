<?php


function getuserfieldwid($field,$table,$id) {
	
	$query = "SELECT `".$field."` FROM `".$table."` WHERE `id`='".$id."'";
	
					
	if($query_run = mysql_query($query)) {
		
		if($query_result = mysql_result($query_run, 0, $field)){
			
			return $query_result;
			
		}
	}
	
	}
	





function getuserfieldwid2($field) {

	$ID = $_SESSION['user_id'];
	$query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
						
		if($query_run = mysql_query($query)) {
			
			if($query_result = mysql_result($query_run, 0, $field)){
				
				return $query_result;
				
			}
		}	
	}
	
	
	
	function workStart(){
	$query = "UPDATE `bczincdb`.`intro_work_u` SET `status` = \'2\' WHERE `intro_work_u`.`id` = 4;";
$query_run = mysql_query($query);
	}
	
	
	

	

function getuserfieldwid3($field) {
	$ID = $_SESSION['user_id'];
	$query = "SELECT `$field` FROM `userskill` WHERE `id`='".$_SESSION['user_id']."'";
	
					
	if($query_run = mysql_query($query)) {
		
		if($query_result = mysql_result($query_run, 0, $field)){
			
			return $query_result;
			
		}
	}
	
	}	
?>
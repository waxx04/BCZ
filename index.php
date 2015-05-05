<?php


require 'includes/core.inc.php';
	require 'includes/connect.inc.php';
	require 'functions/func.select.php';
	
	
if(isset($_GET['page'])){
	
		
	
		
	
	
	if(loggedin()){
		$pages=array("pages/home.php","pages/ourservices.php", "pages/ourproducts.php","pages/aboutus.php","pages/contactus.php",
		
		"pages/workspace/myworkspace.php","pages/workspace/graphDiagram.php","pages/workspace/details/work.php","pages/workspace/details/money.php");
	}else{
		$pages=array("pages/home.php","pages/ourservices.php", "pages/ourproducts.php","pages/aboutus.php","pages/contactus.php");
	}	
		if(in_array($_GET['page'], $pages)) {
		
			$_page=$_GET['page'];
		
		}else{
		
		$_page="pages/home.php";
		
		}
		
	}else{
	
		$_page="pages/home.php";
	
	
		
	}

?>


<!DOCTYPE html>
<html>

	
	
	
	<head>
		<title>BlueCipherz</title>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
		 
	</head>
	
	

	<body>
		
		
		<header id="header">
			<div id="innerHeader">
				<div id="icon"> <img src="img/BCZicon.png"> </div>
			</div>
			
						
			<?php
			
				if(loggedin()){
					
					
					$dp_name = getuserfieldwid2('imagelink');
					$sure_name = getuserfieldwid2('surname');
					$user_name = getuserfieldwid2('username');
					$about_user = getuserfieldwid2('about');
					
					?>	
					
									<h11><?php echo $sure_name; ?></h11>

									<a href="functions/logout.php" id="btn_logout" > Logout </a>
								
					
					<?php
					
					}else{
					
					?>
					
					
					
					<?php   /*************** LOGIN AREA *****************/

						$notify2 = '';
						
						if(isset($_POST['username'])&&isset($_POST['password'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$password_hash = md5($password);
							if(!empty($username)&&!empty($password)){
								$query = "SELECT `id` FROM `susers` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($password_hash)."'";
								$query2 = "SELECT `id` FROM `users` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($password_hash)."'";
								if ($query_run = mysql_query($query) ) {
									$query_num_rows = mysql_num_rows($query_run);
									if($query_num_rows==0){
										$notify2 = 'Invalid username or password combination';
										$_SESSION['STstate'] = 1;
									}else if($query_num_rows==1){
										$user_id = mysql_result($query_run, 0, 'id');
										$_SESSION['user_id']=$user_id;
										header('Location: index.php');
										$_SESSION['STstate'] = 0;
									}
								}else if ($query_run = mysql_query($query2) ) {
									$query_num_rows = mysql_num_rows($query_run);
									if($query_num_rows==0){
										$notify2 = 'Invalid username or password combination';
										$_SESSION['STstate'] = 1;
									}else if($query_num_rows==1){
										$user_id = mysql_result($query_run, 0, 'id');
										$_SESSION['user_id']=$user_id;
										header('Location: index.php');
										$_SESSION['STstate'] = 0;
									}
								}else{
								$notify2 = 'query is not working';
								}
							}else{
							$notify2 = 'you must type the user name and password';
							}
						}
						
						
						
						
						/*************** LOGIN AREA ENDS *****************/
					?>  
					
					
					
			
			<div id="signUpTab" contentEditable="false" >
				<div id="SUTBoxB" >
					<div id="STLog" > LogIn </div> 
					<div id="STReg" > SignUp </div>
				</div>	
				<div id="SUTab">
					<form>
						<div id="STRegMain">
							<input id="inputTextL"  class="FF1"  type="email" name="IPEmail" placeholder="Email" maxlength="50" required>
							<input id="inputTextS1" class="FF2"  type="text" name="IPFirstName" placeholder="First Name" maxlength="50" required>
							<input id="inputTextS2" class="FF3"  type="text" name="IPLastName" placeholder="Second Name" maxlength="50" required>
							<input id="inputTextL"  class="FF4"  type="text" name="IPUserName" placeholder="Username" maxlength="50" required>
							<input id="inputTextL"  class="FF5"  type="password" name="IPPassword" placeholder="Password" maxlength="50" required>
							<input id="inputTextL"  class="FF6"  type="password" name="IPCPassword" placeholder="Confirm Password" maxlength="50" required>
							<input id="inputTextL"  class="FF7"  type="text" name="IPPhoneNo"  maxlength="50" placeholder="Phone No">
						</div>
						<div id="STRegBtns" > 
							<div id="STBtns"class="STBtnC1" >Cancel</div>
							<button id="STBtns" type="submit" class="submit" value="Register" >Register</button>
						</div>
					</form>
				</div>
				<div id="SUTabLog">
					<form action="index.php" method="POST">
						<div id="STLogMain">
							<input id="inputTextL"  class="FF4"  type="text" name="username" placeholder="Username" maxlength="50" required>
							<input id="inputTextL"  class="FF5"  type="password" name="password" placeholder="Password" maxlength="50" required>
						</div>
						<div id="msgFielf-1">
							<?php
								echo $notify2;
								?>
						</div>
						<div id="STRegBtns"> 
							<div id="STBtns" class="STBtnC1">Cancel</div>
							<button id="STBtns" class="STSignin" type="submit" value="Register" >Signin</button>
						</div>
					</form>
				</div>
				<div id="SUTBox" >Don't have an account ? Register Free !!! </div>
			</div>
			<?php } ?> 
			
		</header>
		<div id="header2">
			<div id="innerHeader2">
				<div id="navSet">
				
				<div id="a" class="navB6" >SUPPORT</div>
				<div id="a"  class="navB5" >BLOG</div>
				<div id="a" class="navB4" >WHO WE ARE</div>
				<div id="a"  class="navB3" >SERVICES</div>
				<div id="a"  class="navB2" >PORTFOLIO</div>
				<div id="a" class="navB1" >HOME</div>
					
				</div>	
				<div id="underline">
					<div id="liner"></div>
				</div>
			</div>	
		</div>
		
		<div id="headerDummy">
		</div>

		<div id="parallaxBG3">
			
		</div>
		
		<div id="parallaxBG4">
			
		</div>
		
		<div id="MainWrapper">
		
			<main id="main">
				<?php require $_page; ?>
			</main>
			<footer>
				
			</footer>
		
		</div>
		<?php
		if(isset($_SESSION['STstate'])){
		if($_SESSION['STstate'] == 1){
	?>
			<input type="hidden" value="1" id="trigger1">
		
	<?php
		
		}
		}else{
	?>
			<input type="hidden" value="0" id="trigger1">
	<?php
		}
		
		$_SESSION['STstate'] = 0;
	?>
		
		
		
		<div id="popUpBG">
			<div id="popUpBox">
				<div id="PBContent">
				Registration successful
				</div>
				<div id="PBButton">
					Close
				</div>
			</div>
		</div>
	</body>
</html>

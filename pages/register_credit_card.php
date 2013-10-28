<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_credit_card.js"></script>

<head>
	<title>Register Credit Card</title>	

</head>
	<div class = "page_container">
		<?php
			//check if user is logged
			$continue = true; 
			session_start();
			if(isset($_SESSION['on'])){
				if(!$_SESSION['on']){
					echo "<meta http-equiv='refresh' content='=0;register_user.php' />";
					$continue = false;
				}
			} else{
				echo "<meta http-equiv='refresh' content='=0;register_user.php' />";
				$continue = false;
			}
		?>
		<?php if($continue){ ?>
		<?php 
			session_start();
			$_SESSION['state'] = 1;
			
			if($_SESSION['state'] == 1){
				include ("../templates/header.php");
				include ("../templates/navigation.php"); 
			}
			else{
				include ("templates/header.php");
				include ("templates/navigation.php"); 
			}
		?>
		
		<div class = "container">
			<h1>Register Credit Card</h1>
			<form action="../controllers/register_credit_card.php" method="post">
				<p>Card Number (16 digits)</p>
				<input id="card_number" name="card_number" type="text" onkeyup="checkCardNumber(this.value)" maxlength="16"></input>
				<p id="card_number_status"></p>
				<p>Name on Card</p>
				<input id="name" name="name" type="text" onkeyup="checkFullName(this.value)"></input>
				<p id="name_status"></p>
				<p>Expired Date</p>
				<input name="expired_date" type="date"></input>
				<!--<p id="expired_date_status"></p>-->
				<br/>
				<button type = "submit" id="button_register" disabled="true">Register</button>
			</form>
		</div>
		
		<?php 
			if($_SESSION['state'] == 1){
				include ("../templates/footer.php");
			}
			else{
				include ("templates/footer.php");
			} 
		?>
	</div>
	<?php } ?>
</html>
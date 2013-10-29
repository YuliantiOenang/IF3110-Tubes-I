<div id="mask" class="mask">
	<div class="popup">
		<?php 
			if(isset($_SESSION['state'])){
				if($_SESSION['state'] == 1){
					echo "<form action = '../controllers/login_user.php' method = 'post'>";
				} else
					echo "<form action = 'controllers/login_user.php' method = 'post'>";
			} else{
				echo "<form action = 'controllers/login_user.php' method = 'post'>";
			}
		?>
		<div id = "popuptext">
			<p>username</p>
			<input id="username" name="username">
			</input>
			<p>password</p>
			<input id="password" name="password">
			</input>
			<br/><br/>
			<button type="submit">Login</button>
		</div>
		</form>
	</div>
</div>
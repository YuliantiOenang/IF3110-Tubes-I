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
		<div class = "login">
			<p>username</p>
			<input id="username" name="username" type="text"/>
			<p>password</p>
			<input type="password" id="password" name="password" />
			<br/><br/>
			<button type="submit">Login</button>
		</div>
		</form>
	</div>
</div>
		<!-- Header Section -->
		<div id="header" class="frame">
			<div class="kolom-7">
				<a href="index.php"><img src="res/img/logo.png" alt="" id="logo"/></a>
			</div>
			<div class="kolom-4">
				<div id="user-panel">
					
					<div id="user" class="frame">
						<img id="user-pict" class="kolom-5" src="res/img/userpict_h.png" alt=""/>
						<div id="user-text" class="kolom-7">
							<?php
							if(isset($_COOKIE['username'])){ $hoho = $_COOKIE['username'];
							$_SESSION['username']=$_COOKIE['username'];
							$_SESSION['password']=$_COOKIE['password'];
							$_SESSION['cardnumber']=$_COOKIE['cardnumber'];
							?>
							<h3>Welcome, <span class="user-name"><a href="edit-profile.php" id="member"><?php echo "$hoho" ?></a></span>!</h3>
							<p id="user-control">
								<span class="edit-logout">	<a href='logout.php' id='logout2'>Logout</a></span>
							</p>
							<?php }else {
								UNSET($_SESSION['username']);  
								UNSET($_SESSION['password']);  
							?>
							<div id = "logreg">
							<p id="user-control">
								
									<span class="edit-logout">	<a id="login2" href="javascript:login('show')">Login</a></span>
									&nbsp;or&nbsp;
									<span class="edit-logout">	<a id="register2" href="registrasi.php">Register</a></span>
								
							</p>
							<br/></div>
							<?php } ?>
							<a href="ShoppingBag.php" class="btn">Check Your Cart</a>
						</div>
					</div>
					
					<div id="search-bar" class="frame">
						<form name="search-form" action="search.php" onsubmit="return validateForm('search-form', 'src', 'Ketikkan barang yang dicari...')">
							<input id="search-box" class="kolom-9" type="text" name="src" value="Ketikkan barang yang dicari..." onfocus="checkclear(this)" onblur="checkempty(this, 'Ketikkan barang yang dicari...')">
							<input id="search-button" class="kolom-1" type="submit" value="">
						</form>					
					</div>
				</div>
			</div>			
		</div>
		<div id="popupbox"> 
			<form name="login" id="login" action="cek_login.php" method="post">
				<center><a href="javascript:login('hide')" id ="close">[X] close</a></center> 
				<center>Username:</center>
				<center><input name="username" size="14" /></center>
				<center>Password:</center>
				<center><input name="password" type="password" size="14" /></center>
				<center><input type="button" name="button" id= "sbmtlogin"  onclick="forLogin()" value="login" /></center>
			</form>
		</div> 
		<!-- End of Header -->
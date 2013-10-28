<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="<?php echo $_SESSION["username"]; ?>">tokohijau.com</a></h1>
		</div>
		<div id="menu">
			<?php if ($is_signedin) : ?>
				<div id="control-login">
					<p>Welcome, <a href="#"><span id="username"><?php echo $_SESSION["username"]; ?></span></a></p>
					<a href="logout.php">Sign Out</a>
					<a href="#">Shopping Bag</a>
				</div>
			<?php else : ?>
				<div id="control-nologin">
					<a href="#" onclick="showLoginForm()">Sign In</a><br/>
					<a href="#">Sign Up</a>
				</div>
			<?php endif ?>
		</div>
	</div>
	<div id="categories">
		<ul>
			<?php
				foreach ($categories as $key => $name) {
					echo "<li>".$name."</li>\n";
				}
			?>
		</ul>
	</div>
	<div id="searchbar">
		<form name="search" action="#" method="get">
			Nama:
				<input type="text" name="name"/>
			Kategori:
				<select name="category">
					<?php
						foreach ($categories as $key => $name) {
							echo "<option value=".$key.">".$name."</option>\n";
						}
					?>
				</select>
			<input type="submit" value="Search"/>
		</form>
	</div>
</div>
<?php if (!$is_signedin) : ?>
<div id="page-wrapper" style="<?php if (!$is_loginattempt) echo "display:none;"; ?>">
	<div id="page" class="container">
		<a href="#" onclick="hideLoginForm()">Close</a>
		<form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<p>Username: <input type="text" name="username"/></p>
			<p>Password: <input type="password" name="password"/></p>
			<p><input type="submit" value="Login"/></p>
		</form>
	</div>
</div>
<?php endif; ?>
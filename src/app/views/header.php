<nav> <!-- untuk link-->
	<ul>
		<li><a href="#">Logo</a></li> <!-- ganti dengan gambar logo ya-->
		<li><a href="<?php echo SITEURL ?>">Home</a></li> <!-- # = masuk ke HOME-->
		
		<li><a href="#">Kategori Barang</a> <!-- # = masuk ke katogori barang-->
			<ul>
				<li><a href="#">Kategori A</a></li>
				<li><a href="#">Kategori B</a></li>
				<li><a href="#">Kategori C</a></li>
				<li><a href="#">Kategori D</a></li>
			</ul>
		</li>
		
		<?php 
			//periksa apakah sedang login atau tidak
			if (session_id() == '') session_start();
	
			if (!isset($_SESSION['logged_userid'])) {
				echo '<li><a href="' . SITEURL . '/register/">Register</a></li>';
				echo '<li><a href="#" onclick="loginOverlay()">Login</a></li>';
			} else {
				echo '<li><a href="' . SITEURL . '/profile/">Profile</a></li>';
				echo '<li><a href="' . SITEURL . '/login/destroy/">Logout</a></li>';			
			}

		?>
		
		<li>
			<center><form id="cariBarang">					
				<input type="type" placeholder="Pencarian">
			</form></center>
		</li>
	</ul>
</nav>

<div id="overlay">
     <div id="overlay-inside">
        <form action="<?php echo SITEURL . '/login' ?>" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" class="form-control"/>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
     </div>
</div>

<!-- bisa ditaruh dibawah -->
<script src="<?php echo SITEURL . '/include/js/login.js' ?>"></script>
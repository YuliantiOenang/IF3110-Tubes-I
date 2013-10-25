<html>
	<head>
		<title>RuSerBa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script>
			function loginBox() {
				if(document.getElementById("login").style.visibility!="hidden")
					document.getElementById("login").style.visibility="hidden";
				else if(document.getElementById("login").style.visibility=="hidden")
					document.getElementById("login").style.visibility="visible";
			}
			
		</script>
	</head>
	<body>
		<div id="header">
			<div id="navigation">
			<div id="logo">
				<img src="img/logo.png" width="150px"/>
			</div>
			<div id="navCategory">
				<a href="#" class="header_item">Makanan</a>
				<a href="#" class="header_item">Minuman</a>
				<a href="#" class="header_item">Alat Tulis</a>
				<a href="#" class="header_item">Kebersihan</a>
				<a href="#" class="header_item">Obat-obatan</a>
			</div>
			
			<div id="navMember">
				<a href="#" class="button" onclick="loginBox()">Login</a>
				<a href="#" class="button">Register</a>
				<!--<a href="#" class="button">Logout</a> -->
				<a href="#" class="button">Shopping Bag</a> 
			</div>
			<form id="search">
				<input type="text" class="text_input" />
				<input type="submit" class="button" value="search"></input>
			</form>
			</div>
			
		</div>
		<br/>
		<div id="login">
			<form action="index.php">
				<input type="text" class="text_input" placeholder="username/email" required /> <br/>
				<input type="password" class="text_input" placeholder="password"  required /> <br/>
				<input type="submit" value="Login" class="button" />
			</form>
			Member ? <a href="registrasi.php">Daftar</a>
		</div>
		
		<div id="content_body">
			<h3>Makanan</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li><img src="img/items/beras.jpg" width="30%" /></li>
					<li><img src="img/items/daging.jpg" width="30%" /></li>
					<li><img src= "img/items/telur.jpg" width="30%" /></li>
				</ul>
			</div>
			<h3>Minuman</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li><img src="img/items/aqua.jpg" width="30%" /></li>
					<li><img src="img/items/sirup.jpg" width="30%" /></li>
					<li><img src= "img/items/bir.jpg" width="30%" /></li>
				</ul>
			</div>
			<h3>Alat Tulis</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li><img src="img/items/pen.jpg"  width="30%" /></li>
					<li><img src="img/items/paper.jpg" width="30%" /></li>
					<li><img src= "img/items/ruler.jpg"  width="30%" /></li>
				</ul>
			</div>
			<h3>Kebersihan</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li><img src="img/items/sapu.jpg" width="30%" /></li>
					<li><img src="img/items/serokan.jpg" width="30%" /></li>
					<li><img src= "img/items/kemoceng.jpg"  width="30%" /></li>
				</ul>
			</div>
			<h3>Obat</h3>
			<div class="content_item">
				<ul class="horizontal_list">
					<li><img src="img/items/obatflu.jpg" width="30%" /></li>
					<li><img src="img/items/kondom.jpg" width="30%" /></li>
					<li><img src= "img/items/baygon.jpg" width="30%" /></li>
				</ul>
			</div>
			<h3>Mekanisme Belanja</h3>
			<div class="content_item">
			<p>Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.
			Lorem Insum Dolor Sit Amer.Lorem Insum Dolor Sit Amer.<p>
			</div>
		</div>
	</body>
</html>
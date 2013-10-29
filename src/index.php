<!-- HOME -->
<!DOCTYPE html>
<html>
	<head>
		<script src="js/home.js"></script>
		<title>
			Beranda Toko
		</title>
	</head>
	<body onload="">
		<?php
			include 'incl/header.php';
		?>
		<div id="content">
			<?php
				function submitcard()
				{
						$con=mysqli_connect("localhost","root","","ruserba");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						
						$sql ="INSERT INTO Credit(CardNumber, CardName, ExpiredDate) VALUES
								('$_POST[cardnumber]','$_POST[nameoncard]', '$_POST[expireddate]')" ;
						if(!mysqli_query($con,$sql))
						{
							die('Error' . mysqli_error($con));
						}
						mysqli_close($con);
				}
				
				if(isset($_REQUEST['submitted']))
				{
					submitcard();
				}
			?>
			<div id="one_block">
				<h1 id="content_title">
					3 makanan/minuman terlaris
				</h1>
				<div id="first_box">1</div>
				<div id="second_box">2</div>
				<div id="third_box">3</div>
				<div id="footnote"></div>
			</div>
			<div id="one_block">
				<h1 id="content_title">
					3 pakaian terlaris
				</h1>
				<div id="first_box"></div>
				<div id="second_box"></div>
				<div id="third_box"></div>
				<div id="footnote"></div>
			</div>
			<div id="one_block">
				<h1 id="content_title">
					3 furnitur terlaris
				</h1>
				<div id="first_box"></div>
				<div id="second_box"></div>
				<div id="third_box"></div>
				<div id="footnote"></div>
			</div>
			<div id="one_block">
				<h1 id="content_title">
					3 peralatan dapur terlaris
				</h1>
				<div id="first_box"></div>
				<div id="second_box"></div>
				<div id="third_box"></div>
				<div id="footnote"></div>
			</div>
			<div id="one_block">
				<h1 id="content_title">
					3 macam-macam barang terlaris
				</h1>
				<div id="first_box"></div>
				<div id="second_box"></div>
				<div id="third_box"></div>
				<div id="footnote"></div>
			</div>
			<div id="one_block">
				<h1 id="content_title_right">Skema transaksi pembelian</h1>
				<div id="footnote"></div>
				<div id="first_box"></div>
				<div id="second_box"></div>
				<div id="third_box"></div>
				<div id="footnote"></div>
			</div>
		</div>
		<?php
			include 'incl/footer.php';
		?>
	</body>
</html>
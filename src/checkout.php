<?php
	if (isset($_COOKIE['ccumber'])) {
		echo "Payment Complete";
		unset($_SESSION['cart']);
		echo "<script type='text/javascript'>";
		echo "parent.window.opener.location='HomeB.php';";
		echo "window.close();";
		echo "</script>";
	}
	else {
		echo "<script type='text/javascript'>";
		echo "parent.window.opener.location='HalamanRegistrasiKartuKredit.php';";
		echo "window.close();";
		echo "</script>";
	}
?>
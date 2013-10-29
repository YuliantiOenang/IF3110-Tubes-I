<?php 
	include 'LibUser.php';
	session_start();
	function GetDBBarang_BestBuy(){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results_category = mysql_query("SELECT Kategori FROM TransactionLog GROUP BY Kategori ORDER BY sum(Jumlah) DESC; ") or die(mysql_error());
		$i=0;
		while($results_category = mysql_fetch_array($raw_results_category) AND $i<5){
			$_SESSION['BestBuyKategori'][$i]=$results_category[0];
			//echo "$results_category[0] <br>";
			$raw_results_product = mysql_query("SELECT NamaBarang FROM TransactionLog WHERE Kategori='$results_category[0]' GROUP BY IdBarang ORDER BY sum(Jumlah) DESC;") or die(mysql_error());
			$results_product= mysql_fetch_array($raw_results_product);
			//echo "$results_product[0] <br>";
			$_SESSION['BestBuy'][$i]=$results_product[0];
			$Tampil1=$_SESSION['BestBuy'][$i];
			$Tampil2=$_SESSION['BestBuyKategori'][$i];
			//echo "$Tampil1 dari $Tampil2";
			$i++;
		}
	}
	function GetDBBeras(){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results = mysql_query("SELECT * FROM Barang WHERE Kategori='Beras'") or die (mysql_error());
		$i=0;
		while($results=mysql_fetch_array($raw_results)){
			$_SESSION['Beras'][$i]=new Barang($results[0],$results[1],$results[2],$results[3],$results[4]);
			$i++;
		}
	}
	function GetDBDaging(){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results = mysql_query("SELECT * FROM Barang WHERE Kategori='Daging'") or die (mysql_error());
		$i=0;
		while($results=mysql_fetch_array($raw_results)){
			$_SESSION['Daging'][$i]=new Barang($results[0],$results[1],$results[2],$results[3],$results[4]);
			$i++;
		}
	}
	function GetDBSayuran(){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results = mysql_query("SELECT * FROM Barang WHERE Kategori='Sayuran'") or die (mysql_error());
		$i=0;
		while($results=mysql_fetch_array($raw_results)){
			$_SESSION['Sayuran'][$i]=new Barang($results[0],$results[1],$results[2],$results[3],$results[4]);
			$i++;
		}
	}
	function GetDBFrozenFood(){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results = mysql_query("SELECT * FROM Barang WHERE Kategori='Frozen Food'") or die (mysql_error());
		$i=0;
		while($results=mysql_fetch_array($raw_results)){
			$_SESSION['FrozenFood'][$i]=new Barang($results[0],$results[1],$results[2],$results[3],$results[4]);
			$i++;
		}
	}
	function GetDBSearch($SearchQuery){
		mysql_connect("localhost","root","") or die("Error connecting to database: ".mysql_error());
		mysql_select_db("WBD") or die(mysql_error());
		$raw_results = mysql_query("SELECT * FROM Barang WHERE (NamaBarang LIKE '%".$SearchQuery."%')") or die (mysql_error());
		$i=0;
		while($results=mysql_fetch_array($raw_results)){
			$_SESSION['Search'][$i]=new Barang($results[0],$results[1],$results[2],$results[3],$results[4]);
			$i++;
		}
	}
?>

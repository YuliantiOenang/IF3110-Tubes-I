<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Lihat Kartu Kredit </title>
</head>
<body>
Credit card anda<br>
<table border = 1>
<tr>
	<th>No</th>
	<th>Number</th>
	<th>Nama</th>
	<th>Expired Date</th>
</tr>
<?php
$i=0;
while ($row = mysql_fetch_object($data['listCC']))
{
	$i++;
?>
<tr>
	<td><?=$i;?></td>
	<td><?=$row->card_number;?></td>
	<td><?=$row->name;?></td>
	<td><?=$row->expired_date;?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

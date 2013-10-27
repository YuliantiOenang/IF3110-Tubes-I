<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Ini laman ganti indentitas </title>
</head>
<body>
<form action="" method="POST">
	Email : <input type="text" name="email" value="<?=$_SESSION['email'];?>"><br>
	Username : <input type="text" name="username" value="<?=$_SESSION['username'];?>"><br>
	Password : <input type="password" name="password" value="<?=$_SESSION['password'];?>"><br>
	Confirm Password : <input type="password" name="confirm" value=""><br>
	Nama Lengkap: <input type="text" name="nama_lengkap" value="<?=$_SESSION['nama_lengkap'];?>"><br>
	HP : <input type="text" name="HP" value="<?=$_SESSION['HP'];?>"><br>
	Alamat : <textarea name="alamat"><?=$_SESSION['alamat'];?></textarea><br>
	Provinsi : <input type="text" name="provinsi" value="<?=$_SESSION['provinsi'];?>"><br>
	Kota / Kabupaten : <input type="text" name="kota" value="<?=$_SESSION['kota'];?>"><br>
	KodePos : <input type="text" name="kodepos" value="<?=$_SESSION['kodepos'];?>"><br>
	<input type="submit" value="submit" name="submit">
</form>
</body>
</html>

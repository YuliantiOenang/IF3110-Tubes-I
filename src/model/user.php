<?php
class User_Model
{
	private $database;

	public function __construct()
	{
		$this->database = new SQL();
	}

	public function isUserExists($username,$password)
	{
		$username = mysql_real_escape_string(stripslashes($username));
		$password = mysql_real_escape_string(stripslashes($password));
		$query = "SELECT * FROM user where username='".$username."' and password='".$password."'";
		$this->database->query($query);
		return $this->database->fetch();
	}

	public function addUser($username, $password, $nama_lengkap, $HP, $alamat, $provinsi, $kota,$kabupaten, $KodePos, $email,$isCreditCard)
	{
		$query = "INSERT INTO user (username,nama_lengkap,HP,alamat,provinsi,kota,kabupaten,kodepos,email,password,isCreditCard) VALUES ('".$username."','".$nama_lengkap."','".$HP."','".$alamat."','".$provinsi."','".$kota."','".$kabupaten."','".$KodePos."','".$email."','".$password."','".$isCreditCard."')";
		$this->database->query($query);
	}
}


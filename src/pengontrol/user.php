<?php
class User
{
	public function index(array $var)
	{
		if (isset($_SESSION['username']))
		{
			$v = new View('user/home');
			$v->render();
		}
		else
		{
			header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user/login");
		}
	}

	public function change(array $var)
	{
		if (isset($_SESSION['username']))
		{
			if ((isset($var['submit'])) && ($var['username']!='') && ($var['password']!='') && ($var['nama_lengkap']!='') && ($var['HP']!='') && ($var['alamat']!='') && ($var['provinsi']!='') && ($var['kota']!='') && ($var['kabupaten']!='') && ($var['kodepos']!='') && ($var['email']!=''))
			{
				$_SESSION['username'] = $var['username']; //username akan disimpan
				$_SESSION['nama_lengkap'] = $var['nama_lengkap']; //nama lengkap
				$_SESSION['HP'] = $var['HP'];
				$_SESSION['alamat'] = $var['alamat'];
				$_SESSION['provinsi'] = $var['provinsi'];
				$_SESSION['kodepos'] = $var['kodepos'];
				$_SESSION['email'] = $var['email'];
				$_SESSION['password'] = $var['password'];
				$_SESSION['kota'] = $var['kota'];
				$_SESSION['kabupaten'] = $var['kabupaten'];
				$m = new User_Model();
				$m->updateInfo($var['username'],$var['password'],$var['nama_lengkap'],$var['HP'],$var['alamat'],$var['provinsi'],$var['kota'],$var['kabupaten'],$var['kodepos'],$var['email']);
				header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user");
			}
			else
			{
				$v = new View('user/change');
				$v->render();
			}
		}
		else header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user/login");
	}

	public function register(array $var)
	{
		if (!isset($_SESSION['username']))
		{
			if ((isset($var['submit'])) && ($var['username']!='') && ($var['password']!='') && ($var['nama_lengkap']!='') && ($var['HP']!='') && ($var['alamat']!='') && ($var['provinsi']!='') && ($var['kota']!='') && ($var['kabupaten']!='') && ($var['kodepos']!='') && ($var['kodepos']!=''))
			{
				$u = new User_Model();
				if ($u->isBolehDaftar($var['username']))
				{
					$u->addUser($var['username'],$var['password'],$var['nama_lengkap'],$var['HP'],$var['alamat'],$var['provinsi'],$var['kota'],$var['kabupaten'],$var['kodepos'],$var['email'],0);
					echo "Registrasi Berhasil<br>";
					echo "Saatnya untuk registrasi kartu kredit <a href='".SITE_ROOT.NAME_ROOT."/index.php/user/addCreditCard'> disini </a><br>";
					echo "Anda juga bisa skip untuk langsung <a href='".SITE_ROOT.NAME_ROOT."/index.php/user/login'>login</a>"; 
				}
				else echo "Username telah digunakan";			
			}
			else
			{
				$v = new View('user/register');
				$v->render();
			}
		}
		else header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user");
	}
    

	public function login(array $var)
	{
		if (isset($_SESSION['username']))
		{
			//jika sudah login
			header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user");
		}
		else
		{
			$u = new User_Model();
			$ret = $u->isUserExists($var['username'],$var['password']);
			if ($ret->username != null) //jika objek username tidak null
			{
				$_SESSION['id'] = $ret->id;
				$_SESSION['username'] = $ret->username; //username akan disimpan
				$_SESSION['nama_lengkap'] = $ret->nama_lengkap; //nama lengkap
				$_SESSION['HP'] = $ret->HP;
				$_SESSION['alamat'] = $ret->alamat;
				$_SESSION['provinsi'] = $ret->provinsi;
				$_SESSION['kodepos'] = $ret->kodepos;
				$_SESSION['email'] = $ret->email;
				$_SESSION['password'] = $ret->password;
				$_SESSION['kota'] = $ret->kota;
				$_SESSION['kabupaten'] = $ret->kabupaten;
				$_SESSION['isCreditCard'] = $ret->isCreditCard;
                echo "Success: ".SITE_ROOT.NAME_ROOT."/index.php/user";
				//header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user");
			} else {
                echo "Failure : Username / Password anda salah!";
            }
		}
	}

	public function logout(array $var)
	{
		session_destroy();
		header("Location: ".SITE_ROOT.NAME_ROOT."/index.php");
	}

	public function addCreditCard(array $var){ 
		if (isset($_SESSION['id']))
		{
			if ( (isset($var['submit'])) && ($var['card_number']!='') && ($var['name']!='') && ($var['expired_date']!='') )
			{
				$m = new User_Model();
				$m->addCreditCard($var['card_number'],$var['name'],$var['expired_date']);
				
				if (isset($_SESSION['username'])) //jika sudah login
				{}
				else session_destroy(); //jika bukan dari login, hapus semua session temporari

				echo "Kartu kredit berhasil ditambahkan<br>";
				echo "Klik <a href='".SITE_ROOT.NAME_ROOT."/index.php/user'>disini</a> untuk pergi ke laman akun anda";
			}
			else{
				$v = new View('user/addcreditcard');
				$v->render();
			}
		}
		else
			header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user/register");
	}

	public function lihatCreditCard(array $var)
	{
		if (isset($_SESSION['username']))
		{
			$m = new User_Model();
			$v = new View('user/lihatcreditcard');
			$v->setData('listCC',$m->lihatCreditCard());
			$v->render();
		}
		else header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user/login");		
	}

	public function cart(array $var)
	{
		if (isset($_SESSION['username']))
		{
			$m = new Barang_Model();
			$v = new View('user/cart');
			$v->setData("listBarang",$m->generateCart());
			$v->render();
		}
		else header("Location: ".SITE_ROOT.NAME_ROOT."/index.php/user/login");	
	}
}


<?php
class Barang
{
	public function beli(array $var)
	{
		if (isset($_SESSION['username']))
		{
			if ($_SESSION['isCreditCard'] == 0)
			{
				echo "Anda akan diredirect ke laman kartu kredit untuk membeli barang";
				header("Refresh: 2; url=".SITE_ROOT.NAME_ROOT."/index.php/user/addCreditCard");
			}
			else
			{
				if (isset($var['submit']))
				{
					//algoritma apabila barang sudah disubmit
					$m = new Barang_Model();
					
					if (!is_numeric($var['id_barang'])) die("SQL Injection detected");

					$row = $m->getOnlyBarangID($var['id_barang']);
					if ($row->jumlah_barang < $var['qty'])
					{
						echo "Transaksi tidak berhasil, qty yang dimasukkan melebihi stok";
					}
					else
					{
						$m->Beli($var['id_barang'],$var['kartu'],$var['qty']);
						echo "Transaksi berhasil, anda akan diredirect ke laman pembelian untuk mengecek";
						header("Refresh: 2;url=".SITE_ROOT.NAME_ROOT."/index.php/user/cart");
					}
				}
				else
				{
					$m = new Barang_Model();
					$u = new User_Model();
					$v = new View('barang/beli');

					if (!is_numeric($var['id'])) die("SQL Injection detected");

					$row = $m->getOnlyBarangID($var['id']);
					if ($row == null) die("Sistem mendeteksi adanya keanehan");

					$v->setData('nama_barang',$row->nama_barang);
					$v->setData('stok',$row->jumlah_barang);
					$v->setData('listCC',$u->lihatCreditCard());
					$v->setData('id_barang',$var['id']);
					$v->render();
				}
			}
		}		
		else
		{
			echo "Anda harus login terlebih dahulu, anda akan diredirect ke laman login. . .";
			header("Refresh: 2;url=".SITE_ROOT.NAME_ROOT."/index.php/user");
		}
	}

	public function cari(array $var)
	{
		if (isset($var['search']))
		{
			$m = new Barang_Model();
			$u = new View('barang/search');
			$u->setData('nama_barang',$var['search']);
			$u->setData('barang',$m->cariBarang($var['search'],$var['page']*10));
			$u->setData('jmlPage',(($m->countCariBarang($var['search'])->JmlBarang)/10));
			$u->render();
		}
		else header("Refresh: 0;url=".SITE_ROOT.NAME_ROOT."/index.php/barang");
	}

	public function index(array $var)
	{
		$m = new Barang_Model();
		$u = new View('home/gallery');
		$u->setData('barang',$m->getAllBarang($var['page']*10));
		$u->setData('jmlPage',(($m->countBarang()->JmlBarang)/10));
		$u->render();
	}

	public function detail(array $var)
	{
		$u = new Barang_Model();
		$v = new View('barang/detail');
		$v->setData('detail',$u->getBarangID($var['id']));
		$v->render();
	}
}

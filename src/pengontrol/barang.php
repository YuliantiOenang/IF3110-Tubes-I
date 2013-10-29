<?php
class Barang
{

    public function addCart(array $var)
    {
        if (isset($_SESSION['username']))
        {
            if (isset($var['submit']))
            {
				//algoritma apabila barang sudah disubmit
				$m = new Barang_Model();
					
				if (!is_numeric($var['id_barang'])) die("SQL Injection detected");

				$row = $m->getOnlyBarangID($var['id_barang']);
               
				if ($row->jumlah_barang < $var['qty'] || $var['qty'] <= 0)
				{
					echo "Failure: Transaksi tidak berhasil, qty yang dimasukkan tidak valid.";
				}
				else
				{
                    if (isset($var['deskripsi_tambahan'])) $deskripsi_tambahan = $var['deskripsi_tambahan'];
                    else $deskripsi_tambahan = "";

                    $m->AddCart($var['id_barang'], $var['qty'], $deskripsi_tambahan);
					echo "Success: Transaksi berhasil!";
				}
            }
        }
        else
        {
            echo "Redirect: ".SITE_ROOT.NAME_ROOT."/index.php/user/register"; // kembali ke halaman register
        }
    }
    
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
					// Mengubah status menjadi 1, set id_card, dan mengurangi stok
				}
				else
				{
					$m = new Barang_Model();
					$u = new User_Model();
					$v = new View('barang/beli');
                    
                    $v->setData('listCateg',$m->getAllCategory());
                    $v->setData("listBarang",$m->generateCart());
					$v->setData('listCC',$u->lihatCreditCard());

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
			$u->setData('kategori',$var['kategori']);
			$u->setData('harga',$var['harga']);
			$u->setData('operator',$var['operator']);			

			$u->setData('barang',$m->cariBarang($var['search'],$var['kategori'],$var['harga'],$var['operator'],$var['page']*10));
			$u->setData('jmlPage',(($m->countCariBarang($var['search'],$var['kategori'],$var['harga'],$var['operator'])->JmlBarang)/10));
			$u->render();
		}
		else header("Refresh: 0;url=".SITE_ROOT.NAME_ROOT."/index.php/barang");
	}

	public function index(array $var)
	{
		$m = new Barang_Model();
		$u = new View('home/gallery');
        $v2 = new View ('home/login');
        $u->setData('loginView', $v2->render(false)); // rendering Login page
		$u->setData('listCateg',$m->getAllCategory());

		if (isset($var['sort'])) $u->setData('sort',$var['sort']);
		else $u->setData('sort','');

		if (isset($var['jenisSort'])) $u->setData('jenisSort',$var['jenisSort']);
		else $u->setData('jenisSort','');

		$u->setData('barang',$m->getAllBarang($var['sort'], $var['jenisSort'], $var['page']*10));
		$u->setData('jmlPage',(($m->countBarang()->JmlBarang)/10));

		if (isset($var['page'])) $u->setData('pageOf',$var['page']);
		else $u->setData('pageOf',0);
		
		$u->render();
	}

	public function detail(array $var)
	{
		$u = new Barang_Model();
		$v = new View('barang/detail');
        $v->setData('listCateg',$u->getAllCategory());
		$v->setData('detail',$u->getBarangID($var['id']));
        $v->setData('id',$var['id']);
		$v->render();
	}

	public function hapusBarang(array $var)
	{
		$m = new Barang_Model();
		$m->deleteBarang($var['id']);
		header("Refresh: 0;url=".SITE_ROOT.NAME_ROOT."/index.php/user/cart");
	}
}

<?php

/**
 * Class untuk penanganan model/tabel product
 */

class Product {

	/**
	 * Membuat tabel produk
	 */
	public static function createTable($registry) {
		$sql = "CREATE TABLE IF NOT EXISTS `product` (
					`product_id` INT(9) NOT NULL AUTO_INCREMENT,
					`product_name` VARCHAR(32) NOT NULL,
					`category` VARCHAR(16) NOT NULL ,
					`price` INT(12) NOT NULL ,
					`stock_count` INT(9) NOT NULL ,
					`image_link` VARCHAR(64) ,
					`description` TEXT ,
					PRIMARY KEY (`product_id`)
				)";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The product table is created';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Menambahkan data dummy
	 */
	public static function insertDummy($registry) {
		$data = array(
					array('HTML5 for Dummies',      'Ebook', 49000, 0, 'https://www.google.com/images/srpr/logo11w.png', ''),
					array('Javascript for Dummies', 'Ebook', 71000, 11, '', 'Is the best sfsfsdf'),
				);
		try {
			$dbh = $registry->database;
			$sth = $dbh->prepare("INSERT INTO product (product_name, category, price, stock_count, image_link,description) values (?, ?, ?, ?, ?, ?)"); 

			foreach ($data as $value) {
				if ($sth->execute($value) !== false) {
					echo '</br> Inserted => ' . implode(' | ',$value);
				}
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Menghapus tabel
	 */
	public static function dropTable($registry) {
		$sql = "DROP TABLE IF EXISTS `product`";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The product table is droped';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Mendapatkan seluruh baris produk dengan kategori tertentu
	 */
	public static function getByCategory($category) {
		try {
			$smh = $dbh->prepare('SELECT * FROM product WHERE category = :category');
    		$smh->execute(array('category' => $category));
 		
 			//return array of all
   			return $smh->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Mendapatkan seluruh baris produk dengan nama tertentu
	 */
	public static function getBySearch($keyword) {
		try {
			$smh = $dbh->prepare('SELECT * FROM product WHERE MATCH(product_name, description) AGAINST (:keyword IN BOOLEAN MODE)');
    		$smh->execute(array('keyword' => $keyword));
 		
 			//return array of all
   			return $smh->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Mendapatkan seluruh baris produk dengan id tertentu
	 */
	public static function getById($id) {
		try {
			$smh = $dbh->prepare('SELECT * FROM product WHERE product_id = :id');
    		$smh->execute(array('id' => $id));
 		
 			//return array of all
   			return $smh->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

} /*** end of class ***/
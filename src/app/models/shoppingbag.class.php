<?php

/**
 * Class untuk penanganan model/tabel product
 */

class ShoppingBag {

	/**
	 * Mengisi dummy dari tabel produk
	 */
	public static function createTable($registry) {
		$sql = "CREATE TABLE IF NOT EXISTS `shopping_bag` (
					`customer_id` INT(9) NOT NULL,
					`product_id` INT(9) NOT NULL,
					`request_count` INT(9) NOT NULL ,
					`request_description` TEXT ,
					`is_purchased` INT(1) NOT NULL ,
				)";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The Shopping_Bag table is created';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public static function dropTable($registry) {
		$sql = "DROP TABLE IF EXISTS `shopping_bag`";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The Shopping_Bag table is droped';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Mendapatkan shopping dengan customer id tertentu yang belum terbeli
	 */
	public static function getNotPurchasedByCustomerId($registry, $id) {
		try {
			$dbh = $registry->database;
			$smh = $dbh->prepare('SELECT * FROM shopping_bag WHERE customer_id = :id');
    		$smh->execute(array('id' => $id));
 		
 			//pasti cuma ada satu
   			return $smh->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

} /*** end of class ***/
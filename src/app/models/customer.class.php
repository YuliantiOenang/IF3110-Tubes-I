<?php

/**
 * Class untuk penanganan model/tabel product
 */

class Customer {

	/**
	 * Mengisi dummy dari tabel produk
	 */
	public static function createTable($registry) {
		$sql = "CREATE TABLE IF NOT EXISTS `customer` (
					`customer_id` INT(9) NOT NULL AUTO_INCREMENT,
					`username` VARCHAR(16) NOT NULL,
					`email` VARCHAR(32) NOT NULL ,
					`password` CHAR(64) NOT NULL ,
					`fullname` VARCHAR(32) NOT NULL ,
					`phone` VARCHAR(16) ,
					`address` VARCHAR(256) ,
					`city` VARCHAR(32) ,
					`province` VARCHAR(32) ,
					`postcode` CHAR(5) ,
					`card_number` VARCHAR(16) ,
					`card_name` VARCHAR(32) ,
					`card_expired` DATE ,
					PRIMARY KEY (`customer_id`)
				)";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The customer table is created';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public static function dropTable($registry) {
		$sql = "DROP TABLE IF EXISTS `customer`";
		try {
			$dbh = $registry->database;
			if ($dbh->exec($sql) !== false) {
				echo '</br> The customer table is droped';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Mendapatkan seluruh baris produk dengan id tertentu
	 */
	public static function getById($registry, $id) {
		try {
			$smh = $dbh->prepare('SELECT * FROM customer WHERE customer_id = :id');
    		$smh->execute(array('id' => $id));
 		
 			//return array of all
   			return $smh->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Menambah customer baru
	 */
	public static function addCustomer($registry, $customer) {
		try {
			$dbh = $registry->database;
			$sth = $dbh->prepare("INSERT INTO customer (username, email, password, fullname, phone, address, city, province, postcode) values (:username, :email, :password, :fullname, :phone, :address, :city, :province, :postcode)"); 

			return $sth->execute($customer) !== false;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

} /*** end of class ***/
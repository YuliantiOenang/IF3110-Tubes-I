<?php
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'ruserba');

	if (!isset($db)) $db = null;

	// Fungsi untuk melakukan koneksi ke database.
	function databaseConnect()	{
		global $db;
		$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	}

	// Fungsi untuk mengakhiri koneksi ke database.
	function databaseDisconnect()	{
		global $db;
		mysqli_close($db);
		$db = null;
	}

	// Fungsi-fungsi getter dasar.
	function fetchAssocArray($statement)	{
			// Credit goes to hamidhossain at gmail dot com.
			$meta = $statement->result_metadata();
			while ($field = $meta->fetch_field()) $params[] = &$row[$field->name];
			call_user_func_array(array($statement, 'bind_result'), $params);
			while ($statement->fetch()) {
					foreach($row as $key => $val) $c[$key] = $val;
					$result[] = $c;
			}
			if (!isset($result)) return null;
			return $result;
	}
	function getUserData($user_id)	{
		global $db;
		if ($stmt = $db->prepare("
			select *
			from user
			where id_user=?
		")) {			 
				$stmt->bind_param("i", $user_id);
				$stmt->execute();
				$result = fetchAssocArray($stmt);
				$stmt->close();
		}
		if (is_null($result)) return null;
		else return $result[0];
	}
	function getProductData($product_id)	{
		global $db;
		if ($stmt = $db->prepare("
			select *
			from barang
			where id_barang=?
		")) {			 
				$stmt->bind_param("i", $product_id);
				$stmt->execute();
				$result = fetchAssocArray($stmt);
				$stmt->close();
		}
		if (is_null($result)) return null;
		else return $result[0];
	}
	function getCategoryData($category_id)	{
		global $db;
		if ($stmt = $db->prepare("
			select *
			from kategori
			where id_kategori=?
		")) {			 
				$stmt->bind_param("i", $category_id);
				$stmt->execute();
				$result = fetchAssocArray($stmt);
				$stmt->close();
		}
		if (is_null($result)) return null;
		else return $result[0];
	}

	function getUserDataFromUsername($username)	{
		global $db;
		if ($stmt = $db->prepare("
			select *
			from user
			where username=?
		")) {			 
				$stmt->bind_param("i", $username);
				$stmt->execute();
				$result = fetchAssocArray($stmt);
				$stmt->close();
		}
		if (is_null($result)) return null;
		else return $result[0];
	}

?>

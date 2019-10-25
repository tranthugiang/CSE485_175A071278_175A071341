<?php 
	$host = "localhost";
	$user = "root";
	$pass = "ferytech";

	try {
		$con = new PDO("mysql:host=$host;dbname=baitaplop", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$con->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
		$con->query('SET NAMES utf8');
return $con;
	} catch (PDOException $e) {
		echo 'Connection Failed:' . $e->getMessage();
	}
?>
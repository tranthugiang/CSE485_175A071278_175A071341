<?php
include('connect.php');

if(isset($_POST['update'])) {
	$iddanhmuc = $_POST['iddanhmuc']; 
	$idtinhtrang = $_POST['idtinhtrang'];

$con->prepare("UPDATE danhmuc SET idtinhtrang=('$tinhtrang') WHERE iddanhmuc=('$iddanhmuc')");
	header('location:sua-danh-muc.php');

}
?>
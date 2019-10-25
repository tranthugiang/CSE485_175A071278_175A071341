<?php
include ('connect.php');

if(isset($_POST['login'])){
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT * FROM dangnhap WHERE tendangnhap = ? AND matkhau = ?  And idphanquyen = ?");
$fetch->execute(array($admin_user, $admin_pass, 1));
$count = $fetch->rowcount();
$row = $fetch->fetch();

if($count > 0) {

	session_start();
	$_SESSION['iddangnhap'] = $row['iddangnhap'];
	echo "<script>
	window.location = 'home.php';
</script>";

	
} else {
$fetch = $con->prepare("SELECT * FROM admin WHERE admin_user = ? AND admin_pass = ?  And idphanquyen = ?");
$fetch->execute(array($admin_user, $admin_pass, 2));
$count = $fetch->rowcount();
$row = $fetch->fetch();
}
if($count > 0) {

	session_start();
	$_SESSION['iddangnhap'] = $row['iddangnhap'];
	echo "<script>
	window.location = 'home-normal.php';
</script>";

	
} else {	


	
	
	
	echo "<script>alert('Wrong Username or Password')</script>";
	header('location:index.php');
}
}
?>

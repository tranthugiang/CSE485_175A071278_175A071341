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
	$_SESSION['user_id'] = $row['iddangnhap'];
	if(!isset($_COOKIE["client"]))

    {
        //tạo cookie có tên là client, giá trị là session_id, thời hạn 900 giây

        setcookie("client",$_SESSION['user_id'],time()+86400);

    }  
	echo "<script>
	window.location = 'home.php';
</script>";

	
} else {
$fetch = $con->prepare("SELECT * FROM dangnhap WHERE tendangnhap = ? AND matkhau = ?  And idphanquyen = ?");
$fetch->execute(array($admin_user, $admin_pass, 2));
$count = $fetch->rowcount();
$row = $fetch->fetch();
}
if($count > 0) {

	session_start();
	$_SESSION['user_id'] = $row['iddangnhap'];
	if(!isset($_COOKIE["client"]))

    {
        //tạo cookie có tên là client, giá trị là session_id, thời hạn 900 giây

        setcookie("client",$_SESSION['user_id'],time()+86400);

    }  
	echo "<script>
	window.location = 'home-normal.php';
</script>";

	
} else {	


	
	
	
	echo "<script>alert('Wrong Username or Password')</script>";
	header('location:index.php');
}
}
?>

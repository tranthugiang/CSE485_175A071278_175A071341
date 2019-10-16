<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'daihoctonducthang') or die(mysqli_error());
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php 
	session_start();
	include("connection.php");
	if (isset($_POST['username'])&&isset($_POST['password'])) {
	$name = $_POST["username"];
    $pass = $_POST["password"];

    $login = "SELECT * FROM user WHERE ten_dang_nhap = '$name' AND mat_khau = '$pass'";
	$error=false;
	$result= mysqli_query($conn,$login);
	if (!$result) {
		$error=mysqli_error($conn);
	}else{
		$user=mysqli_fetch_assoc($result);
		$_SESSION['current_user']=$user;
	}
	mysqli_close($conn);
	if($error !== false || $result -> num_rows == 0){
	 ?>
	 <script>
	 	arlert("Thông tin đăng nhập không chính xác !");
	 </script>
	
	<?php 
	}
	 ?>
	<?php } ?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-title p-b-55">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<!-- <div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit">
							Đăng nhập
						</button>
					</div>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Not a member?
						</span>

						<a class="txt1 bo1 hov1" style="color: red; font-size: 25px;" href="createaccount.php">
							Sign up now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php if (isset($_SESSION['current_user'])) {
		$currentUser=$_SESSION['current_user'];
		?>
		<script>
	 	arlert("Đăng nhập thành công ! Xin chào <?=$currentUser['fullname'] ?>");
	 	</script>
		<?php
		header("location:content.php");
	} ?>
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>
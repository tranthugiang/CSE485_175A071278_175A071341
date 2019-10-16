<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Đăng kí tài khoản</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/mystyle.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
	
	<?php 
	include("connection.php");
	include("function.php");
	if(isset($_POST["addNew"])){
		$table = "user";
		if(isset($_POST['ten_dang_nhap']) && !empty($_POST['ten_dang_nhap'])){
			if(isset($_POST['mat_khau']) && !empty($_POST['mat_khau'])){
				save($table,$_POST);
				header("location:login.php");
			}else{
				?>
				<script>
					alert("Tên đăng nhập không được để trống")
				</script>
				<?php
			}
		}else{
			?>
			<script>
				alert("Tên đăng nhập không được để trống")
			</script>
			<?php
		}
		
	}
	?>
	<div class="main-container ace-save-state" id="main-container">


		<div class="main-content">
			<div class="main-content-inner">
				

				<div class="page-content">

					<div class="page-header" >
						<h1 style="text-align: center; ">
							Đăng kí tài khoản	
						</h1>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<form class="form-horizontal" role="form" method="post" action="" style="padding-left: 250px;">
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mã </label>

									<div class="col-sm-9">
										<input type="text" id="userID" name="userID" placeholder="userID" class="col-xs-10 col-sm-5" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên đăng nhập </label>

									<div class="col-sm-9">
										<input type="text" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="Username" class="col-xs-10 col-sm-5" />
									</div>
								</div>		

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mật khẩu </label>

									<div class="col-sm-9">
										<input type="password" id="mat_khau" name="mat_khau" placeholder="Password" class="col-xs-10 col-sm-5" />
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ đệm </label>

									<div class="col-sm-9">
										<input type="text" id="ho_dem" name="ho_dem" placeholder="Họ đệm" class="col-xs-10 col-sm-5" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên </label>

									<div class="col-sm-9">
										<input type="text" id="ten" name="ten" placeholder="Tên" class="col-xs-10 col-sm-5" />
									</div>
								</div>	

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

									<div class="col-sm-9">
										<input type="text" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5" />
									</div>
								</div>		

								<div class="space-4"></div>


								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Địa chỉ </label>

									<div class="col-sm-9">
										<input type="text" id="diachi" name="diachi" placeholder="Địa chỉ" class="col-xs-10 col-sm-5" />
									</div>
								</div>

								<div class="space-4"></div>


								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit" name="addNew">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
										

										&nbsp; &nbsp; &nbsp;
										<a class="btn btn-danger" href="login.php">Login</a>


									</div>
								</div>


							</form>
						</div><!-- /.col -->
					</div>
					<script src="assets/js/jquery-2.1.4.min.js"></script>
				</div>
			</div>
		</div>
	</div>


</body>
</html>
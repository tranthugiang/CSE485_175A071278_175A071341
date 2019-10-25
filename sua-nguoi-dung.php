
<?php include("header.php") ?>
<?php
include ("connect.php");

 $nguoidung = ($_SESSION['user_id']);
$result=$con->prepare("SELECT * FROM dangnhap where iddangnhap ='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $iddangnhap = $row['iddangnhap'];

 if ($nguoidung = $iddangnhap )
 {
$quyenhanadmin ="disabled";
}
else
{
$quyenhanadmin ="1";
}

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
      <form action="sua-nguoi-dung.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Sửa Người Dùng</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                   

 <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mã Đăng Nhập:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['iddangnhap']; ?>
                                                </div>
                                        </div>
                                    </div>

 <input type="hidden" class="form-control" name="iddanhmuc" placeholder="Mã Danh Mục" value="<?php echo $row['iddanhmuc']; ?>">


       <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tên Đăng Nhập :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tendangnhap" value="<?php echo $row['tendangnhap']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mật Khẩu :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="matkhau" value="<?php echo $row['matkhau']; ?>">
                                                </div>
                                        </div>
                                    </div>
               
                 <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Họ Tên :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="hoten" value="<?php echo $row['hoten']; ?>">
                                                </div>
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Địa Chỉ :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="diachi" value="<?php echo $row['diachi']; ?>">
                                                </div>
                                        </div>
                                    </div>

                                    



                                   <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Phân Quyền :
                                            </span>
                                               <select class="form-control" name="phanquyen" <?php echo $quyenhanadmin ?>>
                                    <?php
                                        include("connect.php"); 
                                        $quyennhan = $con->prepare("SELECT * FROM phanquyen  ORDER BY idphanquyen");
                                        $quyennhan->execute();
                                        while($row = $quyennhan->fetch()) {
                                            $idphanquyen= $row['idphanquyen'];
                                            $tenquyen = $row['tenquyen'];
                                           
                                    ?>
                                    <option value="<?php echo $idphanquyen ?>"><?php echo $tenquyen ?></option>
                                     
                                    <?php } ?>
                                    </select>
                                        </div>
                                    </div>
                                               
                                   <br/>
                                               
                                    <div class="col-md-8">
                                       <input type="submit" name="update" value="Sửa Người Dùng" class="btn btn-success">  
                                </div>
 <div class="col-md-4">
                                       <input type="submit" name="delete" value="Xóa Người Dùng" class="btn btn-success">
                                </div>

                                  </form>
                                

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

            <!-- #END# Input Group -->           
        </div>
        <?php } ?>
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>

 
 <?php
if(isset($_POST['update'])) {
   

   
    $iddangnhap =  $_POST['iddanhmuc'];
    $tendangnhap = $_POST['tendangnhap'];
    $hoten = $_POST['hoten']; 
      $matkhau = $_POST['matkhau']; 
    $diachi = $_POST['diachi'];
 $phanquyen = $_POST['phanquyen'];

 if ($_POST['phanquyen'] = '1' )

 {
echo '<script language="javascript"> alert("Tài Khoản Admin Không Thể Xuống Cấp")</script>';
 }

 else {

    $suanguoidung = $con->prepare("UPDATE dangnhap SET tendangnhap = ?, matkhau = ?, hoten = ?,diachi = ?,idphanquyen = ? WHERE iddangnhap = ?");
    $suanguoidung->execute(array($tendangnhap, $hoten,$diachi, $phanquyen,$iddangnhap));
     echo '<script>window.location.href=("danh-sach-nguoi-dung.php");</script>'; // chuyển trang
 }
}
    ?>
 <?php
if(isset($_POST['delete'])) {
   
   $iddanhmuc =  $_POST['iddanhmuc'];
    $delete = $con->prepare("DELETE FROM danhmuc WHERE iddanhmuc = '$iddanhmuc'");
    $delete->execute();
     echo '<script>window.location.href=("danh-sach-nguoi-dung.php");</script>'; // chuyển trang
 }
    ?>

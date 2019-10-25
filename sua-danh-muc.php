
<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT dangnhap.iddangnhap,dangnhap.tendangnhap,danhmuc.iddanhmuc,danhmuc.tendanhmuc,danhmuc.mota,danhmuc.iddangnhap,danhmuc.ngaydang,danhmuc.idtinhtrang,tinhtrang.idtinhtrang,tinhtrang.tentinhtrang FROM dangnhap,danhmuc,tinhtrang where dangnhap.iddangnhap=danhmuc.iddangnhap and danhmuc.idtinhtrang=tinhtrang.idtinhtrang and danhmuc.iddanhmuc='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $iddanhmuc = $row['iddanhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $mota = $row['mota']; 
    $ngaydang = $row['ngaydang']; 
    $tentinhtrang = $row['tentinhtrang']; 

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
      <form action="sua-danh-muc.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Sửa Danh Mục</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>

 <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mã Danh Mục:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['iddanhmuc']; ?>
                                                </div>
                                        </div>
                                    </div>
 <input type="hidden" class="form-control" name="iddanhmuc" placeholder="Mã Danh Mục" value="<?php echo $row['iddanhmuc']; ?>">
                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Ngày Đăng:
                                            </span>
                                                <div class="form-line">

                                                <input type="text" class="form-control" name="ngaydang" placeholder="Ngày Đăng" value="<?php echo $row['ngaydang']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                  


                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tên Danh Mục :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tendanhmuc" placeholder="Tên Danh Mục" value="<?php echo $row['tendanhmuc']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mô Tả :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="mota" placeholder="Mô Tả" value="<?php echo $row['mota']; ?>">
                                                </div>
                                        </div>
                                    </div>
               

 <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Người Đăng:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['tendangnhap']; ?>
                                                </div>
                                        </div>
                                    </div>

                                   <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tình Trạng:
                                            </span>
                                               <select class="form-control" name="tinhtrang">
                                    <?php
                                        include("connect.php"); 
                                        $personnel = $con->prepare("SELECT * FROM tinhtrang ORDER BY idtinhtrang");
                                        $personnel->execute();
                                        while($row = $personnel->fetch()) {
                                            $idtinhtrang = $row['idtinhtrang'];
                                            $tentinhtrang = $row['tentinhtrang'];
                                           
                                    ?>
                                    <option value="<?php echo $idtinhtrang ?>"><?php echo $tentinhtrang?></option>
                                     
                                    <?php } ?>
                                    </select>
                                        </div>
                                    </div>
                                               
                                    <div class="col-md-4">
                                       <input type="submit" name="update" value="Sửa Danh Mục" class="btn btn-success">  
                                </div>
 <div class="col-md-4">
                                       <input type="submit" name="delete" value="Xóa Danh Mục" class="btn btn-success">
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
   

   
    $iddanhmuc =  $_POST['iddanhmuc'];
    $tendanhmuc2 = $_POST['tendanhmuc'];
    $mota2 = $_POST['mota']; 
  
    $tinhtrang = $_POST['tinhtrang'];

    $add_personnel = $con->prepare("UPDATE danhmuc SET tendanhmuc = ?, mota = ?, ngaydang = NOW(), idtinhtrang = ? WHERE iddanhmuc = ?");
    $add_personnel->execute(array($tendanhmuc2, $mota2,$tinhtrang, $iddanhmuc));
     echo '<script>window.location.href=("danh-muc-bai-viet.php");</script>'; // chuyển trang
}
    ?>
 <?php
if(isset($_POST['delete'])) {
   
   $iddanhmuc =  $_POST['iddanhmuc'];
    $delete = $con->prepare("DELETE FROM danhmuc WHERE iddanhmuc = '$iddanhmuc'");
    $delete->execute();
     echo '<script>window.location.href=("danh-muc-bai-viet.php");</script>'; // chuyển trang
 }
    ?>

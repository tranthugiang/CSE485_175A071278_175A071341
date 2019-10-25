







<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT * FROM donhang  WHERE iddonhang='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $per_id = $row['iddonhang'];
    $ngaydathang = $row['ngaydathang'];
    $hoten = $row['hoten']; 
    $diachi = $row['diachi']; 
    $sodienthoai = $row['sodienthoai']; 
    $email = $row['email'];
    $tensanpham = $row['tensanpham']; 
    $giagoc = $row['giagoc']; 
    $soluong = $row['soluong']; 
    $thanhtien = $row['thanhtien']; 

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
     
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Nội dung Bài Viết</h4>
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
                                                id:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['iddonhang']; ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mã đặt hàng:
                                            </span>
                                                <div class="form-line">
                                                 <?php echo $row['iddonhang']; ?>
                                                </div>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Ngày đặt hàng:
                                            </span>
                                                <div class="form-line">
                                        <?php echo $row['ngaydathang']; ?>
                                                </div>
                                        </div>
                                    </div>

                                    



 <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Họ Tên:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['hoten']; ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Số điện Thoại:
                                            </span>
                                                <div class="form-line">
                                                 <?php echo $row['sodienthoai']; ?>
                                                </div>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Email:
                                            </span>
                                                <div class="form-line">
                                        <?php echo $row['email']; ?>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Địa Chỉ:
                                            </span>
                                                <div class="form-line">
                                            <?php echo $row['diachi']; ?>
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tên Sản Phẩm:
                                            </span>
                                                <div class="form-line">
                                            <?php echo $row['tensanpham']; ?>
                                                </div>
                                        </div>
                                    </div>
               

 <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Giá Sản Phẩm:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['giagoc']; ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Số Lượng:
                                            </span>
                                                <div class="form-line">
                                                 <?php echo $row['soluong']; ?>
                                                </div>
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Thành Tiền:
                                            </span>
                                                <div class="form-line">
                                        <?php echo $row['thanhtien']; ?>
                                                </div>
                                        </div>
                                    </div>              
                                    <div class="col-md-4">
                                       <a class="btn btn-success btn-sm" href="xem_don_hang.php?per_id=<?php echo $row['iddonhang']?>">
                                      <span class = "glyphicon glyphicon-ok">Đã Kiểm Tra Đơn Hàng</span>
                                    </a>  
                                </div>
 <div class="col-md-4">
                                       <a class="btn btn-success btn-sm" href="xem_don_hang.php?per_id=<?php echo $row['iddonhang']?>">
                                      <span class = "glyphicon glyphicon-pencil">Sửa Đơn Hàng</span>
                                    </a>  
                                </div>
                                 <div class="col-md-4">
                                       <a class="btn btn-success btn-sm" href="xem_don_hang.php?per_id=<?php echo $row['iddonhang']?>">
                                      <span class = "glyphicon glyphicon-remove">Xóa Đơn Hàng</span>
                                    </a>  
                                </div>

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

 

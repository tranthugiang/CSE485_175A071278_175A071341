
<?php include("header.php") ?>
<?php
include ("connect.php");
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
      <form action="them-nguoi-dung.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Thêm Người Dùng</h4>



                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>


                                  


                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tên Đăng Nhập :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tendangnhap" placeholder="Tên Đăng Nhập">
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mật Khẩu :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="matkhau" placeholder="Mật Khẩu">
                                                </div>
                                        </div>
                                    </div>
               
                 <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Họ Tên :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="hoten" placeholder="Họ Tên">
                                                </div>
                                        </div>
                                    </div>

                                      <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Địa Chỉ :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ">
                                                </div>
                                        </div>
                                    </div>

                                    



                                   <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Phân Quyền :
                                            </span>
                                               <select class="form-control" name="phanquyen">
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
                                               
                                    <div class="col-md-4">
                                       <input type="submit" name="save" value="Thêm Người Dùng" class="btn btn-success">  
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
     
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>

 
 <?php
if(isset($_POST['save'])) {
   

   
   
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau']; 
   $hoten = $_POST['hoten'];
    $diachi = $_POST['diachi']; 
    $phanquyen = $_POST['phanquyen'];

    $add_personnel = $con->prepare("INSERT INTO dangnhap (tendangnhap,matkhau,hoten,diachi,ngaylap,idphanquyen ) VALUES (?, ?, ?, ?, NOW(), ? )");
    $add_personnel->execute(array($tendangnhap, $matkhau, $hoten,$diachi,$phanquyen));
    echo '<script>window.location.href=("danh-sach-nguoi-dung.php");</script>'; // chuyển trang
}
    ?>


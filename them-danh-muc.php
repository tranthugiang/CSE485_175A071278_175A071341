
<?php include("header.php") ?>
<?php
include ("connect.php");
 $nguoidang = ($_SESSION['user_id']);
?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
      <form action="them-danh-muc.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Thêm Danh Mục</h4>



                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>


                                  


                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tên Danh Mục :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tendanhmuc" placeholder="Tên Danh Mục">
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Mô Tả :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="mota" placeholder="Mô Tả">
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
                                       <input type="submit" name="save" value="Thêm Danh Mục" class="btn btn-success">  
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
   

   
   
    $tendanhmuc = $_POST['tendanhmuc'];
    $mota = $_POST['mota']; 
  
    $tinhtrang = $_POST['tinhtrang'];

    $add_personnel = $con->prepare("INSERT INTO danhmuc (tendanhmuc,mota,iddangnhap,ngaydang,idtinhtrang ) VALUES (?, ?, ?, NOW(), ? )");
    $add_personnel->execute(array($tendanhmuc, $mota, $nguoidang,$tinhtrang));
    echo '<script>window.location.href=("danh-muc-bai-viet.php");</script>'; // chuyển trang
}
    ?>


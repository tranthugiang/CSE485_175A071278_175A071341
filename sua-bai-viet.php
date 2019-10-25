







<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT dangnhap.iddangnhap,dangnhap.tendangnhap,danhmuc.iddanhmuc,danhmuc.tendanhmuc,tintuc.idtintuc,tintuc.tieude,tintuc.noidung,tintuc.ngayviet,tintuc.iddanhmuc,tintuc.iddangnhap,tintuc.idtinhtrang,tinhtrang.idtinhtrang,tinhtrang.tentinhtrang,tintuc.idhinhanh,thuvien.idhinhanh,thuvien.tenanh FROM dangnhap,tintuc,tinhtrang,danhmuc,thuvien where dangnhap.iddangnhap=tintuc.iddangnhap and tintuc.idtinhtrang=tinhtrang.idtinhtrang  and danhmuc.iddanhmuc=tintuc.iddanhmuc and tintuc.idhinhanh=thuvien.idhinhanh and tintuc.idtintuc='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $per_id = $row['iddanhmuc'];
    $tieude = $row['tendanhmuc'];
    $noidung = $row['noidung']; 
    $ngayviet = $row['ngayviet']; 
    $danhmuc = $row['tentinhtrang']; 
    $hinhanh = $row['tentinhtrang'];
    $nguoidang = $row['tendangnhap'];
    $tinhtrang = $row['tentinhtrang'];
 $tenanh = $row['tenanh'];

?>
    <link href="css/style2.css" rel="stylesheet">
     <script type="text/javascript" src="js/edittor-latest.js"></script>
       <script type="text/javascript">

        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {

             new nicEditor().panelInstance('area1');

        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {

             new nicEditor({fullPanel : true}).panelInstance('area2');

        }); // convert text area with id area2 to rich text editor with full panel.

</script>

  <script type="text/javascript">

//<![CDATA[

  bkLib.onDomLoaded(function() {

        new nicEditor({maxHeight : 200}).panelInstance('area');

        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');

  });

  //]]>

  </script>
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
           <form action="sua-bai-viet.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>Sửa Bài Viết</h4>
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
                                                Mã Bài Viết:
                                            </span>
                                                <div class="form-line">
                                                    <?php echo $row['idtintuc']; ?>
                                                </div>
        <input type="hidden" class="form-control" name="idtintuc" placeholder="Mã Bài Viết" value="<?php echo $row['idtintuc']; ?>">
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Ngày Đăng:
                                            </span>
                                                <div class="form-line">

                                                <input type="text" class="form-control" name="ngayviet" placeholder="Ngày Đăng" value="<?php echo $row['ngayviet']; ?>">
                                                <
                                    </div>
                                        </div>

                                  </div>


                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tiêu Đề :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề bài viết" value="<?php echo $row['tieude']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                   
                                       <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Nội Dung :
                                            </span>
                                                <div class="form-line">
                                


 <div id="sample">

  <textarea  name="noidung"  id="mota" type="text" style="width:660px;height:200px;color: #ffffff"

placeholder="Mô tả bài viết"><?php echo $row['noidung']; ?></textarea>

</div>

   
                                                </div>
                                        </div>
                                    </div>
                <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Ảnh Đại diện:
                                            </span>
                                                <div class="form-line">
                                                    <img src="<?php echo $tenanh; ?>" style="width: 100px; height: 80px;"> <br>
                                         <?php include('sua-hinh-anh-bai-viet.php'); ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Danh Mục:
                                            </span>
                                               <select class="form-control" name="chondanhmuc">
                                    <?php
                                        include("connect.php"); 
                                        $danhmucc = $con->prepare("SELECT * FROM danhmuc where idtinhtrang = 1 ORDER BY iddanhmuc");
                                        $danhmucc->execute();
                                        while($row = $danhmucc->fetch()) {
                                            $iddanhmuc = $row['iddanhmuc'];
                                            $tendanhmuc = $row['tendanhmuc'];
                                           
                                    ?>
                                    <option value="<?php echo $iddanhmuc ?>"><?php echo $tendanhmuc?></option>
                                     
                                    <?php } ?>
                                    </select>
                                        </div>
                                    </div>

 <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Người Đăng:
                                            </span>
                                                <div class="form-line">
                                                <?php echo $nguoidang  ?>

                                                    
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tình Trạng:
                                            </span>
                                               <select class="form-control" name="chontinhtrang">
                                    <?php
                                        include("connect.php"); 
                                        $tinhtrangc = $con->prepare("SELECT * FROM tinhtrang ORDER BY idtinhtrang");
                                        $tinhtrangc->execute();
                                        while($row = $tinhtrangc->fetch()) {
                                            $idtinhtrang = $row['idtinhtrang'];
                                            $tentinhtrang = $row['tentinhtrang'];
                                           
                                    ?>
                                    <option value="<?php echo $idtinhtrang ?>"><?php echo $tentinhtrang?></option>
                                     
                                    <?php } ?>
                                    </select>




                                        </div>
                                    </div>
                                               
                                    <div class="col-md-4">
                                       <input type="submit" name="update" value="Sửa Bài Viết" class="btn btn-success">  
                                </div>
 <div class="col-md-4">
                                     <input type="submit" name="delete" value="Xóa Bài Viết" class="btn btn-success"> 
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
   

   
    $idtintuc =  $_POST['idtintuc'];
    $suatieude = $_POST['tieude'];
    $suanoidung = $_POST['noidung']; 
   
    $suadanhmuc = $_POST['chondanhmuc']; 
    $suatinhtrang = $_POST['chontinhtrang'];
    $suahinhanh = $_POST['chontinhtrang'];
    $iddangnhap = $_POST['chontinhtrang'];

    $suatintuc = $con->prepare("UPDATE tintuc SET tieude = ?, noidung = ?, iddanhmuc = ?,idtinhtrang = ? WHERE idtintuc = ?");
    $suatintuc->execute(array($suatieude,$suanoidung,$suadanhmuc, $suatinhtrang,$idtintuc));
     echo '<script>window.location.href=("tat-ca-bai-viet.php");</script>'; // chuyển trang 

}
    ?>
 <?php
if(isset($_POST['delete'])) {
   
   $idbaiviet =  $_POST['idbaiviet'];
    $delete = $con->prepare("DELETE FROM baiviet WHERE baiviet = '$iddanhmuc'");
    $delete->execute();
     echo '<script>window.location.href=("tat-ca-bai-viet.php");</script>'; // chuyển trang
 }
    ?>

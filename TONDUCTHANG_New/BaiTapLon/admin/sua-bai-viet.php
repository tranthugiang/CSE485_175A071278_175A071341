







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
                                                    <?php echo $row['iddanhmuc']; ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Ngày Đăng:
                                            </span>
                                                <div class="form-line">

                                                <input type="text" class="form-control" name="ngayviet" placeholder="Ngày Đăng" value="<?php echo $row['ngayviet']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                  


                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tiêu Đề :
                                            </span>
                                                <div class="form-line">
                                            <input type="text" class="form-control" name="tieude" placeholder="Tên Danh Mục" value="<?php echo $row['tieude']; ?>">
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

  <textarea  name="mota"  id="mota" type="text" style="width:660px;height:200px;color: #ffffff"

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
                                               <select class="form-control" name="per_name">
                                    <?php
                                        include("connect.php"); 
                                        $personnel = $con->prepare("SELECT * FROM danhmuc ORDER BY iddanhmuc");
                                        $personnel->execute();
                                        while($row = $personnel->fetch()) {
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
                                                    <?php echo $row['admin_user']; ?>
                                                </div>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Tình Trạng:
                                            </span>
                                                <div class="form-line">
                                                 <?php echo $row['tentinhtrang']; ?>
                                                </div>
                                        </div>
                                    </div>
                                               
                                    <div class="col-md-4">
                                       <input type="submit" name="update" value="Sửa Bài Viết" class="btn btn-success">  
                                </div>
 <div class="col-md-4">
                                       <a class="btn btn-success btn-sm" href="xoa-bai-viet.php?per_id=<?php echo $row['iddonhang']?>">
                                      <span class = "glyphicon glyphicon-remove">Xóa Bài Viết</span>
                                    </a>  
                                </div>
                                 <div class="col-md-4">
                                       <?php include('sua-tinh-trang-danh-muc.php'); ?>
                                     
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

 

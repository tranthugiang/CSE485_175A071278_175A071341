<?php 
include("header.php")
?>
<body>
<style type="text/css">
    table {
        width: 100%;
        text-align: center;
    }
    td {
        border: 1px solid;
    }
     th {
        font-size: 15px;   
        border: 1px solid;
    }
</style> 
 <section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <button class = "btn btn-default" href="#" data-toggle="modal" data-target="#add_file" style = "float:right; width:150px;">Thêm ảnh</button>
                            <h4>THƯ VIỆN</h4>
                        </div>
                    </div>
                    <?php include("them-hinh-anh.php"); ?>
                    <div id="print">
                        <div class="card" style="width: 49%; display: inline-block;">
                            <div class="per-files">
                                <div class = "panel panel-primary">
                                    <div class = "panel-heading">
                                        <h5>Thư Viện</h5>
                                    </div>
                                </div>
                                <?php 
                                    include('connect.php');

                                    $stmt=$con->prepare("SELECT * FROM thuvien");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                                <div class="files">
                                <form method="POST" action="" >
                                    <a href="thu-vien.php?idhinhanh=<?php echo $idhinhanh; ?>"><img src="<?php echo $tenanh; ?>" style="width: 100px; height: 80px; padding: 5px;"><br>
                                    <p></p></a>
                                </div>
                                </form>
                                <?php } } ?>
                            </div>
                        </div>
                        <div class="card pull-right" style="width: 50%;">
                            <div class="per-files">
                                <div class = "panel panel-primary">

                                    <div class = "panel-heading">
                                        <h5>Thông tin ảnh</h5>
                                    </div>
                                
                                    <table cellspacing="0">
                                        <thead>
                                            <th>Tên Ảnh</th>
                                            <th>Ngày Đăng</th>
                                            <th>Thao Tác</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                if (isset($_GET['idhinhanh'])){
                                $stmt=$con->prepare("SELECT * FROM thuvien  where idhinhanh = '{$_GET['idhinhanh']}'");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                                            <tr>

                                            <td><?php echo $tenanh; ?></td>
                                            <td><?php echo $ngaydang; ?></td>
                                            <td><a href="download.php?download_file=<?php echo $file_name ;?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <?php } } ?>
                                     <?php } else { ?>

                                    <div class = "panel-heading">
                                        <h5>Không có ảnh được chọn</h5>
                                    </div>
                                     <?php }
                                     ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
</body>
<script src="plugins/js/jquery-1.js"></script>
<?php include("script.php"); ?>

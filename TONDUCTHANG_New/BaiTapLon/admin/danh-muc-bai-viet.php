<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">

 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>TẤT CẢ BÀI VIẾT</h4>
                                <a href="them-danh-muc.php">
                                    <input type="button" value="Thêm Danh Mục" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                               
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td width="30%">Tên Danh Mục</td>
                                        <td width="20%">Mô Tả</td>
                                        <td width="20%">Tác Giả</td>
                                        <td width="15%">Ngày Đăng</td>
                                        <td width="15%">Tình Trạng</td>
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT dangnhap.iddangnhap,dangnhap.tendangnhap,danhmuc.iddanhmuc,danhmuc.tendanhmuc,danhmuc.mota,danhmuc.iddangnhap,danhmuc.ngaydang,danhmuc.idtinhtrang,tinhtrang.idtinhtrang,tinhtrang.tentinhtrang FROM dangnhap,danhmuc,tinhtrang where dangnhap.iddangnhap=danhmuc.iddangnhap and danhmuc.idtinhtrang=tinhtrang.idtinhtrang  ORDER BY iddanhmuc ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                    


                                  ?>
                                  <tr>
                                  <td class="hidden"><?php echo $row['iddanhmuc']; ?></td>
                                  
                                  
                                  <td><?php echo $row['tendanhmuc']; ?></td>
                                  <td><?php echo $row['mota']; ?></td>
                                  <td><?php echo $row['tendangnhap']; ?></td>
                                  <td><?php echo $row['ngaydang']; ?></td>
                                  <td><?php echo $row['tentinhtrang']; ?></td>
                                
                                 
                                 
                                 
                                  <td>     
                                    <a class="btn btn-success btn-sm" href="sua-danh-muc.php?per_id=<?php echo $row['iddanhmuc']?>">
                                      <span class = "glyphicon glyphicon-penci" aria-hidden = "true">Sửa</span>
                                    </a>                                 
                                  </td>
                                </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>

   <script>
    function printDiv() {
        //Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
    </script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>

        </body>
</html>





    

  





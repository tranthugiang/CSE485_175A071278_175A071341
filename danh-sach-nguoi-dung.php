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
                                <h4>DANH SÁCH NGƯỜI DÙNG</h4>
                                <a href="them-nguoi-dung.php">
                                    <input type="button" value="Thêm Người Dùng" class="print btn-default" style="margin-right: 80px; width: auto;">
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
                                        <td width="30%">Họ Tên</td>
                                        <td width="20%">Tên Đăng Nhập</td>
                                        <td width="20%">Địa Chỉ</td>
                                        <td width="15%">Ngày Lập</td>
                                        <td width="15%">Quyền Hạn</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT dangnhap.iddangnhap,dangnhap.tendangnhap,dangnhap.matkhau,dangnhap.hoten,dangnhap.diachi,dangnhap.ngaylap,phanquyen.idphanquyen,phanquyen.tenquyen FROM dangnhap,phanquyen where dangnhap.idphanquyen= phanquyen.idphanquyen  ORDER BY dangnhap.iddangnhap  ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                

                                  ?>
                                  <tr>
                                  <td class="hidden"><?php echo $row['iddangnhap']; ?></td>
                                  
                                  
                                  <td><?php echo $row['hoten']; ?></td>
                                  <td><?php echo $row['tendangnhap']; ?></td>
                                  <td><?php echo $row['diachi']; ?></td>
                                  <td><?php echo $row['ngaylap']; ?></td>
                                  <td><?php echo $row['tenquyen'];; ?></td>
                                
                                 
                                 
                                 
                                  <td>     
                                    <a class="btn btn-success btn-sm" href="sua-nguoi-dung.php?per_id=<?php echo $row['iddangnhap']?>">
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





    

  





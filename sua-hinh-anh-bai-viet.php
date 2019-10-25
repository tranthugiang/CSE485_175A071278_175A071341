<a class="btn btn-success" href="#edit<?php echo $row['iddanhmuc']?>" data-toggle="modal">
    <span class = "glyphicon glyphicon-pencil">Thay Đổi</span>
</a> 
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['iddanhmuc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
        <div class = "panel panel-primary">
            <div class = "panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>


 <button class = "btn btn-default" href="#" data-toggle="modal" data-target="#add_file" style = "float:right; width:140px;">Thêm ảnh</button>
                    <?php include("them-hinh-anh-bai-viet.php"); ?>







                <h4>Thư Viện</h4>

            </div>
        </div>
        <div class="modal-body">          
            <form action="sua-hinh-anh-bai-viet-query.php" method="POST">
        </div>
        <div class="modal-body">
            
  <div id="print">
                       
                                <?php 
                                    include('connect.php');

                                    $stmt=$con->prepare("SELECT * FROM thuvien");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                                <div class="files">
                             <input type="radio" id="<?php echo $idhinhanh; ?>" name="gender" class="minimal">
        <label for="<?php echo $idhinhanh; ?>"> <img src="<?php echo $tenanh; ?>" style="width: 100px; height: 80px; padding: 3px;"></label>
                                  <br>
                                    <p></p>
                                </div>
                              
                                <?php } } ?>
                          

           
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-lg" name = "update">Cập Nhập</button>
        </div>
            </form>
        </div>
        </div>
    </div>
</div>



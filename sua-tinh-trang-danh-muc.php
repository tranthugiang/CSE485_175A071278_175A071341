<a class="btn btn-success" href="#edit<?php echo $row['iddanhmuc']?>" data-toggle="modal">
    <span class = "glyphicon glyphicon-pencil">Thay Đổi Tình Trạng</span>
</a> 
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['iddanhmuc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
        <div class = "panel panel-primary">
            <div class = "panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Thay Đổi Tình Trạng</h4>
            </div>
        </div>
        <div class="modal-body">          
            <form action="sua-tinh-trang-danh-muc-query.php" method="POST">
        </div>
        <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon">
                Tên Tình Trạng :
                </span>
                <div class="form-line">
                    <input type="hidden" class="form-control" name="iddanhmuc" value="<?php echo $row['iddanhmuc']?>">
                   <select name="tinhtrang">
<?php
                    include ("connect.php");


$result=$con->prepare("SELECT * from tinhtrang"); 
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row)
    { ?>
           
        <option value= "<?php echo ($row['idtinhtrang'])?>" selected="selected"><?php echo ($row['tentinhtrang'])  ?>
        </option>
       
    <?php } ?>
</select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-lg" name = "update">Cập Nhập</button>
        </div>
            </form>
        </div>
        </div>
    </div>
</div>



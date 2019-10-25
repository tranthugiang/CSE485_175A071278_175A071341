<?php
include('connect.php');
if(isset($_POST['update'])) {
   

   
    $iddanhmuc =  $_POST['iddanhmuc'];;
    $tendanhmuc2 = $_POST['tendanhmuc'];
    $mota2 = $_POST['mota']; 
  
    $tinhtrang = $_POST['tinhtrang'];

    $add_personnel = $con->prepare("UPDATE danhmuc SET tendanhmuc = ?, mota = ?, ngaydang = NOW(), idtinhtrang = ? WHERE iddanhmuc = ?");
    $add_personnel->execute(array($tendanhmuc2, $mota2,$tinhtrang, $iddanhmuc));
   
}
    ?>

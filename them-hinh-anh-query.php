<?php
include('connect.php');
if(isset($_POST['upload'])) {
	
	$target_dir = "uploads/";
    $target_file = $target_dir. basename($_FILES["per_file"]["name"]);
    $uploadOk = 1;


    if (move_uploaded_file($_FILES["per_file"]["tmp_name"], $target_file)) {
    } else {
        echo "Có lỗi khi tải file.";
    }

    $file = $target_file; // used to store the filename in a variable
	$add_file = $con->prepare("INSERT INTO thuvien (tenanh ,ngaydang) VALUES (?, NOW())");
	$add_file->execute(array($file));

    header('location:thu-vien.php');
}
?>
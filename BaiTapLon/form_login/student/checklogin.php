<?php
    session_start();
    $email = $_POST['txtMSSV'];
    $password = $_POST['txtPass'];
    $password=md5($password);
    $conn = mysqli_connect('localhost', 'root', '', 'daihoctonducthang');
    if(!$conn){
        die('Cann connect');
    }
    $sql = " SELECT * FROM user where ten_dang_nhap='$email' and mat_khau='$password'";
    if(mysqli_query($conn,$sql)){
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['txtMSSV']=$email;
            $_SESSION['txtPass']=$password;
            header("Location:adminpage.php");
        }else{
            header ('Location:login.php');
        }
    }
?>
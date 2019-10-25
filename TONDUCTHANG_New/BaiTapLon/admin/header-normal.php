<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Quản lý website</title>
 <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <style type="text/css">
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        border-radius: 30%;
        margin-left: -178px;
        margin-top: 153px;
        width: 21%;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .navbar-right {
        margin-left: 850px;

    }
    .notif {
        padding-top: 15px;
        margin-left: 20px;
        margin-right: 20px;
        border: 1px solid;
        height: auto;
        text-align: center;
    }
    .notif i {
        border-bottom: 2px solid;

    }
    .celeb {
        text-align: left;
        margin: 10px;
    }
    a:hover {
    text-decoration: none;
    }
    .files {
        width: 100px;
        display: inline-flex;
        margin: 5px;
        text-align: center;
    }
    </style>
</head>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style="background-color:#f44336;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.php" style="color: #fff;">Quản Lý website</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>
                <ul class = "dropdown-menu">
                    <li>
                        <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">BẢNG ĐIỀU KHIỂN</li>
                    <li>
                        <a href="home.php">
                            <i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Trang Chủ
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Bài Viết
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tat-ca-bai-viet.php">Tất cả bài viết</a>
                            </li>
                            <li>
                                <a href="viet-bai-moi.php">Viết Bài Mới</a>
                            </li>
                            <li>
                                <a href="danh-muc-bai-viet.php">Danh mục bài viết</a>
                            </li>
                             <li>
                                <a href="thung-rac.php">Thùng rác</a>
                            </li>

                            
                        </ul> 
                    </li>                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;Cài Đặt
                        </a>
                              <ul class="ml-menu">
                            <li>
                                <a href="cai-dat-chung.php">Cài đặt chung</a>
                            </li>
                            <li>
                                <a href="anh-slide.php">Ảnh slide</a>
                            </li>
                            <li>
                                <a href="banner.php">banner</a>
                            </li>
                    
                           
                        </ul>
                        
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Thư viện
                        </a>
                        <ul class="ml-menu">
                             <li>
                                <a href="thu-vien.php">
                                    Thư Viện Ảnh
                                </a>
                            </li>
                      <li>
                                <a href="them-hinh-anh.php">
                                    Thêm tập tin
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul><br><br><br>
                <div class="dtime">
                    <div class="alert alert-info">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                 </div>
               
            </div>

        </aside>
    </section>





<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">

 <?php
@session_start();
if(empty($_SESSION['user_id']))
{
header('Location: index.php');
}
?>
<div class="dashboard-top">
  <div class="row clearfix">
        </div>
</div>
   
        <script src="js/jquery.min.js"></script>
        <?php include('script.php'); ?> 
        </body>
</html>
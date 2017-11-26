<?php
include "config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
//$cart = new Cart();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  include ROOT."/include/head.php";
  ?>
</head>

<body>
<!--phần header-->
<div class="header">
  <?php
  include ROOT ."/include/header.php";
  ?>
</div><!--kết thúc header-->
<!--phần menu-->
 <div class="menu"  data-spy="affix" data-offset-top="197">
   <?php
  include ROOT ."/include/menu.php";
  ?>
 </div> 
<!--dienthoaicodinh-->
<?php
  include ROOT."/include/dtcd.php";
?>
 <!--KT dienthoaicodinh-->   
 <!--kết thúc phần menu -->
 <!--phần slider-->
   <div class="slider">
     <?php
  include ROOT."/include/slider.php";
?>
   </div><!--kết thúc slider-->
 <!--phần icon-->
 <div class="icon">
   <?php
  include ROOT ."/include/icon.php";
  ?>
 </div><!--kết thúc icon-->
<div class="content"> 
  <?php
  $menu = isset($_GET["menu"])?$_GET["menu"]:"";
  if ($menu=="")
    include ROOT ."/include/sanpham.php";
  if ($menu=="sanpham")
    include ROOT ."/san-pham/index.php";
  if ($menu=="dichvu")
    include ROOT ."/thongtin/dichvu.php";
  if ($menu=="gioithieu")
    include ROOT ."/thongtin/gioithieu.php";
  if ($menu=="lienhe")
    include ROOT ."/thongtin/lienhe.php";
  if ($menu=="thanhtoan")
    include ROOT ."/thongtin/thanhtoan.php";
 if ($menu=="search")
    include ROOT ."/san-pham/sanpham_timkiem.php";

  ?>

</div>
<!--Phần footer-->
<div class="phancuoi">
  <?php
  include ROOT ."/include/phancuoi.php";
  ?>
</div>


<div class="icons">
  <?php
  include ROOT ."/include/icons.php";
  ?>
</div>
<!--con trỏ trở lên đầu trang-->
<a  href="#" id="scroll_top" onclick="jQuery('html,body').animate({scrollTop: 0},1000);"></a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
	
    </script>
</body>
</html>

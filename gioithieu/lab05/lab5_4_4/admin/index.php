 <?php define('ROOT', dirname(__FILE__) );//Thu muc chứa file index); ?>
 
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Back-End</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

<div id="contain">
<div id="header">Header</div>
<div id="body">
	<div id="left">
    	<a href="index.php?mod=admin&ac=trangchu">Home</a><br />
        <a href="index.php?mod=admin&ac=danhmucsach">Danh Mục Sách</a><br /><?php //mod là thu muc ac là tên để gọi file thôi nó giống như là làm cái đường dẫn đẹp hơn?>
		<a href="index.php?mod=admin&ac=loaisach">Loại sách</a><br />
		<a href="index.php?mod=admin&ac=nhaxuatban">Nhà xuất bản</a><br />
        <a href="index.php?mod=admin&ac=quanlidonhang">Quản lý đơn hàng</a><br />
        <a href="index.php?mod=admin&ac=thongtinuser">Thông tin user</a><br />
        <hr />
        <a href="../index.php">Trang front-end</a>
    </div>
    <div id="right">
   
		<div id=thongtinadmin>
            <div class=info>
            	Thông tin admin
            </div>
            <div class=logout>
            	<a href="#">Thoát</a>
            </div>
        </div>
       
	 <div>
	  <?php
	 
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}

$path =ROOT."/trangchu.php";//mac dinh

	$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
if ($ac=="danhmucsach"){ 
	$path =ROOT."/danhmucsach.php";
	include "$path";
	}
	if ($ac=="trangchu"){ 
	$path =ROOT."/trangchu.php";
	include "$path";
	}
if ($ac=="loaisach") {
	$path =ROOT."/loaisach.php";
	include "$path";
	}
if ($ac=="nhaxuatban")
	 {
	$path =ROOT."/nhaxuatban.php";
	include "$path";
	 }
if ($ac=="quanlidonhang")
	 {
	$path =ROOT."/quanlidonhang.php";
	include "$path";
	 }
if ($ac=="thongtinuser")
	 {
	$path =ROOT."/thongtinuser.php";
	include "$path";
	 }
?>
	</div>
	
	
    </div>
</div>
<div id="footer">footer</div>
</div>
</body>
</html>
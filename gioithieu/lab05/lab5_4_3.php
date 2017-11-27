<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_3/1</title>
<style>
fieldset{width:50%; margin:100px auto;}
</style>
</head>

<body style="margin: 0 auto;">

<fieldset>
<legend>Đăng ký thông tin thành viên</legend>
<form action="lab5_4_3.php" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên đăng nhập:</td><td><input type="text" name="ten"></td></tr>
	
	<tr><td>Mật khẩu:</td><td><input type="password" name="password"></td></tr>
	
	<tr><td>Nhập lại mật khẩu:</td><td><input type="password" name="password1"></td></tr>
	
    <tr><td>Giới tính:</td><td><input type="radio" name="gt" value="1" checked="checked">Nam
              <input type="radio" name="gt" value="0">Nữ</td></tr>
			  
	<tr><td>Sở thích:</td><td><input type="text" name="sothich"></td></tr>
	
    <tr><td>Hình ảnh:</td><td><input type="file" name="hinh" /></td></tr>
	
	<tr><td>Tỉnh:</td><td><select name="listtinh">
		<option value="Tỉnh Quảng Ngãi">Quảng Ngãi</option>
		<option value="Tỉnh Thanh Hóa">Thanh Hóa</option>
		<option value="Tỉnh Phú Yên">Phú Yên</option>
		<option value="Tỉnh Quảng Trị">Quảng Trị</option>
		
	</select></td></tr>
	
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit">
	
	<input type="reset" value="reset" name="reset"></td></tr>
	
</table>
</form>
</fieldset>
<?php

$name="";
$arrImg = array("image/png", "image/jpeg", "image/bmp", "image/gif");
echo "<fieldset>";
//---------------trường hợp gặp lỗi------------------------------------

	if(isset($_POST["submit"]))
	{
		if($_POST["ten"]=="")
			{
			echo "Bạn phải điền tên đăng nhập";
			exit;
			}
		if($_POST["password"]=="")
			{
			echo "Bạn phải điền mật khẩu đăng nhập";
			exit;
			}
		if($_POST["password1"]=="")
			{
			echo "Bạn chưa điền lại mật khẩu đăng nhập";
			exit;
			}
		if($_POST["password"]!=$_POST["password1"])
			{
			echo "Bạn đã điền mật khẩu không đúng";
			exit;
			}
			$name = $_FILES["hinh"]["name"];
		if($name=="")
			{
			echo "Bạn chưa chọn hình";
			exit;
			}
		
		$err="";
$errFile = $_FILES["hinh"]["error"];//erro=0 thì là có đc file hình bình thường còn khác 0 là có vấn đề lỗi phát sinh
if ($errFile>0)//khác 0 nên thông báo lõi file hình
	$err .="Lỗi file hình <br>";
else
{
	$type = $_FILES["hinh"]["type"];//ngược lại kiểm tra kiểu file đó có phải là file hình không
	if (!in_array($type, $arrImg))//nếu cái file khoông có tên dạng array("image/png", "image/jpeg", "image/bmp") thì thông báo chọn không phải là hình
		$err .="Không phải file hình <br>";
	else
	{	$temp = $_FILES["hinh"]["tmp_name"];//đường dẫn file hình
		$name = $_FILES["hinh"]["name"];//tên hình
		
		if (!move_uploaded_file($temp, "img/".$name))//kiểm tra có lưu đc file không
			$err .="Không thể lưu file<br>";
		
	}
}

//-----------------trường hợp không lỗi------------
echo "<fieldset>";
echo '<p align="center"><font size="+2">Thông tin</font></p>';
echo "<table border='1'>";

echo "<tr>";
echo "<td>";
echo "Tên: ".$_POST["ten"]."</br>";
if(isset($_POST["gt"])){
	if($_POST["gt"]=="0")
	echo "Giới tính: Nữ"."</br>";
else
	echo "Giới tính: Nam"."</br>";
}
if($_POST["listtinh"]!="")
	{
		echo $_POST["listtinh"].'</br>';
		
	}
if($_POST["sothich"]!="")
			echo "sở thích: ".$_POST["sothich"]."</br>";
			?>
			<?php if($name!="") { ?>
<img src="img/<?php echo $name; ?> ">
<?php } 
else
	{
	echo "bạn chưa chọn hình?";
	exit;
	}
	?>
<?php
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</fieldset>";
?>
<?php

	}
	
?>
</body>
</html>

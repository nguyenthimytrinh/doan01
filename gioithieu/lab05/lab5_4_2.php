<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_4_2</title>
<style>
fieldset{width:50%; margin:100px auto;}
</style>
</head>

<body>
<?php

function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return $_POST[$index];
}
?>
<?php
$submit="";
	$tensp       = "";
	$cachtim     = "";
	$loaisanpham = "";
	if (isset($_GET["ten"]) && isset($_GET["ct"]) && isset($_GET["loaisp"]))
	{
		 $tensp=$_GET["ten"];
		 $cachtim=$_GET["ct"];
		 $loaisanpham=$_GET["loaisp"];
		
	}
	$arrImg = array("image/jpg","image/png", "image/jpeg", "image/bmp");
?>



<fieldset>
<legend>học sinh</legend>
<form action="lab5_4_2.php" method="get" name="main-form">
<table  align="center">
    <tr>
		<td>tên:</td>
		<td><input type="text" name="ten" value="<?php echo $tensp; ?>"/></td>
	</tr>
    <tr>
		<td>giới tính:</td>
		<td><input type="radio" name="ct" value="nam" <?php if($cachtim=="nam") echo " checked ";?>>nam
			<input type="radio" name="ct" value="nữ" <?php if($cachtim=="nữ") echo " checked ";?>>nữ
		</td>
	</tr>
			  
    <tr>
		<td>lop:</td>
		<td>
			<select name="loaisp">
				
				<option value="th01" <?php if ($loaisanpham=="th01") echo " selected ";?>>th01</option>
				<option value="th02" <?php if ($loaisanpham=="th02") echo " selected ";?>>th02</option>
				<option value="th03" <?php if ($loaisanpham=="th03") echo " selected ";?>>th03</option>
			</select>
		</td>
	</tr>
	<tr><td>Hình:</td><td><input type="file" name="hinh" multiple="multiple"/></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Tìm" name="submit"></td></tr>
	
	<tr>
		<td>Tên:</td>
		<td><?php echo $tensp; ?></td>
	</tr>
	<tr>
		<td>giới tính:</td>
		<td><?php echo $cachtim; ?></td>
	</tr>
	<tr>
		<td>lớp:</td>
		<td><?php echo $loaisanpham; ?></td>
	</tr>
	

</table>
</form>
</fieldset>
<?php 
if(isset($submit)!="")
	{
$err = "";//khai báo một biến có giá trị là rỗng
//TH1-----chạy trường hợp chưa điền đầy đủ hay lỗi hình gì đó


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
		if (!move_uploaded_file($temp, "image/".$name))//kiểm tra có lưu đc file không
			$err .="Không thể lưu file<br>";
		
	}
}
}
?>
	<?php if ($err !="")
  echo $err;
else//mới ban đầu err luôn bằng rỗng nghĩa là nó luôn chạy cái else này trước
{ ?>
	<?php foreach($_FILES["hinh"]["name"] as $key => $value ) 
	{ 
	
	?>
   <img src="image/<?php echo $value; ?>">;
   <?php echo "<br/>" ?>
    <?php	}
	}
	?>
	<?php 

?>
</body>
</html>

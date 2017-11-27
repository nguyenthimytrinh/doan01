<?php
//chạy theo thứ tự từ trên xuống dưới

function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return $_POST[$index];
}



$sm 	= postIndex("submit");//không ghi tha số thứ hai vì nó cũng đã hiểu mặc đinh tham số thứ hai là value=" " rồi--$index là submit
$ten 	= postIndex("ten");
$gt 	= postIndex("gt");
$arrImg = array("image/png", "image/jpeg", "image/bmp");



if ($sm=="") {
				header("location:1.php"); exit;//quay ve 1.php đứng ở đó lun không chạy xuống dưới (nghĩa là không nhấn submit) nó sẽ ở lại file 1.php
			}
			
			
//-----------------ở dưới là trường hợp đã nhấn submit-------------------------------------------------------------------------------------------------

$err = "";//khai báo một biến có giá trị là rỗng
//TH1-----chạy trường hợp chưa điền đầy đủ hay lỗi hình gì đó
if ($ten=="") $err .="Phải nhập tên <br>";//nếu tên rỗng thì thông báo nhập tên
if ($gt=="") $err .="Phải chọn giới tính <br>";//nếu chưa chọn giới tính thì thông báo chọn giới tính

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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_3/2</title>
</head>
<body>
<?php
if ($err !="")
  echo $err;
else//mới ban đầu err luôn bằng rỗng nghĩa là nó luôn chạy cái else này trước
{
	//TH2---------mọi thứ ok nó xuất ra bình thường
	if($gt =="1") echo "Chào Anh: $ten ";
	else echo "Chào Chị $ten ";
	?><hr>
    <img src="image/<?php echo $name;?>">
    <?php	
}
?>
<p>
<a href="1.php">Tiếp tục</a>
</p>
</body>
</html>
<meta charset='utf-8'>
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


//TH1-----chạy trường hợp chưa điền đầy đủ hay lỗi hình gì đó

if ($ten=="") 
	{
		echo "Phải nhập tên <br>";
		
		exit;
		}//nếu tên rỗng thì thông báo nhập tên
if ($gt=="")
{	
echo "Phải chọn giới tính <br>";//nếu chưa chọn giới tính thì thông báo chọn giới tính

exit;
}
foreach($_FILES["hinh"]["name"] as $key => $value )
		{
			if($value=="")
				{
			echo "bạn chưa chọn hình";
			
			exit;
			}
		}

		foreach($_FILES["hinh"]["error"] as $key => $value )
		{
			if($value!=0)
				{
			echo "<br/>.'lỗi file hình'";
			
			exit;
			}
		}
			
		foreach($_FILES["hinh"]["type"] as $key => $value )
		{
			if (!in_array($value, $arrImg))
				{//nếu cái file khoông có tên dạng array("image/png", "image/jpeg", "image/bmp") thì thông báo chọn không phải là hình
			echo "Không phải file hình <br>";
			exit;
			}
			}
			
			
			foreach($_FILES["hinh"]["tmp_name"] as $key => $value )
		{
				$temp = $value;//đường dẫn file hình
				foreach($_FILES["hinh"]["name"] as $ke => $va )
			{
					$name = $va;//tên hình
					if($ke==$key)
						{
					if (!move_uploaded_file($temp, "image/".$name))
						{//kiểm tra có lưu đc file không
						echo "Không thể lưu file<br>";
						 exit;
						}
						}
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

	//TH2---------mọi thứ ok nó xuất ra bình thường
	if($gt =="1") echo "Chào Anh: $ten ";
	else echo "Chào Chị $ten ";
	?><hr>
	
	<?php foreach($_FILES["hinh"]["name"] as $key => $value ) 
	{ 
	
	?>
   <img src="image/<?php echo $value; ?>">;
   <?php echo "<br/>" ?>
    <?php	}

?>
<p>
<a href="1.php">Tiếp tục</a>
</p>
</body>
</html>
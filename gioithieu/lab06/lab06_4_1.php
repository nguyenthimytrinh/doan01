<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}


$username 	= postIndex("username");
$password1	= postIndex("password1");
$password2	= postIndex("password2");
$name		= postIndex("name");
$sm 		= postIndex("submit");

?>
<?php 
function nl2br2($string) { 
  $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string); 
  return $string; 
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab6_1</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
</style>
</head>

<body>
<fieldset>
<legend style="margin:0 auto">Thông tin đăng ký</legend>
<form action="lab06_4_1.php" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên đăng nhập:</td><td><input type="text" name="username" 
    					value="<?php echo $username;?>"></td></tr>
    <tr><td>Mật khẩu:</td><td><input type="password" name="password1" /></td></tr>
     <tr><td>Nhập lại mật khẩu:</td><td><input type="password" name="password2" /></td></tr>
    <tr><td>Họ Tên:</td><td><input type="text" name="name" value="<?php echo $name;?>" /></td></tr>
	<tr><td>Text Area:</td><td><textarea name="thong_tin"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php

if ($sm !="")
{
	$text="";
	$text1="";
	$err= "";
	if (strlen($username)<6 ) 		$err .=" Username ít nhất phải 6 ký tự!<br>";
	if ($password1!= $password2) 	$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";
	if(strlen($password1)<8) 		$err .="Mật khẩu phải ít nhất 8 ký tự.<br>";
	if(str_word_count($name)<2) 	$err .="Họ tên phải chứa ít nhất 2 từ ";
	$text=$_POST["thong_tin"];
	$text1=strip_tags($text);//loại bỏ các ký tự html

	?>
    <div class="info">
    	<?php 
			if ($err !="") echo $err;
			else
			  {
				echo "Username: $username <br>";
				echo "Mật khẩu đã mã hóa Md5:".sha1(md5($password1))."<br>";
				echo "Họ tên: ". ucwords($name).'<br>'; 
				
				
				$text2=addslashes(nl2br($text1));//addslashes: thêm dấu \ trước dấu (') || nl2br: viết  a enter b enter thì nó s hiện ra xuống hàng b
				
				//$text3=stripcslashes($text2);
				echo "thông tin".$text2;
				
				
				  
			}
		?>
    </div>
    <?php

}
?>
</body>
</html>

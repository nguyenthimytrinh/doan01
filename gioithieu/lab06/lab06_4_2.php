<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}

function checkUserName($string)
{
	if (preg_match("/^[a-zA-Z0-9._-]*$/",$string)) 
		{
			echo $string."<br>";
	  return true;
	  
	  }
	return false;
}


function checkEmail($string)
{  echo $string.'<br>';
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	 return true;
	return false;	
	
}
function checkpasswordso($string)
{ 
	
		if((preg_match('/[0-9]/', $string)))
	 return true;
	return false;	
	
}
function checkdodaipass($string) 
{
	if(strlen($string)<8)
		return false;
	return true;
}
function checkpasswordthuong($string)
{ 
	
		if((preg_match('/[a-z]/', $string)))
	 return true;
	return false;	
	
}
function checkpasswordhoa($string)
{ 
	
		if((preg_match('/[A-Z]/', $string)))
	 return true;
	 
	return false;	
	
}
function checkdienthoailaso($string)
{ 
	
		if((preg_match('/^[0-9]*$/', $string)))
			{
				echo $string."<br>";
			return true;
	 
	 }
	return false;	
	
}
function checkngay($string)
{ 
	
			if((preg_match('/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/', $string))){
				echo $string."<br>";
	 return true;
	 }
	return false;	
	
}
$sm = postIndex("submit");
$username = postIndex("username");
$email = postIndex("email");
$pass=postIndex("password");
$phone=postIndex("phone");
$ngay=postIndex("date");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab6_3</title>
<style>
fieldset{width:50%; margin:100px auto;}
.info{width:600px; color:#006; background:#6FC; margin:0 auto}
#frm1 input{width:300px}
</style>
</head>

<body>
<fieldset>
<legend style="margin:0 auto">Đăng ký thông tin </legend>
<form action="lab06_4_2.php" method="post" enctype="multipart/form-data" id='frm1'>
<table  align="center">
    <tr>
      <td width="88">UserName</td>
      <td width="317"><input type="text" name="username" value="<?php echo $username;?>"/>*</td></tr>
       <tr>
      <td>Mật khẩu</td>
      <td><input type="password" name="password"  />*</td></tr>
       <tr>
      <td>Email</td>
      <td><input type="text" name="email"  value="<?php echo $email;?>"  />*</td></tr>
       <tr>
      <td>Ngày sinh</td>
      <td><input type="text" name="date"  />*</td></tr>
       <tr>
      <td>Điện thoại</td>
      <td><input type="text" name="phone"  /></td></tr>
      
      <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>

<?php

if ($sm !="")
{
	?>
    <div class="info"><br />
    	<?php 
		
		if (checkUserName($username)==false) 
			echo "Username: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
		if (checkEmail($email)==false) 
			echo "Định dạng email sai!<br>";
		if(checkpasswordso($pass)==false)
			echo "password phải có ít nhất một kí tự là số<br>";
		if (checkdodaipass($pass)==false)
			echo "password phải có ít nhất 8 kí tự<br>";
		if (checkpasswordhoa($pass)==false)
			echo "password phải có ít nhất 1 kí tự là chữ hoa<br>";
		if (checkpasswordthuong($pass)==false)
			echo "password phải có ít nhất 1 kí tự là chữ thường<br>";
		if (checkdienthoailaso($phone)==false)
			echo "Số điện thoại phải là số<br>";
		if (checkngay($ngay)==false)
			echo "ngày sinh phải là kiểu ngày dạng (dd/mm/yyyy hoặc dd-mm-yyyy)<br>";
		?>
		
    </div>
    <?php 

}
?>
</body>
</html>

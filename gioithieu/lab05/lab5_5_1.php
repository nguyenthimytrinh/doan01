<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>
<?php
function checkbox($value)
{
	if(is_array($_SESSION["f3st"])) {
		foreach($_SESSION["f3st"] as $k=>$v)
			if($value==$v) return true;
	}
	return false;
}
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return $_POST[$index];
}
$sm=postIndex("sm");
if(!isset($_POST["sm"]))
{
	$_SESSION["f1x"]=" ";
	$_SESSION["f1y"]=" ";
	$_SESSION["f1z"]=" ";
	$_SESSION["f2x"][0]=" ";
	$_SESSION["f2x"][1]=" ";
	$_SESSION["f2y"]=" ";
	$_SESSION["f3ten"]=" ";
	$_SESSION["f3gt"]=1;
	$_SESSION["f3st"]=" ";
}
if($sm=="Submit1"){
	$_SESSION["f1x"]=postIndex("x");
	$_SESSION["f1y"]=postIndex("y");
	$_SESSION["f1z"]=postIndex("z");
}

if($sm=="Submit2"){
	$_SESSION["f2x"]=postIndex("x");
	$_SESSION["f2y"]=postIndex("y");
}

if($sm=="Submit3"){
	$_SESSION["f3ten"]=postIndex("ten");
	$_SESSION["f3gt"]=postIndex("gt");
	$_SESSION["f3st"]=postIndex("st");
}
echo "REQUEST:";
print_r($_REQUEST);
echo "<hr>POST<br>";
print_r($_POST);
echo "<hr>SESSION<br>";
print_r($_SESSION);

?><hr>
<a href="lab5_5_1.php?x=1&y=2&z=3">Link 1</a><br>
<a href="lab5_5_1.php?x[]=1&x[]=2&y=3">Link 2</a><br>
<a href="lab5_5_1.php?mod=product&ac=detail&id=1">Link 3</a><br>
<a href="lab5_5_1.php?mod=product&ac=list&name=a&page=2">Link 4</a><br>
<hr>
<fieldset>
<legend>Form 1</legend>
<form action="lab5_5_1.php" method="post">
Nhập x:<input type="text" name="x" value="<?php  echo $_SESSION["f1x"]; ?>"><br>
Nhập y:<input type="text" name="y" value="<?php echo $_SESSION["f1y"]; ?>"><br>
Nhập z:<input type="text" name="z" value="<?php echo $_SESSION["f1z"]; ?>"><br>
<input type="submit" name="sm" value="Submit1">
</form>
</fieldset>

<fieldset>
<legend>Form 2</legend>
<form action="lab5_5_1.php" method="post">
Nhập x1:<input type="text" name="x[]" value="<?php echo $_SESSION["f2x"][0]; ?>"><br>
Nhập x2:<input type="text" name="x[]" value="<?php echo $_SESSION["f2x"][1]; ?>"><br>
Nhập y:<input type="text" name="y" value="<?php  echo $_SESSION["f2y"]; ?>"><br>
<input type="submit" name="sm" value="Submit2">
</form>
</fieldset>

<fieldset>
<legend>Form 3</legend>
<form action="lab5_5_1.php" method="post">
Nhập tên:<input type="text" name="ten" value="<?php echo $_SESSION["f3ten"]; ?>"><br>
giới tính:<input type="radio" name="gt" value="1" <?php if($_SESSION["f3gt"]==1) echo "checked=true"; ?> >Nam
		  <input type="radio" name="gt" value="0" <?php if($_SESSION["f3gt"]==0) echo "checked=true"; ?>>Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt" <?php if(checkbox("tt")) echo "checked=true";?>>Thể Thao
		<input type="checkbox" name="st[]" value="dl" <?php if(checkbox("dl")) echo "checked=true";?>>Du Lịch
		<input type="checkbox" name="st[]" value="game" <?php if(checkbox("game")) echo "checked=true";?>>Game<br>
<input type="submit" name="sm" value="Submit3">
</form>
</fieldset>
</body>
</html>
<meta charset='utf-8'>
<?php /*Form gồm:
- Textbox: nhập tên sản phẩm cần tìm.
- Hai radiobutton cách tìm: lựa chọn một trong hai: gần đúng,
chính xác.
- Combobox: loại sản phẩm (là một combobox có 4 lựa chọn:
tatca, loại 1, loại 2, loại 3).
- Form sử dụng phương thức get.
Hãy in ra màn hình các giá trị mà người sử dụng vừa nhập vào form:
- Tên sản phẩm:
- Cách tìm: (gần đúng hay chính xác).
- Loại sản phẩm: in ra loại sản phẩm nếu không phải chọn tất cả*/
?>

<form action="2.php" method="get">
	Tên sản phẩm cần tìm: <input type="text" name="sanpham"></br>
	Cách tìm:</br> 
	<input type="radio" value="1" name="ct" checked="checked">gần đúng
	 <input type="radio" value="0" name="ct">chính xác:</br>
	 
	
	loại sản phẩm:<select name="listloai">
		<option value="tc">tất cả</option>
		<option value="loại 1">loại 1</option>
		<option value="loại 2">loai 2</option>
		<option value="loại 3">loại 3</option>
	</select>
	<input type="submit" name="submit" value="Tìm">
	
	
</form>
<?php

function postIndex($index, $value="")
{
	if (!isset($_GET[$index]))	return $value;
	return $_GET[$index];
}



$sanpham 	= postIndex("sanpham");//không ghi tha số thứ hai vì nó cũng đã hiểu mặc đinh tham số thứ hai là value=" " rồi--$index là submit
$cachtim 	= postIndex("ct");

//$submit=postIndex("submit");

$e="";

if(postIndex("submit")!=$e)
	{
if($sanpham==$e)
	{
	echo 'bạn chưa nhập tên sản phẩm';
	exit;
	}
	else
		{
	echo 'tên sản phẩm cần tìm là: ' ."$sanpham";
	}
	
	if($cachtim=="1")
		echo "<br/>".'tìm gần đúng'.'</br>';
	else
		echo '</br>'.'tìm chính xác'.'</br>';
	
	
if($_GET["listloai"]=='tc')
echo 'tất cả các loại';
else
	{
		echo 'loại: ';
	print_r($_GET["listloai"]);
	}


}
 ?>
<meta charset='utf-8'>
<pre>

<?php
/*
//Sửa lại lab4_1.php, kiểm tra xem một phần tử nào đó có trong mảng không,
//nếu có, hãy xóa hoặc thay đổi dữ liệu của phần tử này và sử dụng hàm
//print_r() in mảng sau khi thay đổi ra màn hình.
echo '1)dạng kiểm tra xem một phần tử nào đó có trong mảng không nếu có thay đổi dữ liệu của phần tử này'.'<br/>'.'<br/>';
$a=array('1','2','3');
echo 'mảng a ban đầu là: '.'</br>';
print_r($a);
echo '<br/>';
foreach($a as $key=>$value)
{
	if($value==1)
		{
			$a[$key]=5;
		}
}
echo 'mảng a sau khi thay đổi là'.'<br/>';
print_r($a);
echo '<br/>'.'<br/>';
echo '2)dạng kiểm tra xem một phần tử nào đó có trong mảng không nếu có thì xóa phần đó'.'<br/>'.'<br/>';
foreach($a as $key=>$value)
{
	if($value==2)
		{
			unset($a[$key]);
		}
}
print_r($a);*/


$c = array("a"=>2, "b"=>4, "c"=>6);//mảng có 3 phần tử.Các index của mảng là chuỗi
echo 'mảng c ban đầu là:'.'<br/>';
print_r($c);
$value = 2;
$key = 'b';
if (isset($c[$key]))
	unset($c[$key]);
echo 'mảng c sau khi thay đổi là'.'<br/>';
print_r($c);
?>
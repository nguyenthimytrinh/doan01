<meta charset='utf-8'>
<pre><?php
$a = array(1, -3, 5); //mảng có 3 phần tử

?>
<?php
echo 'a. Đếm số phần tử có giá trị dương của mảng $a'.'<br/>';
echo 'mảng a như sau'.'<br/>';
print_r($a);
echo '<br/>';
$dem=0;
foreach($a as $value)
{
	if($value>0)
		$dem++;
}
echo 'số phần tử có giá trị dương ở trong mảng a là '.$dem;
echo '<hr>';
echo 'b. Tạo mảng mới, lưu các phần tử dương trong mảng $b'.'<br/>';


$e=array('2','-5','7');
echo 'ta cho một mảng mới như bên dưới '.'<br/>';
print_r($e);
echo '<br/>';
$b=array();
foreach($e as $value)
{
	if($value>0)
		$b[]=$value;
}
echo 'mảng chứa các phần tử dương của mảng b là :'.'<br/>';
print_r($b);
?>
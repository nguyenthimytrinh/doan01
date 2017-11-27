<meta charset='utf-8'>
<pre>

<?php
echo 'â';
$str="  Hi  tuấn   ";
$a=explode(" ",$str);
print_r($a);
foreach($a as $k=>$v)
		if($v=='')
		{
			unset($a[$k]);
		}
print_r($a);
$str=implode(" ",$a);
echo $str;
echo "</br> len=".strlen($str);

?>

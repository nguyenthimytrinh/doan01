<meta charset='utf-8'>
<?php
$s="tuan 2 3";
$tong=0;
$i=0;

while($i<strlen($s))
	{
		if(is_numeric($s[$i]))
			{
			$tong=$tong+$s[$i];
			$i++;
			}
		else
			$i++;
	}
	echo $tong;
?>
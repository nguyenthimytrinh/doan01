
<meta charset='utf-8'>
<?php
$s="abcba";
$i=0;
$j=strlen($s)-1;
while($i<$j)
	{
		if($s[$i]==$s[$j])
			{
			$i++;
			$j--;
		}
		else
			{
			echo 'chuỗi'.' $s= '.$s.' : '.'là chuỗi không đối xứng';
			return;
			}
		
	}
	echo 'chuỗi'.' $s= '.$s.' : '.'là chuỗi đối xứng';
?>
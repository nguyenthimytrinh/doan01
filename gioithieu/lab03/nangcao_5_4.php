<meta charset='utf-8'>
<?php

$d=10;
$r=5;
$dd=$d-1;
$rr=$r-1;
for($i=0;$i<$r;$i++)
	{
		echo '<br/>';
		for($j=0;$j<$d;$j++)
			{
				if($i==0)
					echo '*'.' ';
				else if($i==$rr)
					echo '*'.' ';
				else if($j==0)
					echo '*'.' ';
				else if($j==$dd)
					echo '*'.' ';
				else
					echo "&nbsp&nbsp&nbsp";
					
			}
	}
	
?>
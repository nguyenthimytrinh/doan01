<meta charset='utf-8'>
<?php
function ptbac2($a,$b,$c)
{
	$denta=($b*$b)-(4*$a*$c);
	if($denta<0)
		echo 'phương trình vô nghiệm';
	else if($denta>0)
		{
			echo 'phương trình có hai nghiệm là: '.((-$b+sqrt($denta))/(2*$a))."và".((-$b-sqrt($denta))/(2*$a));
			
		}
		else
			echo 'phương trình có nghiệm kép là: '.-$b/(2*$a);
}

ptbac2(1,2,1);
?>
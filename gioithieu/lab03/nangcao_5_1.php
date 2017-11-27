<meta charset='utf-8'>
<?php
function kiemtranguyento($x)//Kiểm tra 1 số có nguyên tố hay không
{
	if($x<2)
		return false;
	if($x==2)
		return true;
	
		$i=2;
		do{
		if($x%$i==0)
			return false;
		$i++;
		}while($i>=2 && $i<=sqrt($x));
	return true;
}

$dem=0;
$n=10;
$i=1;
echo $n.' '.'số nguyên tố đầu tiên là: '."<br/>";
while($dem<$n)
	{
		if(kiemtranguyento($i))
			{
			$dem++;
			echo $i." "."<br/>";
			$i++;
			}
			else
			$i++;
		
		
	}
?>
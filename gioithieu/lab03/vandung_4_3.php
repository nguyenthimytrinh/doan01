<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab 3_4</title>
</head>

<body>
<?php

function kiemtranguyento($x)
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

if(kiemtranguyento(11))
	echo  "là số nguyên tố";
else
	echo "không phải số nguyên tố";
	
?>
</body>
</html>
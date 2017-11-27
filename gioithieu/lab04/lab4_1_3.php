<meta charset='utf-8'>
<pre>
<?php
echo 'hàm sắp xếp theochiều giảm dần là: <b>rsort</b>'.'<br/>';
echo 'mảng a ban đầu là :'.'<br/>';
$a = array(6, 2, 7, 8, 5);
print_r($a);
rsort($a);
echo '<br/>';
echo 'mảng sau khi sắp xếp theo chiều giảm dần là '.'<br/>';
print_r($a);
?>
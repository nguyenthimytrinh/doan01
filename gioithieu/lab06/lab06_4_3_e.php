<meta charset='utf-8'>
<?php
$content = file_get_contents("http://thethao.vnexpress.net/");
$pattern='/<article class=\"list_news\".*<\/article>/imsU';
preg_match_all($pattern, $content, $arr);
?>
<table border=3>
<?php 
foreach($arr as $value)
{
	foreach($value as $key)
	{
?>
<tr><td><?php print_r($key); ?></td></tr>
<?php 
}
}
?>
</table>

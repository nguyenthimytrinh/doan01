<meta charset='utf-8'>
<?php
$content = file_get_contents("http://thethao.vnexpress.net/");
//echo $content;
$pattern='/<article class=\"list_news\".*<\/article>/imsU';
preg_match_all($pattern, $content, $arr);
print_r($arr);
?>
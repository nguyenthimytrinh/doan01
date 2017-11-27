<meta charset='utf-8'>
<?php
$a= array('Trinh quê ở Quảng Ngãi hả?','sinh nhật Trinh là ngày 12/9 đúng không?','Trinh muốn đi du lịch Tây Bắc đúng chứ?','Trinh thích hát lắm ak?','Trinh còn thích đàn violin nữa phải không nhỉ?','Trinh thích ăn tôm nhất nữa chứ gì?','Trinh không biết bơi sao haha?','Trinh rất muốn nuôi 1 con chó ú nu ú nù nâu nâu à?','Trinh chỉ thích nghe nhạc buồn thui sao?');


$rand_keys = array_rand($a, 4);
echo '1. '.$a[$rand_keys[0]] . "<br/>";
echo 'sao biết hay vậy'.'<br/>';
echo '2. '.$a[$rand_keys[1]] . "<br/>";
echo 'wow Đúng rùi :)'.'<br/>';
echo '3. '.$a[$rand_keys[2]] . "<br/>";
echo 'umk hi'.'<br/>';
echo '4. '.$a[$rand_keys[3]] . "<br/>";
echo 'Đúng y bốc haha'.'<br/>';


?>
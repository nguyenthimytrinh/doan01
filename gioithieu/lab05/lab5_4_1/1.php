<meta charset='utf-8'>
<?php 
$arr = array();
$r = array("id"=>1, "name"=>"Product1");
$arr[] = $r;
$r = array("id"=>2, "name"=>"Product2");
$arr[] = $r;
$r = array("id"=>3, "name"=>"Product3");
$arr[] = $r;
$r = array("id"=>4, "name"=>"Product4");
$arr[] = $r;
?>
<?php
foreach($arr as $value)
{
	?>
	<a href="2.php?id=<?php echo "$value[id]"; ?>"><?php echo "$value[name]"; ?></a>
	<?php
}
?>
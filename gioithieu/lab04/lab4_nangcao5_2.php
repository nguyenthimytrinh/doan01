<meta charset='utf-8'>

	<pre>

<?php
$arr= array();
$r = array("id"=> "sp1", "name"=> "Sản phẩm 1 ");
$arr[] = $r;

$r = array("id"=> "sp2", "name"=> "Sản phẩm 2 ");
$arr[] = $r;

$r = array("id"=> "sp3", "name"=> "Sản phẩm 3 ");
$arr[] = $r;



?>
<?php echo 'cách 1:dùng for?'.'<br/>'; ?>
<table border=1>
		<tr><td>Stt</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td></tr>
			<?php
			$stt=1;
				for($i=0;$i<count($arr);$i++)
				{
			?>
				<tr>
				<td><?php echo $stt; ?></td>
				<td><?php echo $arr[$i]["id"]; ?></td>
				<td><?php echo $arr[$i]["name"]; ?></td>
				</tr>
				<?php $stt++; ?>
			<?php 
				}
			?>
					
			
	</table>
	<?php echo '<hr>'; echo 'cách 2: Dùng foreach'.'<br/>'; ?>
	
	<table border=1>
		<tr><td>Stt</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td></tr>
			<?php
			$stt=1;
				foreach($arr as $key=>$value)
				{
			?>
				<tr>
				<td><?php echo $stt; ?></td>
				<td><?php echo $value["id"]; ?></td>
				<td><?php echo $value["name"]; ?></td>
				</tr>
				<?php $stt++; ?>
			<?php 
				}
			?>
					
			
	</table>

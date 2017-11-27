<meta charset='utf-8'>
<?php
function showArray($arr)
{
	?>
	<table border=1>
		<tr><td>Index</td><td>Value</td></tr>
			<?php
				foreach($arr as $key=>$value)
				{
			?>
				<tr><td><?php echo $key ?></td><td><?php echo $value ?></td></tr>
				
			<?php 
				}
			?>
					
			
	</table>
<?php
}
?>
<?php
$a =array('t'=>1,'r'=>2,'i'=>0,'n'=>0,'h'=>9);
showArray($a);
?>
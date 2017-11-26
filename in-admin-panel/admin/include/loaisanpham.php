<?php
$loaisanpham = new loaisanpham();
$data = $loaisanpham->getAll();
?>            
        
    <h2>Danh sách loại sản phẩm</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit" >
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã loại</th>
            <th scope="col" class="rounded">Tên loại</th>
            
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
    <?php 
    foreach($data as $row)
    {?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            
            <td><?php echo $row["maloai"];?></td>
           <td><?php echo $row["tenloai"];?></td>

            <td><a href="#"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?act=del_sanpham&masanpham=<?php echo $row["tenloai"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> 
     
     
        
    
           
     
      
     
     
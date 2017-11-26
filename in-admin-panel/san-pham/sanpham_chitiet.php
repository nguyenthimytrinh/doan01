
<div class="ctquatet1">
	<div class="container">
    	<div class="row">
        	<div class="spct1">
            	<p>Thông tin chi tiết</p>
            </div>
			<?php 
				include ROOT."/include/menutrai.php"; 
			?>
            <?php
				$maloai ="";
				$masanpham = $_GET['masanpham'];
				$sql ="select * from sanpham where masanpham ='$masanpham' ";
				$data = $db->exeQuery($sql);

			?>
			<?php foreach($data as $key=>$value)
				{
					$maloai = $value["maloai"]; 
			?>
            <div class="col-md-4">
            	<a href="#" class="thumbnail">
      				<img src="hinhanh/sanpham/<?php echo $value["hinh"]; ?>" alt="...">
   				</a>
           </div>
           
           
           <div class="col-md-4 spcttet">
           		<p><?php echo $value["tensanpham"]; ?></p>
                <div class="giacu"><?php echo number_format ($value["giagoc"],0,'.','.'); ?><sup>đ</sup></div>
				<div style="color:#F00; font-size:26px">
					<?php echo number_format ($value["giagiam"],0,'.','.'); ?><sup>đ</sup>
				</div>
                <div class="form-group">
<input class="qty-input valid" data-val="true" data-val-number="The field Số lượng must be a number." id="addtocart_26_EnteredQuantity" max="10" min="1" name="addtocart_26.EnteredQuantity" type="number" value="1">                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#addtocart_26_EnteredQuantity").keydown(function (event) {
                                if (event.keyCode == 13) {
                                    $("#add-to-cart-button-26").click();
                                    return false;
                                }
                            });
                        });
                    </script>
                    
                    	<a href="#" class="quatang" >
        
                        	<img src="images/gau.png" alt="">
                        	<span style="color:#d71921;">Tặng Quà ngay</span>
                           
                    	</a>
                   <div class="thongbao">
                   		<p> <img src="images/gau.png"/>Quý khách lưu ý</p>
               			<ul>
                            <li>Giá trên đã bao gồm phí vận chuyển</li>                                    
                            <li>Chúng tôi sẽ thông báo cho quý khách ngay sau khi quà đến tay người nhận</li>                            <li>Hỗ trợ miễn phí thiệp lời nhắn đến người nhận khi mua sản phẩm có giá trị từ 100.000đ trở lên.</li>                                     
                            <li>Qúy khách có nhu cầu mua tặng quà số lượng nhiều (&gt;50 đơn hàng) hoặc đặt hàng một lần cho nhiều thời điểm trong năm vui lòng liên hệ <strong>1 408 669 9692</strong></li>
                            
                        
                      </ul>
                 </div>  
                   
            </div>
           </div>
           
		</div>
    </div>
</div>
<div class="ttlienquan">
	<div class="container">
    	<div class="row">
           <div class="col-md-4 ttct">
                 	<h3>Thông tin chi tiết</h3>
                    <hr width="800px" color="red" /> 
                   	 	<p><?php echo $value["mota"]; ?></p>
                    <hr width="800px" color="red" /> 
                    <h3>Sản phẩm liên quan</h3>
             </div>
             
             
        </div>
    </div>
</div>  
 <?php 
	} 
 ?>
<div class="splienquan">
	<div class="container">
    	<div class="row"> 
		<?php echo "Ma loai = $maloai <hr>";
		$sql ="select * from sanpham where maloai='$maloai' and masanpham !='". $_GET["masanpham"]."'";
		echo $sql;
		?>
     			    <div class="col-md-3">
                    <a href="ctphunu10.html" class="thumbnail">
                    	<img src="images/chitetquaquoctephunu/chitietquaquoctephunu14.png" alt="..."style="max-width:100%;  padding-bottom:28px;">
                    	<div class="caption cttet">
                    		<h3>Đồng hồ đính đá</h3>
                    		<p>800.000 VNĐ</p>
                    	
                    	</div>
                    </a>
                    </div>
                    
                     <div class="col-md-3">
                     <a href=" ctphunu2.html " class="thumbnail">
                    	<img src="images/chitetquaquoctephunu/chitietquaquoctephunu10.png" alt="..."style="max-width:100%;  padding-bottom:28px;">
                    	<div class="caption  cttet">
                    		<h3>Vòng tay có chữ Love</h3>
                    		<p>120.000 VNĐ</p>
                    	
                    	</div>
                    </a>
                    </div>
                    
                    <div class="col-md-3"> 
                    <a href=" ctphunu6.html " class="thumbnail">
                    	<img src="images/chitetquaquoctephunu/chitietquaquoctephunu15.png" alt="..." style="max-width:100%;  padding-bottom:28px;">
                    	<div class="caption  cttet">
                    		<h3>Nước hoa Lili</h3>
                    		<p>300.000 VNĐ</p>
                    	
                    	</div>
                     </a>
                    </div>
                    
                   <div class="col-md-3">
                     <a href=" ctphunu11.html " class="thumbnail">
                    	<img src="images/chitetquaquoctephunu/chitietquaquoctephunu8.png" alt="..." >
                    	<div class="caption  cttet">
                    		<h3>Túi sách đen huyền bí</h3>
                    		<p>1000.000 VNĐ</p>
                    	
                    	</div>
                    </a>
                   </div> 
                    
          </div>          
                    
                    
             </div>
    
    
    	</div>
    </div>        
</div>    

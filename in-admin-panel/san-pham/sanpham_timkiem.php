<?php
/*include "/config/config.php";
include "/autoload/autoload.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$data = new Qua();*/

$obj = new sanpham();
?>
<div class="quatet">
	<div class="container">
    	<div class="row">
			<?php

				if (!isset($_GET["tim"]))
				{
				
				$data = $obj->getAll();
				}
				else
				{
				echo "Tim kiem san pham co ten chua ". $_GET["tensp"];
				$data = $obj->search($_GET["tensp"]);
				}
				//echo "<pre>";
				//print_r($data);
				//exit;
			?>
        	<div class="col-md-3">
            	<h2>PHẠM VI GIÁ</h2>

              
                <div class="input-group1">
      
                	<div class="input-group-btn">
                		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0px 20px; font-size:20px;"> Tìm sản phẩm theo giá!<span class="caret"></span></button>
                		<ul class="dropdown-menu">
                			<li><a href="quatet1.html" >Giá tiền từ thấp đến cao</a></li>
               			 	<li role="separator" class="divider"></li>
                			<li><a href="quatet2.html">Giá tiền từ cao đến thấp</a></li>
               			 </ul>
                	</div><!-- /btn-group -->
                	
                </div><!-- /input-group -->
              
                  <img src="images/quatet/caudoitet.png" width="100%" alt="caudoitet" style="margin-top:200px;"/>
        		
            </div>  
                
                
                 
                <div class="col-md-9">
                
                
            <div class="features_items">
            	<h2 class="title text-center">Sản phẩm 
					
				</h2>
				<?php
				$i=0;
						foreach ($data as $key=>$r)
							{ $i++;
								
							
					?>
           		<div class="col-sm-3">
            		<div class="product-image-wrapper">
            			<div class="single-products">
            				<div class="productinfo text-center">
                            	<img src="hinhanh/sanpham/<?php echo $r["hinh"];?>" alt="Image" style="max-width:100%;">
                                <h2><?php echo number_format ($r["giagoc"],0,'.','.'); ?><sup>đ</sup></h2>
                                <p><?php echo $r["tensanpham"];?></p>
            					<a href="#" class="btn btn-default add-to-cart">
                        		<i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                
           	 
            				</div>
           				 	<div class="product-overlay">
           						 <div class="overlay-content">
                                    <a href="#" class="btn btn-default add-to-cart">
                                    <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
           						 </div>
                                  <div class="overlay-content chitietsp">
								  <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r["masanpham"];  ?>"class="btn btn-default add-to-cart">
                                   	<i class="fa fa-link" aria-hidden="true"></i>Xem chi tiết</a>
           						 </div>
            				</div>
           			 </div>
            		<div class="ratings">
           			 	<p class="pull-right">15 reviews</p>
            			<p>
            				<span class="glyphicon glyphicon-star left ngoisao"></span>
           			 	</p>
           		 	</div>
            	</div>
           	 </div> 
             <?php
			  if  ($i%4==0) echo '<div style="clear:both"></div>';
							}
							
			?>

          </div>
		  
                
                
		</div>
	</div>
</div>
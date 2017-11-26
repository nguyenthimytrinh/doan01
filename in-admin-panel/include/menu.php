
	<div class="container">
   		<div class="row">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                   
            </div>      
                 <div class="collapse navbar-collapse">
                    	<ul class="nav navbar-nav">
                    		<li class="active"><a href="index.php">Trang chủ</a></li>
                    		<li class="dropdown">
                    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm<span class="caret"></span></a>
                    			<ul class="dropdown-menu">
                                    <?php
                                    $data = $db->exeQuery("select * from loai");
                                    foreach ($data as $loai) 
                                    {
                                    
                                     ?>
                                    <li><a href="index.php?menu=sanpham&act=loai&maloai=<?php echo $loai["maloai"];?>">
                                        <?php echo $loai["tenloai"];?></a></li>
                                    <?php
                                    }
                                    ?>
                                    
                    			</ul>
                    		</li>
        
                            <li><a href="index.php?menu=gioithieu">Giới thiệu</a></li>
                            <li><a href="index.php?menu=dichvu">Dịch vụ</a></li>
                            <li><a href="index.php?menu=lienhe">Liên hệ</a></li>
							<li><a href="index.php?menu=thanhtoan">Thanh toán</a></li>
							<li><a href="admin/login.php">Admin</a></li>
                    	</ul>
                   </div>
               
                  
            </div>
        </div>
    
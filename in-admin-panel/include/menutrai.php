<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="col-md-4">
                <div class="panel panel-info">
                	<div class="panel-footer">
                		<a href="index.php?menu=gioithieu"  style="color:#4b4b4b;">Giới thiệu</a>
                	</div>
                	<div class="panel-footer">
                    	<a href="#" style="color:#4b4b4b;">Sản phẩm</a>
                    </div>
                    <div class="panel-body">
                		<?php
                            $data = $db->exeQuery("select * from loai");
                            foreach ($data as $loai) 
                                {
                                    
                                ?>
                                    <a href="index.php?menu=sanpham&act=loai&maloai=<?php echo $loai["maloai"];?>">
                                    <?php echo $loai["tenloai"];?></a></br>
                                    <?php
                                }
                         ?>
                	</div>
                    <div class="panel-footer">
                    	<a href="index.php?menu=dichvu" style="color:#4b4b4b;">Dịch vụ</a>
                    </div>
                    <div class="panel-footer">
                    	<a href="index.php?menu=lienhe"style="color:#4b4b4b;">Liên hệ</a>
                    </div>
                    <div class="panel-footer">
                    	<a href="index.php?menu=thanhtoan"style="color:#4b4b4b;">Thanh toán </a>
                    </div>

                </div>
            </div>
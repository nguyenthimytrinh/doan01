<div class="container">
	<div class="row">
    	<div class="col-md-3">
    		<div class="dichvu">
        		<p style="color:#3a14de; font-size:24px;">Các sản phẩm được ưa chuộng</p>
                 <marquee direction="down" scrollmount=70>
                	
					<?php
      $sql="select * from sanpham where hienthitrangchu=1 limit 0,7 ";
      $datasp = $db->exeQuery($sql);             
          ?> 
                    <?php
                 $i=0;
                 foreach($datasp as $k=>$r)
                 {
                    if ($i%5 ==0) 
                  
                $i++;
                    ?>
 <div class="name"><?php echo $r["tensanpham"]; ?></div>
               		<div style="text-align:center"><img src="hinhanh/sanpham/<?php echo $r["hinh"]; ?>"/></div>
      				<div style="color:#F00;"><?php echo $r["giagoc"]; ?><sup>đ</sup></div>
                	<hr color="#6da6b1" />

                    <?php
    
                    }
                ?>
                   </marquee>
              
           </div>
        </div>            		
		<div class="col-md-9">
        	<div class="dichcu2 col-md-offset-4">
            	<img src="images/dichvu/chaodon.png"/>
               
            </div>
			<div class="dichvu1">
             <img src="images/dichvu/cuahang.png" width="600" style="margin:10px 90px;"/>
            
                <p><img src="images/dichvu/gau.png"/>Ngoài những sản phẩm trên website SouvenirShop.96.lt. SouvenirShop còn<b> nhận tặng những món quà theo yêu cầu của quý khách hàng</b>. Chỉ cần cung cấp rõ món quà đó là gì, bao bì như thế nào và thông tin trong thiệp như thế nào chúng tôi đều có thể sắp xếp và trao gửi món quà đó đến tận nơi người nhận quà. Đây là dịch vụ đặc biệt của SouvenirShop. Vui lòng liên hệ để gửi yêu cầu về món quà của quý vị.<br/>
                SouvenirShop – SouvenirShop.96.lt Trao Gửi Quà Tặng Theo Ý Muốn Của Khách Hàng.</p>
                 <img src="images/dichvu/buy.png"  style="margin:10px 0px;"/>
                 
                <p><img src="images/dichvu/gau.png"/>Đến với SouvenirShop bạn sẽ không còn phải lo lắng điều gì. SouvenirShop <b> chuyển nhanh với tiêu chí đáp ứng nhanh, chính xác và hiệu quả</b> sẽ mang đến một bất ngờ thú vị cho các  bạn trong các mùa lễ.</p>
                <img src="images/dichvu/shipper.png" style="margin:10px 0px;"/>
                <p><img src="images/dichvu/gau.png"/>Đặc biệt SouvenirShop còn mang đến<b> dịch vụ ông già Noel giao quà</b> trong nội thành thành phố Hồ Chí Minh, sẽ giúp bạn đem lại những điều thần tiên trong cổ tích cho bạn ngay tại ngôi nhà của bạn hay người mà bạn yêu. Dịch vụ giao quà SouvenirShop mong muốn mang lại một giáng sinh ấm áp cho tất cả mọi gia đình. SouvenirShop sẽ là “sứ giả” mang tấm lòng và lời nhắn của bạn gởi tới những người bạn yêu thương nhất.<br/><i>Một lịch trình tặng quà mà ông Noel mang đến cho các bạn là có thể</i><b> giao lưu trò chuyện với ông già Noel, được chụp hình với ông già Noel, được ông già Noel khen thưởng vì thành tích nào đó(do ba mẹ gợi ý).</b><br/><i>Phí dịch vụ chuyển quà Noel tùy theo địa chỉ giao quà mà có mức phí khác nhau.</i> </p>
                <img src="images/dichvu/shipper1.png" style="margin:10px 0px;"/>
                <img src="images/dichvu/onggia.png"style="margin:10px 0px;"/>
                <p><img src="images/dichvu/gau.png"/> Ngoài những dịch vụ trên SouvenirShop còn có<b> dịch vụ hậu mãi rất hấp dẫn</b> khi quý khách mua hàng trực tiếp tại Shop sẽ được <b>tặng 1 phiếu Voucher giảm giá 5.000đ</b> áp dụng cho lần sau đến Shop mua các sản phẩm có giá trị từ 20.000đ trở lên (Voucher có trị giá trong vòng 2 tháng kể từ ngày nhận voucher).</p>
                <p style="color:#e42d2d">Hãy đến với SouvneirShop để trao gửi yêu thương đến người bạn yêu!!!</p>
			</div>
		</div>
    </div>
</div>

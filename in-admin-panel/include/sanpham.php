<div class="san_pham">
 <div class="container">
    <div class="row">
      <h1 class="text-center" >Sản phẩm </h1>
            <div class="vien" style="text-align:center;">
              <img src="images/vien.png"/>
            </div> 
    <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                  <div class="col-md-8 col-md-offset-4 ">
                     <div class="nut_icon">
                     <a data-slide="prev" href="#Carousel" class="left "><button>Trước</button></a>
                      <a data-slide="next" href="#Carousel" class="right "><button>Tiếp theo</button></a>                  
                     </div>
                   </div>
      <?php
      $sql="select * from sanpham where hienthitrangchu=1 ";
      $datasp = $db->exeQuery($sql);             
          ?>    
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                 <?php
                 $i=0;
                 foreach($datasp as $k=>$r)
                  { if ($i==0) $active=" active "; else $active="";
                    if ($i%5 ==0) echo '<div class="item ' . $active.'">
                  <div class="row fivecolumns">';
                $i++;
                    ?>
 
                    <div class="col-md-2">
					<a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r['masanpham'] ?>" class="thumbnail">
						<img src="hinhanh/sanpham/<?php echo $r["hinh"];?>" alt="Image" style="max-width:100%; padding-bottom:60px;" >
                        <h4><?php echo $r["tensanpham"];?></h4>
						
                        <p><?php echo number_format ($r["giagoc"],0,'.','.'); ?><sup>đ</sup></p>
                      </a>
                      </div>

                    <?php
                    if ($i %5==0)
                      echo '                   
                  </div><!--.row-->
                </div><!--.item-->';
                    }
                ?>

                 
                </div><!--.carousel-inner-->
                  
                </div><!--.Carousel-->
                 
    </div>
  </div>
   
    </div><!--.container-->
</div>
<!--Hop thiep-->
<div class="phukien">
 <div class="container">
    <div class="row">
    	<h1 class="text-center" >Phụ kiện đính kèm</h1>
            <div class="vien" style="text-align:center;">
            	<img src="images/vien.png"/>
            </div> 
		<div class="col-md-12">
                <div id="Carousel-1" class="carousel slide">
                  <div class="col-md-8 col-md-offset-4 ">
                     <div class="nut_icon1">
                     <a data-slide="prev" href="#Carousel-1" class="left-sp "><button>Trước</button></a>
                      <a data-slide="next" href="#Carousel-1" class="right-sp "><button>Tiếp theo</button></a>                  
                     </div>
                   </div>
				<?php
					$sql="select * from sanpham where hienthitrangchu=2 ";
					$datasp = $db->exeQuery($sql);             
				?>          
                
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                     <?php
                 $i=0;
                 foreach($datasp as $k=>$r)
                  { if ($i==0) $active=" active "; else $active="";
                    if ($i%4 ==0) echo '<div class="item ' . $active.'">
                  <div class="row">';
                $i++;
                    ?>
               
                	  <div class="col-md-3 col-xs-6 col-sm-6 chuong_trinh2">
                      <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r['masanpham'] ?>" class="thumbnail">
						<img src="hinhanh/sanpham/<?php echo $r["hinh"];?>" alt="Image" style="max-width:100%; padding-bottom:60px;" >
                      	<div class="tieu_de">
                           <p><?php echo $r["tensanpham"];?></p>
                           <p><?php echo number_format ($r["giagoc"],0,'.','.'); ?><sup>đ</sup></p>
                        </div>
                      
                      
                      </a>
                      </div>
                	 
                	  
                	  <?php
                    if ($i %4==0)
                      echo '                   
                  </div><!--.row-->
                </div><!--.item-->';
                    }
                ?>
                 
               
                 
                </div><!--.carousel-inner-->
                  
                </div><!--.Carousel-->
                 
		</div>
	</div>
   
    </div><!--.container-->
</div>  
<!--San pham ban chay-->
<div class="spbanchay">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
             <div class="tensp">
              <h2>Sản phẩm gần đây</h2>
                <div class="cacsp">
                  <a href="Thiep.html">

                    <img class="cacsp1" src="images/sp/spganday1.png"/></a>
                    <p><a href="Thiep.html">Thiệp tình yêu</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>20.000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Quachucmung.html"><img class="cacsp1" src="images/sp/spganday2.png"/></a>
                    <p><a href="Quachucmung.html">Đèn ngủ sang trọng</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>200.000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Quasinhnhat.html"><img class="cacsp1" src="images/sp/spganday3.png"/></a>
                    <p><a href="Quasinhnhat.html">Thỏ tình yêu</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>130.000<sup>đ</sup></p>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-md-4">
             <div class="tensp">
              <h2>Sản phẩm bán chạy</h2>
                <div class="cacsp">
                  <a href="Quatinhnhan.html"><img class="cacsp1" src="images/sp/spbanchay1.png"/></a>
                    <p><a href="Quatinhnhan.html">Trái tim ngọt ngào</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>160.000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Quaphunu.html"><img class="cacsp1" src="images/sp/spbanchay2.png"/></a>
                    <p><a href="Quaphunu.html">Tình yêu chân thành</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>120.000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Hopqua.html"><img class="cacsp1" src="images/sp/spbanchay3.png"/></a>
                    <p><a href="Hopqua.html">Phụ kiện hộp quà xinh xắn</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>25.000<sup>đ</sup></p>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-md-4">
             <div class="tensp">
              <h2>Sản phẩm mới nhất</h2>
                <div class="cacsp">
                  <a href="Quasinhnhat.html"><img class="cacsp1" src="images/sp/spmoi1.png"/></a>
                    <p><a href="Quasinhnhat.html">Cốc thần kì</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>110.000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Quachucmung.html"><img class="cacsp1" src="images/sp/spmoi2.png"/></a>
                    <p><a href="Quachucmung.html">Khung hình cặp đôi</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>230.000<sup></sup></p>
                    </div>
                </div>
                <div class="cacsp">
                  <a href="Quatet.html"><img class="cacsp1" src="images/sp/spmoi3.png"/></a>
                    <p><a href="Quatet.html">Một cặp rượu vang đỏ Pháp</a></p>
                    <div class="star"><!--font awesome-->
                      <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="gia">
                    <p>1.600.000<sup>đ</sup></p>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>


<!--KT San pham ban chay-->
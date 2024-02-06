 <!-- Hero Section Begin -->
 <section class="hero">
     <div class="container">
         <div class="row">
             <div class="col-lg-3">
                 <div class="hero__categories">
                     <div class="hero__categories__all">
                         <i class="fa fa-bars"></i>
                         <span>Danh mục </span>
                     </div>
                     <ul>
                         <li><a href="">Bình gas dân dụng</a></li>
                         <li><a href="index.php?action=danhmuc&loai=loai12kg">Bình gas 12kg</a></li>
                         <li><a href="index.php?action=danhmuc&loai=loai45kg">Bình gas 45kg</a></li>
                         <li><a href="index.php?action=danhmuc&loai=loaimini">Gas Mini</a></li>
                         <!-- <li><a href="index.php?action=danhmuc&loai=loai12kg">Linh kiện</a></li> -->
                         <!-- <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                     </ul>
                 </div>
          <form action="index.php?action=locsanpham" method="post" class="p-3">
          <div class="text-center">
                <label for="" ><h4>Lọc sản phẩm</h4></label>
                
                    <div class="d-flex justify-content-center">
                    <div class="col-lg-6 " >Từ</div>
                    <div class="col-lg-6 " >Đến</div>
                    </div>
                    <div class="d-flex justify-content-center">
                    <div class="col-lg-6 " ><input class="form-control" type="number" name="tu"></div>
                    <div class="col-lg-6 " ><input class="form-control" type="number" name="den"></div>
                    </div>
                   <div>
                    <button class="btn btn-success mt-2" type="submit" name="submit">Lọc</button>
                   </div>
                    
              

                 </div>
             </div>
          </form>
 
             <div class="col-lg-9">
                 <div class="hero__search">
                     <div class="hero__search__form">
                         <form action="index.php?action=sanpham&act=timkiem" method="post">
                             <div class="hero__search__categories">
                                 All Categories
                                 <span class="arrow_carrot-down"></span>
                             </div>
                             <input type="text" placeholder="What do yo u need?" name="txtsearch">
                             <button type="submit" class="site-btn">SEARCH</button>
                         </form>
                     </div>
                     <div class="hero__search__phone">
                         <div class="hero__search__phone__icon">
                             <i class="fa fa-phone"></i>
                         </div>
                         <div class="hero__search__phone__text">
                             <h5>+65 11.188.888</h5>
                             <span>support 24/7 time</span>
                         </div>
                     </div>
                 </div>
                 <div class="hero__item set-bg" data-setbg="ogani-master/img/Banner_KhuVuc-01.jpg">
                     <div class="hero__text">
                         <span></span>
                         <h2>Hoang Quan <br /></h2>
                         <p>100% Gia re nhat thi truong</p>
                         <a href="#" class="primary-btn">SHOP NOW</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Hero Section End -->

 <!-- Categories Section Begin -->
 <section class="categories">
     <div class="container">
         <div class="row">
             <div class="categories__slider owl-carousel">
                 <?php $hh = new hanghoa();
                    $result = $hh->getHanghoaGas();
                    while ($set = $result->fetch()) {
                        # code...

                    ?>
                     <div class="col-lg-3">
                         <div class="categories__item set-bg" data-setbg="ogani-master/imgs/<?php echo $set['hinh'] ?>">
                             <h5><a href="#"><?php echo $set['ten'] ?></a></h5>
                         </div>
                     </div>
                 <?php } ?>

             </div>
         </div>
     </div>
 </section>
 <!-- Categories Section End -->

 <!-- Featured Section Begin -->
 <section class="featured spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>Sản Phẩm Mới</h2>
                 </div>
                 <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
             </div>
         </div>
         <a href="index.php?action=sanpham&act=sanphamnew">Xem thêm</a>
         <div class="row featured__filter">
             <?php
                $hh = new hanghoa();
                $result = $hh->getHanghoaGas();
                while ($set = $result->fetch()) {
                    # code...

                ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                     <div class="featured__item">
                         <div class="featured__item__pic set-bg" data-setbg="ogani-master/imgs/<?php echo $set['hinh'] ?>">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             <h6><a href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['ma'] ?>"><?php echo $set['ten'] ?></a></h6>
                             <h5><?php echo number_format($set['dongia']) ?>VND</h5>
                         </div>
                     </div>
                 </div>
             <?php } ?>


         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>Sale Product</h2>
                 </div>
                 <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
             </div>
         </div>
         <a href="index.php?action=sanpham&act=sanphamsale">Xem thêm</a>
         <div class="row featured__filter">
             <?php
                $hh = new hanghoa();
                $result = $hh->getHanghoaGasSale();
                while ($set = $result->fetch()) {
                    # code...

                ?>
                 <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                     <div class="featured__item">
                         <div class="featured__item__pic set-bg">
                             <img src="./ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                             <ul class="featured__item__pic__hover">
                                 <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                 <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                             </ul>
                         </div>
                         <div class="featured__item__text">
                             <h6><a href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['ma'] ?>"><?php echo $set['ten'] ?></a></h6>
                             <h5><?php echo number_format($set['giamgia']) ?>VND</h5>
                             <h6 style='text-decoration: line-through;'><?php echo number_format($set['dongia'])?>"VND</h6>
                         </div>
                     </div>
                 </div>
             <?php
                } ?>

         </div>
     </div>
 </section>
 <!-- Featured Section End -->

 <!-- Banner Begin -->
 <div class="banner">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="banner__pic">
                     <img src="ogani-master/imgs/Giá gas tháng 10-2023 tiếp đà tăng 20.000 đồng_bình 12kg/gia-gas-thang-6-2023-giam-manh.jpg" alt="">
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="banner__pic">
                     <img src="ogani-master/imgs/Giá gas tháng 10-2023 tiếp đà tăng 20.000 đồng_bình 12kg/gia-gas-thang-10-nam-2023-thumb.jpg" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Banner End -->

 <!-- Latest Product Section Begin -->
 <section class="latest-product spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <div class="latest-product__text">
                     <h4>New Products</h4>
                     <div class="latest-product__slider owl-carousel">
                         <div class="latest-prdouct__slider__item">
                             <?php
                                $hh = new hanghoa();
                                $result = $hh->getHanghoaGas();
                                while ($set = $result->fetch()) {
                                    # code...

                                ?>
                                 <a href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['ma'] ?>" class="latest-product__item">
                                     <div class="latest-product__item__pic">
                                         <img src="ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                                     </div>
                                     <div class="latest-product__item__text">
                                         <h6><?php echo $set['ten'] ?></h6>
                                         <span><?php echo $set['dongia'] ?></span>
                                     </div>
                                 </a>
                             <?php
                                }
                                ?>
                         </div>
                         <div class="latest-prdouct__slider__item">
                             <?php
                                $hh = new hanghoa();
                                $result = $hh->getHanghoaGas();
                                while ($set = $result->fetch()) {
                                    # code...

                                ?>
                                 <a href="#" class="latest-product__item">
                                     <div class="latest-product__item__pic">
                                         <img src="ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                                     </div>
                                     <div class="latest-product__item__text">
                                         <h6><?php echo $set['ten'] ?></h6>
                                         <span><?php echo $set['dongia'] ?></span>
                                     </div>
                                 </a>
                             <?php
                                }
                                ?>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="latest-product__text">
                     <h4>Top Rated Products</h4>
                     <div class="latest-product__slider owl-carousel">
                         <div class="latest-prdouct__slider__item">
                             <?php
                                $hh = new hanghoa();
                                $result = $hh->getHanghoaGasSale();
                                while ($set = $result->fetch()) {
                                    # code...

                                ?>
                                 <a href="#" class="latest-product__item">
                                     <div class="latest-product__item__pic">
                                         <img src="ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                                     </div>
                                     <div class="latest-product__item__text">
                                         <h6><?php echo $set['ten'] ?></h6>
                                         <span><?php echo $set['dongia'] ?></span>
                                     </div>
                                 </a>
                             <?php
                                }
                                ?>

                         </div>
                         <div class="latest-prdouct__slider__item">
                             <?php
                                $hh = new hanghoa();
                                $result = $hh->getHanghoaGasSale();
                                while ($set = $result->fetch()) {
                                    # code...

                                ?>
                                 <a href="#" class="latest-product__item">
                                     <div class="latest-product__item__pic">
                                         <img src="ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                                     </div>
                                     <div class="latest-product__item__text">
                                         <h6><?php echo $set['ten'] ?></h6>
                                         <span><?php echo $set['dongia'] ?></span>
                                     </div>
                                 </a>
                             <?php
                                }
                                ?>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="latest-product__text">
                     <h4>Review Products</h4>
                     <div class="latest-product__slider owl-carousel">
                         <div class="latest-prdouct__slider__item">
                             <?php
                                $hh = new hanghoa();
                                $result = $hh->getHanghoaGasSale();
                                while ($set = $result->fetch()) {
                                    # code...

                                ?>
                                 <a href="#" class="latest-product__item">
                                     <div class="latest-product__item__pic">
                                         <img src="ogani-master/imgs/<?php echo $set['hinh'] ?>" alt="">
                                     </div>
                                     <div class="latest-product__item__text">
                                         <h6><?php echo $set['ten'] ?></h6>
                                         <span><?php echo $set['dongia'] ?></span>
                                     </div>
                                 </a>
                             <?php
                                }
                                ?>
                         </div>
                         <div class="latest-prdouct__slider__item">
                             <a href="#" class="latest-product__item">
                                 
                             </a>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Latest Product Section End -->
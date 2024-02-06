 <?php
    $id = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sp = new hanghoa();
        $result = $sp->getHangHoaID($id);
        $ten = $result['ten'];
        $dongia = $result['dongia'];
        $giamgia = $result['giamgia'];
        $hinh = $result['hinh'];
        $mota = $result['mota'];
        $maloai = $result['maloai'];
    }
    ?>
 <section class="product-details spad">
     <form action="index.php?action=giohang&act=giohang_action" method="post">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="product__details__pic">
                         <div class="product__details__pic__item">
                             <img class="product__details__pic__item--large" src="ogani-master/imgs/<?php echo $hinh ?>" alt="">
                         </div>
                         <!-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="ogani-master/img/product/details/product-details-2.jpg"
                                src="ogani-master/img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="ogani-master/img/product/details/product-details-3.jpg"
                                src="ogani-master/img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="ogani-master/img/product/details/product-details-5.jpg"
                                src="ogani-master/img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="ogani-master/img/product/details/product-details-4.jpg"
                                src="ogani-master/img/product/details/thumb-4.jpg" alt="">
                        </div> -->
                     </div>
                 </div>

                 <div class="col-lg-6 col-md-6">
                     <input type="hidden" name="idd" value="<?php echo $id; ?>">
                     <input type="hidden" name="maloai" value="<?php echo $maloai; ?>">
                     <div class="product__details__text">
                         <h3><?php echo $ten; ?></h3>
                         <div class="product__details__rating">
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-o"></i>
                             <span>(18 reviews)</span>
                         </div>
                         <?php
                            if ($giamgia == 0) {
                                echo "<div class='product__details__price'>" . number_format($dongia) . "</div>";
                            } else {
                                echo "<div class='product__details__price'>" . number_format($giamgia) . "</div>";
                            }
                            ?>
                         <p><?php echo $mota; ?></p>
                         <div class="product__details__quantity">
                             <div class="quantity">
                                 <div class="pro-qty">
                                     <input type="text" value="1" name="quantity">
                                 </div>
                             </div>
                         </div>
                         <button style="background-color: green;" class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY</button>
                         <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                         <ul>
                             <li><b>Availability</b> <span>In Stock</span></li>
                             <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                             <li><b>Weight</b> <span>0.5 kg</span></li>
                             <li><b>Share on</b>
                                 <div class="share">
                                     <a href="#"><i class="fa fa-facebook"></i></a>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                     <a href="#"><i class="fa fa-instagram"></i></a>
                                     <a href="#"><i class="fa fa-pinterest"></i></a>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
     </form>
     <div class="col-lg-12">
         <div class="product__details__tab">
             <ul class="nav nav-tabs" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Information</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Comment <span>(1)</span></a>
                 </li>
             </ul>

             <div class="tab-content">
                 
                     <div class="tab-pane active" id="tabs-1" role="tabpanel">
                         <div class="product__details__tab__desc">
                             <h6>Tất cả đánh giá</h6>
                             <?php
                                $cmt = new binhluan();
                                $kq = $cmt->xuatbinhluan($id);
                                while ($set = $kq->fetch()) :
                                ?>
                              
                                 <div class="py-3">Tên khách hàng: <b><?php echo $set['tenkh'] ?></b><br></div>
                                 <div class="">Nội dung: <i><?php echo $set['content'] ?></i> <br></div>
                            

                             <?php
                                endwhile;
                                ?>
                         </div>
                
             </div>

             <div class="tab-pane" id="tabs-2" role="tabpanel">
                 <div class="product__details__tab__desc">
                     <h6>Products Infomation</h6>
                     <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                         Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                         Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                         sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                         eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                         Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                         sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                         diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                         ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                         Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                         Proin eget tortor risus.</p>
                     <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                         ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                         elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                         porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                         nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                 </div>
             </div>
             <div class="tab-pane " id="tabs-3" role="tabpanel">
                 <?php
                    if (isset($_SESSION['tenkh']) && isset($_SESSION['makh'])) {
                    ?>
                     <div class="product__details__tab__desc ">
                         <h6>Comment</h6>
                         <p><label for=""><b>Nhập đánh giá:</b></label>
                         <form action="index.php?action=binhluan" method="post">
                             <input type="hidden" value="<?php echo $id; ?>" name="idhh">
                             <div class="row">

                                 <textarea name="binhluan" id="" cols="60" rows="5" placeholder="Nhập đánh giá..." style="border-radius:10px ;"></textarea>
                             </div>
                             <div>
                                 <button name="submit" class="btn btn-success" style="width:60px;margin-top: 15px;">Gửi</button>
                             </div>
                         </form>
                         </p>
                     </div>
             </div>
         <?php } else { ?>
             <h3 class="text-center mt-3">Đăng nhập để Đánh giá</h3>
         <?php } ?>
         </div>
     </div>
     </div>
     </div>
     </div>
 </section>
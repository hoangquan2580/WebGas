<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
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
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<?php
  if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    
  ?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<form action="index.php?action=giohang&act=giohang_update" method="post">
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">STT</th>
                                <th >Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Loai</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                        $j=0;
                        foreach($_SESSION['cart'] as $key=> $item):
                        $j++;
                        ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $j?></td>
                                <td class="shoping__cart__item">
                                    <img src="ogani-master/imgs/<?php echo $item['hinh']?>" alt="" width="100px">
                                    <h5><?php echo $item['tenhh']?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                <?php ?>
                                <?php 
                                if($item["giamgia"]==0){
                                    echo number_format($item['dongia']);
                                }else{
                                    echo number_format($item['giamgia']);
                                }
                                ?>
                                </td>
                                
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="<?php echo $item['soluong']?>" name="newqty[<?php echo $key;?>]">
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $item['loai']?></td>
                                <td class="shoping__cart__total">
                                   <?php echo number_format($item['tien'])?>
                                </td>
                                <td class="shoping__cart__item__close">
                                   <a href="index.php?action=giohang&act=giohang_delete&id=<?php echo $key;?>"> <span class="icon_close"></span></a>
                                </td>
                            </tr>

                        </tbody>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                    <button style="background-color: green;" class="add-to-cart btn btn-default" type="submit" data-toggle="modal"
                                data-target="#myModal" >UPDATE CART</button></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>

                        <input type="text" placeholder="Enter your coupon code">
                        <button type="submit" class="site-btn">APPLY COUPON</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span> <?php 
                                    $cart=new giohang();
                                    echo number_format( $cart->tinhtong());
                                    $_SESSION['thanhtoan']=$cart->tinhtong();
                                    ?></span></li>
                        <li>Total <span> <?php 
                                    $cart=new giohang();
                                    echo number_format($cart->tinhtong());
                                    ?></span></li>
                    </ul>
                    <a href="index.php?action=thanhtoan" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
</form>

<?php
} else {
    echo "<script>alert('gio hang trong')</script>";
    echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
  }; 
?>
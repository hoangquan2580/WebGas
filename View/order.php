<?php
if (!isset($_SESSION['makh'])) {
    echo "<script>alert('dang nhap de thanh toan')</script>";
    echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangnhap"/>';
} else {


?>
    <!-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> -->
            <?php
            if (isset($_SESSION['masohd'])) {
                $masohd = $_SESSION['masohd'];
                $hd = new hoadon();
                $kh = $hd->getThongTinKHHoadon($masohd);
                $tenkh = $kh['tenkh'];
                $ngay = $kh['ngaydat'];
                $dc = $kh['diachi'];
                $sodt = $kh['sodienthoai'];
                $email = $kh['email'];


            ?>
                <div class="checkout__form">
                    <h4>Billing Details</h4>
                    <form action="index.php?action=xacnhandonhang" method="post">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">


                                <div class="checkout__input">
                                    <p>Ma don hang</p>
                                    <input type="text" placeholder="Street Address" class="checkout__input__add" readonly value="<?php echo $masohd ?>">

                                </div>
                                <div class="checkout__input">
                                    <p>Ho va ten<span>*</span></p>
                                    <input type="text" placeholder="Street Address" class="checkout__input__add" readonly value="<?php echo $tenkh ?>">

                                </div>
                                <div class="checkout__input">
                                    <p>Dia chi<span>*</span></p>
                                    <input type="text" placeholder="Street Address" class="checkout__input__add" readonly value="<?php echo $dc ?>">

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Phone<span>*</span></p>
                                            <input type="text" readonly value="<?php echo $sodt ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="text" readonly value="<?php echo $email ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="checkout__input">
                                    <p>Order notes<span>*</span></p>
                                    <input type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                                </div>
                            </div>
            <?php } ?>
                        <div class="" style="width: 100%;">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products ">
                                    Products
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    So luong<span>Total</span>
                                </div>

                                <ul>
                                    <?php
                                    $tt = $hd->getThongTinHangHoaDS($masohd);
                                    while ($set = $tt->fetch()) :
                                    ?>
                                        <li><?php echo $set['ten'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $set['soluongmua'] ?> <span><?php echo number_format($set['thanhtien']) ?></span></li>
                                        <!-- <li>Fresh Vegetable <span>$151.99</span></li>
                                    <li>Organic Bananas <span>$53.99</span></li> -->
                                    <?php
                                    endwhile;
                                    ?>
                                </ul>

                                <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
                                <div class="checkout__order__total">Total <span>
                                        <?php
                                        $gh = new giohang();
                                        echo number_format($_SESSION['thanhtoan']);
                                        ?>
                                    </span></div>
                                <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>

        </div>
    </section>
<?php
}
?>
<section class="featured spad">
    <?php
    $flag = 1;
    if (isset($_GET['action'])) {
        if (isset($_GET['loai']) && $_GET['loai'] == 'loai12kg') {
            $flag = 1;
        } else if (isset($_GET['loai']) && $_GET['loai'] == 'loai45kg') {
            $flag = 2;
        } else {
            $flag = 3;
        }
    }

    $hh = new hanghoa();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <?php
                    if ($flag == 1) {

                        echo "  <h2>Gas 12kg</h2>";
                    }
                    if ($flag == 2) {

                        echo "  <h2>Gas 45kg</h2>";
                    }
                    if ($flag == 3) {

                        echo "  <h2>Gas Mini</h2>";
                    }
                    ?>
                </div>
                <div class="featured__controls">
                    <!-- <ul> -->
                    <!-- <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul> -->
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            if ($flag == 1) {

                $result = $hh->getHangHoaloai12kg();
            }
            if ($flag == 2) {

                $result = $hh->getHangHoaloai45kg();
            }
            if ($flag == 3) {

                $result = $hh->getHangHoaloaimini();
            }

            while ($set = $result->fetch()) {
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
                            <?php
                            if ($set['giamgia'] !== 0) {
                                echo "<h6 style='text-decoration: line-through;'>" . $set['dongia'] . "VND</h6>
                                <h4>" . $set['giamgia'] . "VND</h4>";
                            } else {
                                echo      "<h4>" . $set['dongia'] . "VND</h4>";
                            }
                            ?>

                        </div>
                    </div>

                </div> <?php

                    } ?>

        </div>
    </div>
</section>
<?php
$flag = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamnew') {
        $flag = 1;
    } 
    if(isset($_GET['act']) && $_GET['act'] =='sanphamsale') {
        $flag = 2;
    }
    if(isset($_GET['act']) && $_GET['act'] =='timkiem') {
        $flag = 3;
    }
    // if(isset($_GET['act']) && $_GET['act'] =='loai12kg') {
    //     $flag = 3;
    // }
    
}
?>
<?php
//   b1 xac dinh tong san pham tren trang

    $hh = new hanghoa();
if($flag==1){
    $count = $hh->getSanphamNew()->rowCount();
}
if($flag==2){
    $count = $hh->getSanphamSale()->rowCount();
}
if($flag==3){
    if(isset($_POST['txtsearch'])){
        $search=$_POST['txtsearch']; 
        
      }
    $count = 0;
}

//gioi han 1 trang bao nhieu san pham
$limit = 4;
//lay so trang
$trang = new page();
//lay so trang
$page = $trang->findpage($count, $limit);

$start = $trang->findstart($limit);


?>
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($flag == 1) {
                    echo '<div class="section-title">
                        <h2>Sản Phẩm Mới</h2>
                    </div>';
                }
                if ($flag == 2) {
                    echo '<div class="section-title">
                        <h2>Sản Phẩm Slae</h2>
                    </div>';
                }
                if ($flag == 3) {
                    echo '<div class="section-title">
                        <h2>Ket Qua Tim Kiem</h2>
                    </div>';
                }
                // if ($flag == 3) {
                //     echo '<div class="section-title">
                //         <h2>Sản Phẩm 12kg</h2>
                //     </div>';
                // }
                ?>
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
        <!-- <a href="index.php?action=sanpham&act=sanphamnew">Xem thêm</a> -->
        <div class="row featured__filter">
           
            <?php
            $hh = new hanghoa();

            if ($flag == 1) {
                $result = $hh->getNewPage($start, $limit);
            }
            if ($flag == 2) {
                $result = $hh->getNewPagesale($start,$limit);
            }
            if ($flag == 3) {
              if(isset($_POST['txtsearch'])){
                $search=$_POST['txtsearch']; 
                
              }
              $result =$hh->timkiemsanpham($search);
             
            }
            
            while ($set = $result->fetch()) :
                # code...

            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">

                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="ogani-master/imgs/<?php echo $set['hinh'];?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['ma']?>"><?php echo $set['ten'] ?></a></h6>
                            <?php
                            if ($flag == 1) {
                                echo "<h5>" . number_format($set['dongia']) . "VND</h5>";
                            }
                            if ($flag == 2) {
                                echo "<h6 style='text-decoration: line-through;'>" . number_format($set['dongia']) . "VND</h6>
                                <h4>" .number_format( $set['giamgia'] ). "VND</h4>";
                            }
                            if ($flag == 3) {
                                if($set['giamgia']!==0){
                                    echo "<h5 style='text-decoration: line-through;'>" . number_format($set['dongia']) . "VND</h5>
                                <h5>" .number_format( $set['giamgia'] ). "VND</h5>";
                                }else{
                                    echo "<h5>" . number_format($set['dongia']) . "VND</h5>";
                                }
                                
                            }
                            ?>

                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>

</section>

<!-- <ul class="pagination"> -->


<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
    <?php
    if($flag==1){
    $act='sanphamnew';
    }
    if($flag==2){
    $act='sanphamsale';
    }
    // if($flag==3){
    // $act='timkiem';
    // }

    for ($i = 1; $i <= $page; $i++) {
       
    ?>

       
        <li class="page-item"><a class="page-link" href="index.php?action=sanpham&act=<?php echo $act;?>&page=<?php echo $i?>"><?php echo $i;?></a></li>
       

    <?php
    }
    ?>
</ul>
</nav>


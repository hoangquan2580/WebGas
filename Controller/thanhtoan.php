<?php 
if(isset($_SESSION['makh'])){
$makh=$_SESSION['makh'];
$hd = new hoadon();
$sohd = $hd->insertHoaDon($makh);//tra ve ma hoa don dung ma hoa don de insert tiep vao bang chitiet
$_SESSION['masohd']=$sohd;//tao
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoaDon($sohd, $item['mahh'], $item['soluong'], $item['tien']);
        $total += $item['tien'];
    }
    $hd->updateHoaDonTongTien($sohd, $makh, $total);
}
unset($_SESSION['cart']);
include_once './View/order.php';
?>
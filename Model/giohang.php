<?php
class giohang
{
    function addproduct($id, $quantity, $idloai)
    {
        $hh = new hanghoa();
        $sp = $hh->getHangHoaID($id);
        $ten = $sp['ten'];
        $hinh = $sp['hinh'];
        $dongia = $sp['dongia'];
        $giamgia = $sp['giamgia'];
        $sp1 = $hh->getLayloai($id);
        $loai = $sp1['tenloai'];
        if ($giamgia == 0) {         
            $tien = $quantity * $dongia;
        } else {
            $tien = $quantity * $giamgia;
        }
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $id) {
                $flag = true;
                $quantity = $quantity + $item['soluong'];
                $this->updategiohang($key, $quantity);
            }
        }
        if ($flag == false) {

            $item = array(
                'giamgia' => $giamgia,
                'loai' => $loai,
                'tien' => $tien,
                'mahh' => $id,
                'tenhh' => $ten,
                'dongia' => $dongia,
                'hinh' => $hinh,
                'soluong' => $quantity,
            );
            $_SESSION['cart'][] = $item;
        }
    }
    function updategiohang($index, $soluong)
    {
        if ($soluong < 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['soluong'] = $soluong;
            if ($_SESSION['cart'][$index]['giamgia'] == 0) {
                $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            } else {
                $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['giamgia'];
            }
            $_SESSION['cart'][$index]['tien'] = $tiennew;
        }
    }
    function tinhtong()
    {
        $sum = 0;
        foreach ($_SESSION['cart'] as $item) {
            $sum += $item['tien'];
        }
        return $sum;
    }
    function tinhtongitem()
    {
        $sum = 0;
        foreach ($_SESSION['cart'] as $item) {
            $sum += $item['soluong'];
        }
        return $sum;
    }
}

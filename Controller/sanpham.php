<?php
$act = '';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'sanphamnew':
        include_once './View/sanpham.php';
        break;
    case 'sanphamsale':
        include_once './View/sanpham.php';
        break;
    case 'timkiem':
        include_once './View/sanpham.php';
        break;
    case 'chitietsanpham':
        include './View/chitietsanpham.php';
        break;
}

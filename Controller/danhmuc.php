<?php
$loai = 'danhmuc';
if (isset($_GET['loai'])) {
    $loai = $_GET['loai'];
}
switch ($loai) {
    case 'danhmuc':
        include_once './View/danhmuc.php';
        break;
    case 'loai12kg':
        include_once './View/danhmuc.php';
        break;
    case 'loai45kg':
        include_once './View/danhmuc.php';
        break;
    case 'loaimini':
        include_once './View/danhmuc.php';
        break;
}

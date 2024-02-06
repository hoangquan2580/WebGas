<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        // unset($_SESSION['cart']);
        include_once "./View/giohang.php";
        break;
    case 'giohang_action':
        $id = 0;
        $quantity = 0;
        $maloai=0;
        if (isset($_POST['idd'])) {
            $id = $_POST['idd'];
            $quantity = $_POST['quantity'];
            $maloai = $_POST['maloai'];
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
            $giohang = new giohang();
            $giohang->addproduct($id,$quantity,$maloai);
        }
        break;
        case 'giohang_delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                unset($_SESSION['cart'][$id]);
            }
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
            break;
            case 'giohang_update':
                if (isset($_POST['newqty'])) {
                    $newsl = $_POST['newqty'];
                    foreach ($newsl as $key => $value) {
                        if ($_SESSION['cart'][$key]['soluong'] != $value) {
                            $gh = new giohang();
                            $gh->updategiohang($key, $value);
                        }
                    }
                }
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
                break;
}

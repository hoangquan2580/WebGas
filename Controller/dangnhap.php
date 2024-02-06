<?php
$act = 'dangnhap';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $saltF = "G45a#?";
            $saltL = "Td23$%";
            $passnew = md5($saltF.$pass.$saltL);
            $kh = new user();
            $lgkh = $kh->loginKH($user,$passnew);
            if ($lgkh !== false) {
                echo '<script>alert("Dang nhap thanh cong")</script>';
                $_SESSION['makh'] = $lgkh['makh'];
                $_SESSION['tenkh'] = $lgkh['tenkh'];
               
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
            } else {
                echo '<script>alert("Dang nhap khong thanh cong")</script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangnhap"/>';
            }
        }

        break;
}
?>
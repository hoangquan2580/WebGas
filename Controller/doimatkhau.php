<?php
$act = 'doimatkhau';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'doimatkhau':
        include_once "./View/doimatkhau.php";
        break;
    case 'doimatkhau_action':
        $mkcu = '';
        $mkmoi = '';
        if (isset($_POST['submit'])) {
            $mkcu = $_POST['mkcu'];
            $mkmoi = $_POST['mkmoi'];
            $saltF = "G45a#?";
            $saltL = "Td23$%";
            $tenkh=$_SESSION['tenkh'];
            $makh=$_SESSION['makh'];
            $passold=md5($saltF.$mkcu.$saltL);
            $passnew = md5($saltF.$mkmoi.$saltL);
           
            
            // $kh = new user();
            // if ($lgkh !== false) {
            //     echo '<script>alert("Dang nhap thanh cong")</script>';
            //     $_SESSION['makh'] = $lgkh['makh'];
            //     $_SESSION['tenkh'] = $lgkh['tenkh'];
               
            //     echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
            // } else {
            //     echo '<script>alert("Dang nhap khong thanh cong")</script>';
            //     echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangnhap"/>';
            // }
        } 
            $change=new doimatkhau();
            $check=$change->checkmatkhau($passold,$makh,$tenkh)->rowCount();
            echo $check;
            if($check<1){
                echo '<script> alert("mat khau cu khong dung");</script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=doimatkhau"/>';
            }else{
                $update=$change->updatematkhau($passnew,$makh,$tenkh);
                if($update==false){
                    echo '<script> alert("Đổi mật khẩu thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
                }else{
                    echo '<script> alert("Đổi mật khẩu thất bại");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=index.php?action=doimatkhau"/>';
                };
            }

        break;
}
?>
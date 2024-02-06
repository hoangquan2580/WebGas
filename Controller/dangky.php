<?php
$act = 'dangky';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        # code...
        include_once "./View/dangky.php";

        break;

    case 'dangky_action':
        # code...
        $ten="";
        $email="";
        $username="";
        $password="";
        $sdt="";
        $dc="";
        if(isset($_POST['submit'])){
            $ten=$_POST['ten'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sdt=$_POST['sdt'];
            $dc=$_POST['dc'];
            $saltF = 'G45a#?';
            $saltL = 'Td23$%';
            $passnew = md5($saltF. $password . $saltL);//ma hoa mat khau
        }
        $kh=new user();
        $check=$kh->checkuser($username,$email)->rowCount();//dem dong
        echo $check;
       
        if($check>=1){
            echo '<script> alert("dang ky that bai");</script>';
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangky"/>';
        }else{
            $insert=$kh->insertKH($ten, $username, $passnew, $email, $dc, $sdt);
            if ($insert !== false) {
                echo '<script> alert("dang ky thanh cong");</script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php"/>';
                // include_once "./View/home.php";
            } else {
                
                // include_once "./View/registration.php";
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangky"/>';
                echo 'Dang ki thant bai';
            }
            
        }
        break;
}

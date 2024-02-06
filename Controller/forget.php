<?php
$act = "forget";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forget':
        include_once "./View/forget.php";
        break;
    case 'forget_action':
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            echo $email;
            $_SESSION['email'] = array();
            $usr = new user();
            $checkur = $usr->checkEmail($email)->rowCount();
            if ($checkur > 0) {

                // tạo pass ngẫu nhiên 123456
                $code = random_int(1000, 100000);
                // tạo đối tượng
                $item = array(
                    'id' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][] = $item;
                //tiến hành gửi mail
                $mail = new PHPMailer();
                $mail->CharSet = "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;
                // GMAIL username to:
                // $mail->Username = "php22023@gmail.com";//
                $mail->Username = "quantruong4185@gmail.com"; //
                // GMAIL password
                // $mail->Password = "php22023ngoc";
                $mail->Password = "drcr tecx snpm rprh"; //Phplytest20@php
                $mail->SMTPSecure = "tls";  // ssl
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "587"; // 465
                $mail->From = 'quantruong4185@gmail.com';
                $mail->FromName = 'HoangQuan';
                // $getemail là địa chỉ mail mà người nhập vào địa chỉ của họ đã đăng ký trong trang web
                $mail->AddAddress($email, 'reciever_name');
                $mail->Subject = 'Reset Password';
                $mail->IsHTML(true);
                $mail->Body = 'Cấp lại mã code ' . $code . '';
                if ($mail->Send()) {
                    echo '<script> alert("Check Your Email and Click on the 
               link sent to your email");</script>';
                    include "./View/forgetreset.php";
                } else {
                    echo "Mail Error - >" . $mail->ErrorInfo;
                    include "./View/forget.php";
                }
                // include "./View/resetpw.php";
            } else {
                echo '<script> alert("Địa chỉ mail ko tồn tại");</script>';
                include "./View/forget.php";
            }
        }
        break;
    case 'capnhatmatkhaumoi':
        if (isset($_POST['submit'])) {
            $code = $_POST['code'];
            $_SESSION['code']=$code;
            foreach ($_SESSION['email'] as $key => $item) {
                if ($item['id'] == $code) {
                    include_once "./View/capnhatmatkhaumoi.php";
                } else {
                    echo "<script>alert('ma khong dung')</script>";
                    echo '<meta http-equiv="refresh" content="0;url=index.php?action=forget"/>';
                }
            }
        }
        // echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangnhap"/>';
        break;
        case 'reset':
            if (isset($_POST['submit'])) {
                $pass = $_POST['matkhaumoi'];
                foreach($_SESSION['email'] as $key=>$item){
                    if($item['id']==$_SESSION['code']){
                        $emailold=$item['email'];
                        $saltF = "G45a#?";
                        $saltL = "Td23$%";
                        $passnew=md5($saltF.$pass.$saltL);
                        $usr=new user();
                        $usr->updatePassEmail($emailold,$passnew);
                    }
                }
            }
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangnhap"/>';
            break;
}

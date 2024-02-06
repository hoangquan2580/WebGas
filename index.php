<?php
// include_once './Model/connect.php'; 
session_start();
include_once "Model/class.phpmailer.php";
?>
<?php
    //  include_once './Model/hanghoa.php';
; ?>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>


<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="ogani-master/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/style.css" type="text/css">
    <!--  -->

</head>

<body>


    <?php
    
    include_once 'View/header.php';
    ?>
    <div class="container">
      
            <?php
            $ctrl = 'home';
            if (isset($_GET['action'])) {
                $ctrl = $_GET['action'];
            };
            include_once "Controller/$ctrl.php";
            ?>
        
    </div>
    <?php
    include_once 'View/footer.php';
    ?>


<!-- <script>
    // function hieninput(){
    //     document.getElementById('suabinhluan').style.display='block';
    // }
</script> -->
    <script src="ogani-master/js/jquery-3.3.1.min.js"></script>
    <script src="ogani-master/js/bootstrap.min.js"></script>
    <script src="ogani-master/js/jquery.nice-select.min.js"></script>
    <script src="ogani-master/js/jquery-ui.min.js"></script>
    <script src="ogani-master/js/jquery.slicknav.js"></script>
    <script src="ogani-master/js/mixitup.min.js"></script>
    <script src="ogani-master/js/owl.carousel.min.js"></script>
    <script src="ogani-master/js/main.js"></script>

    

</body>

</html>
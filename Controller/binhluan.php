<?php

        if (isset($_POST['submit'])) {
            $idkh = $_SESSION['makh'];
            $content = $_POST['binhluan'];
            $idhh = $_POST['idhh'];
            $cm=new binhluan();
            $cm->addbinhluan($idkh,$idhh,$content);
            echo "<meta http-equiv='refresh' content='0;url=index.php?action=sanpham&act=chitietsanpham&id=$idhh'/>";
        }
      
  
    ?>


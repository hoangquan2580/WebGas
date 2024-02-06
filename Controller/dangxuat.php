<?php
unset($_SESSION['tenkh']);
unset($_SESSION['makh']);

echo '<script>alert("Bạn đã đăng xuất");</script>';
echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
?>
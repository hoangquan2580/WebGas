<?php
class doimatkhau{
    function checkmatkhau($mkcu,$makh,$tenkh){
        $db=new connect();
        $select = "SELECT a.username,a.email,a.matkhau from khachhang a WHERE a.matkhau='$mkcu' and a.makh='$makh' and a.tenkh='$tenkh'";
        $result=$db->getList($select);
        return $result;
    }
    function updatematkhau($passnew,$makh,$tenkh){
        $db=new connect();
        $query = "update khachhang set matkhau='$passnew' where makh='$makh' and tenkh='$tenkh'";
        $db->exec($query);
    }
}
?>
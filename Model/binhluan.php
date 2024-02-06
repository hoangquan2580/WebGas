<?php
class binhluan{
    function addbinhluan($idkh,$idhh,$content){
        $db = new connect();
        $query = "INSERT INTO comment (idcomment,idkh,idhanghoa,content,luotthich)
         VALUES(NULL,$idkh,$idhh,'$content',0)";
        //exec de insert
        $result = $db->exec($query);
        return $result;
    }
    function xuatbinhluan($id){
        $db=new connect();
        $select="select DISTINCT a.tenkh,b.content,b.idcomment from khachhang a, comment b WHERE b.idkh=a.makh and b.idhanghoa=$id";
        $result=$db->getList($select);
        return $result;
    }
}
?>
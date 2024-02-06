<?php
class hanghoa
{
    function getHanghoaGas()
    {
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia ,b.giamgia,b.ma
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and b.giamgia=0 limit 4
        ";
        $result = $db->getList($select);
        return $result;
    }
    function getGasCarosel()
    {
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia ,b.giamgia
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma 
        ";
        $result = $db->getList($select);
        return $result;
    }
    function getHanghoaGasSale()
    {
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia,b.giamgia,b.ma
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and b.giamgia!=0 limit 4";
        $result = $db->getList($select);
        return $result;
    }
    function getSanphamSale()
    {
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia,b.giamgia
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and b.giamgia!=0";
        $result = $db->getList($select);
        return $result;
    }
    function getSanphamNew()
    {
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia,b.giamgia
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma";
        $result = $db->getList($select);
        return $result;
    }
    function getNewPage($start, $limit)
    {
        $db = new connect();
        $select = "select a.ma,a.ten,b.hinh,b.dongia,b.giamgia
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and b.giamgia=0 limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getNewPagesale($start, $limit)
    {
        $db = new connect();
        $select = "select a.ma,a.ten,b.hinh,b.dongia,b.giamgia
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and b.giamgia!=0 limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.ma,a.ten,b.hinh,b.dongia,b.giamgia,a.mota,c.maloai
        from chitietsanphamga b,sanphamga a,loaiga c
        WHERE a.ma=b.ma and a.ma=$id";
        $result = $db->getIntances($select);
        return $result;
    }
    function getHangHoaloai12kg()
    {
        $db = new connect();
        $select = "select a.ma,a.ten,b.hinh,b.dongia,b.giamgia,c.tenloai
        from chitietsanphamga b,sanphamga a,loaiga c
        WHERE a.ma=b.ma and a.maloai=c.maloai and c.maloai=1 ";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaloai45kg()
    {
        $db = new connect();
        $select = "select a.ma,a.ten,b.hinh,b.dongia,b.giamgia,c.tenloai
        from chitietsanphamga b,sanphamga a,loaiga c
        WHERE a.ma=b.ma and a.maloai=c.maloai and c.maloai=2 ";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaloaimini()
    {
        $db = new connect();
        $select = "select a.ma,a.ten,b.hinh,b.dongia,b.giamgia,c.tenloai
        from chitietsanphamga b,sanphamga a,loaiga c
        WHERE a.ma=b.ma and a.maloai=c.maloai and c.maloai=3 ";
        $result = $db->getList($select);
        return $result;
    }
    function getLayloai($id)
    {
        $db = new connect();
        $select = "select b.tenloai from sanphamga a,loaiga b  WHERE a.maloai=b.maloai and a.ma=$id";
        $result = $db->getIntances($select);
        return $result;
    }
    function timkiemsanpham($tenhh){
        $db = new connect();
        $select = "select a.ten,b.hinh,b.dongia,b.giamgia,a.ma
        from chitietsanphamga b,sanphamga a
        WHERE a.ma=b.ma and a.ten like '%$tenhh%'";
        $result = $db->getList($select);
        return $result;
    }
    // function timkiemsanpham1($tenhh,$start,$limit){
    //     $db = new connect();
    //     $select = "select a.ten,b.hinh,b.dongia,b.giamgia,a.ma
    //     from chitietsanphamga b,sanphamga a
    //     WHERE a.ma=b.ma and a.ten like '%$tenhh%' limit $start,$limit";
    //     $result = $db->getList($select);
    //     return $result;
    // }
    function locsanpham($tu,$den){
        $db=new connect();
        $select = "select a.ma,a.hinh,b.ten,a.dongia,a.giamgia from chitietsanphamga a ,sanphamga b WHERE a.ma=b.ma and a.dongia >= $tu AND a.dongia <= $den";
        $result = $db->getList($select);
        return $result;
    }
   
}

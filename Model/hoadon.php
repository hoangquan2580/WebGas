<?php
class hoadon{
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(masohd,makh,ngaydat,tongtien) values (NULL,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $masohd = $db->getIntances($select);
        return $masohd[0];
    }
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $thanhtien)
    {
        $db = new connect();
        $query = "insert into cthoadon(masohd,mahh,soluongmua,thanhtien,tinhtrang) values ($masohd,$mahh,$soluongmua,$thanhtien,0)";
        $db->exec($query);
    }
    function updateHoaDonTongTien($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$tongtien WHERE masohd=$masohd and makh=$makh";
        $db->exec($query);
    }
    function getThongTinKHHoadon($masohd){
        $db=new connect();
        $select="select a.masohd,b.tenkh,a.ngaydat,b.diachi,b.sodienthoai,b.email from hoadon a,khachhang b WHERE a.makh=b.makh and a.masohd=$masohd";
        $result=$db->getIntances($select);
        return $result;
    }
    function getThongTinHangHoaDS($masohd){
        $db=new connect();
        $select="select DISTINCT b.ten,a.soluongmua,a.thanhtien from cthoadon a,sanphamga b, chitietsanphamga c WHERE a.mahh=b.ma and b.ma=c.ma and a.masohd=$masohd";
        $result=$db->getList($select);
        return $result;
    }
}
?>
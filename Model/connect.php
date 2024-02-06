<?php
class Connect {
    var $db = null;

    function __construct() {
        $dsn = 'mysql:host=localhost;dbname=webgas';
        $user = 'root';
        $pass = "";
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            // echo 'Kết nối thành công';
        } catch (\Throwable $th) {
            echo 'Kết nối không thành công';
            echo $th;
        }
    }
    function getList($select){
        $result = $this->db->query($select);
        return $result;
    }
    function getIntances($select) {
        $results = $this->db->query($select);
        $result = $results->fetch();
        return $result;
    }
    function exec($query) {
        $result=$this->db->exec($query);
        return $result;
    }
    function execp($query) {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}
?>
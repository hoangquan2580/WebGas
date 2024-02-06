<?php
class page{
    function findpage($count,$limit){//20,4
$page=(($count%$limit)==0?($count/$limit):ceil($count/$limit));//celi
return $page;
    }
    function findstart($limit){
if(!isset($_GET['page'])||$_GET['page']==1){
    $strat=0;
}
else{
    $strat=($_GET['page']-1)*$limit;
}
return $strat;
}
}
?>
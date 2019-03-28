<?php
    include("../functions.php");
    header("Content-Type:text/html; charset=utf-8");
    $pid=$_GET['pid'];
//  exit($pid); "<br>";
    $delsql="delete from shop_goods where pid=$pid";
//   exit($delsql);
    delete($delsql,"删除商品","goodslist.php");
?>


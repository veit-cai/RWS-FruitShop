<?php
    require_once("functions.php");
    header("Content-Type:text/html; charset=utf-8");
    $cid=$_GET['cid'];
    $delsql="delete from shop_cart where cid='$cid'";
//  exit($delsql);
    delete($delsql,"删除商品","cart.php");
?>


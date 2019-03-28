<?php
    header("Content-Type:text/html; charset=utf-8");
    require_once '../functions.php';
    if(!(isset($_COOKIE["aid"])&&$_COOKIE["aid"]>0)){
        go_forward("请先登录！","login.php");
    }
?>

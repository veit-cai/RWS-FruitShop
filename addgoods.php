<?php
	header("Content-type: text/html; charset=utf-8");
	require_once("islogin.php");
	require_once("connect.php");
	require_once("functions.php");
	$uid=$_COOKIE['uid'];
	$num=$_POST['num'];
	$pid=$_POST['pid'];
	$sql="select cid,num from shop_cart where user_id ='$uid' and goods_id = '$pid'";
	$result=mysql_query($sql);
	if($result){
		$row = mysql_fetch_assoc($result);
	}	
	$num1=$row['num'];
	if($row['cid'] == ''){
	$insertsql="insert into shop_cart(user_id,goods_id,num)values('$uid','$pid','$num')";
//	exit($insertsql); 
	}else{
		$num +=$num1;
		$insertsql="UPDATE shop_cart SET num = '$num' WHERE user_id = '$uid'";		
	}
	$result=mysql_query($insertsql);
	if($result){
		js_back('添加成功');
	}else{
		js_back("添加失败");
	}
?>
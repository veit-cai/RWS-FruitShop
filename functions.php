<?php
//functions.php
function js_back($msg){
	echo('<script language="javascript">
	alert("'.$msg.'");
	history.back();
	</script>');
	exit();
}
function js_go($msg,$url){
	echo('<script language="javascript">
alert("'.$msg.'");
location.href="'.$url.'";
</script>');
}
function js_alert($msg){
	echo('<script language="javascript">
alert("'.$msg.'");
</script>');
}
function go_back($msg){
	echo('<script language="javascript">alert("'.$msg.'"); history.back();</script>');
	exit;
}
function go_forward($msg,$url){
	echo('<script language="javascript">alert("'.$msg.'"); location.href="'.$url.'";</script>');
	exit();
}
function goto($url){
	echo('<script language="javascript">location.href="'.$url.'";</script>');
	exit();
}


function query($sql){//查询
	require_once("connect.php");
	$result=mysql_query($sql);//表格
	return $result;
}
function update($sql,$msg,$url){//更新：添加/修改/删除
//        exit($sql);
	require_once("connect.php");
	$result=mysql_query($sql);
//        exit($sql);
	if($result){
           go_forward($msg."成功！",$url);
	}
	else{
	   go_back($msg."失败！");
	}
}
function delete($sql,$msg,$url){//删除
    update($sql,$msg,$url);
    
}
function insert ($sql,$msg,$url){//插入
    update($sql,$msg,$url);
}
?>
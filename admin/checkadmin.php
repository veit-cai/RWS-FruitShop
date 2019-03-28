<?php
   header("Content-Type:text/html; charset=utf-8");
   require_once("../connect.php");
   require_once("../functions.php");
   $aname=$_POST['aname'];
   $apwd=$_POST['apwd'];
   $stime = 1;
// exit($aname );
   //2.操作数据表
   $sql="SELECT aid FROM shop_admin WHERE username='$aname' AND PASSWORD=SHA1('$apwd');";
// exit($sql);
   $result=mysql_query($sql);    
   //3.读取结果数据
   $row = mysql_fetch_assoc($result);
   $aid=$row['aid'];
// exit($aid);  
   if($aid>0&&$aid!=""){
	    setcookie("aid",$aid,time()+3600*24*$stime);
	    setcookie("aname", $aname, time()+3600*24*$stime);
	    header("Location:index.php");
   }else{
        js_back("用户名或密码不正确！");
	}
?>


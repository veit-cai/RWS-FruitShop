<?php
   header("Content-Type:text/html; charset=utf-8");
   require_once("connect.php");
   require_once("functions.php");
   $uname=$_POST['uname'];
   $upwd=$_POST['upwd'];
   $stime = 7;
   //2.操作数据表
   $sql="SELECT * FROM shop_user WHERE username='$uname' AND PASSWORD=SHA1('$upwd');";
//           exit($sql);
   $result=mysql_query($sql);    
   //3.读取结果数据
    $row = mysql_fetch_assoc($result);
   $uid=$row['uid'];
//           exit($uid);
   if($uid>0&&$uid!=""){
        setcookie("uid",$uid,time()+3600*24*$stime);
        setcookie("uname", "$uname", time()+3600*24*$stime);
        js_go("登陆成功！","index.php");
   }else{
        js_back("登陆失败！");
   }
?>


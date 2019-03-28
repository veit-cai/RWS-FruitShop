<?php
require_once 'isadmin.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./images/admin-icon.png" />
    <link rel="stylesheet" href="css/style.css">	
    <title>后台首页</title>
</head>

<body>
   	<?php
      	require_once('top.php');
      ?>
    <div class="main">
  	<?php
      	require_once('left.php');
  	?>
	    <div class="item big">
	        <div class="title">后台首页</div>
	        <div class="backg">
		        
		        <dl class="bordered">
		            <dt>活动功能提醒</dt>  
		            <dd>由管理员发起商品活动，设置活动详情</dd>
		            <dd>活动的开展必须进过超级管理审议通过才可以开展</dd>                                
		        </dl>
		        <dl class="bordered">
		            <dt>商品管理提醒</dt>  
		            <dd>由管理员管理商品，设置商品详情信息</dd>
		            <dd>商品上架时间，商品价格等信息录入</dd>                                
		        </dl>
		        <dl class="bordered">
		            <dt>商品推荐提醒</dt>  
		            <dd>由管理员对商品的是否上架做推荐</dd>
		            <dd>控制商品上架数量</dd>                                
		        </dl>
		        <dl class="bordered">
		            <dt>欢迎访问</dt>  
		            <dd>欢迎进入RWS水果商城后台！请从左侧选择一项功能进行操作。</dd>
		        </dl>
	        </div>
	    </div>
    </div>
</body>
</html>
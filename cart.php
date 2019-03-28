<?php
	require_once('islogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/logo-icon.png" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/shopCat.css" />
    <script type="text/javascript" src="./js/jquery.min.js"></script>
      <script type="text/javascript"  src="./js/renji.js"></script>
    <script type="text/javascript"  src="./js/cat.js"></script>
   
    
    <title>RWS-FruitShop>购物车</title>
</head>

<body>
   <?php
		include_once('top.php');
		echo "<center>";
		include_once('right.php');
	?>            
    <!-- 编辑部分开始 -->
    <section class="shopping">
        <div class="sh-top">
            <h3>购物车 —— <span>结算商品</span><a href="list.php">返回</a></h3>
        </div>
        <div class="sh-box">
            <table class="cat">
                <tr class="thead">
                    <td class="cat-pic">图片</td>
                    <td class="cat-shop">商品</td>
                    <td class="cat-unit">单价(￥)</td>
                    <td class="cat-num">数量</td>
                    <td class="cat-sum">金额</td>
                    <td class="cat-handle">操作</td>
                </tr>
               <?php
               	require_once('connect.php');
               	$uid = $_COOKIE['uid'];               	
               	$sql="select cid,user_id,goods_id,num,name,price,thumb from shop_cart inner join shop_goods on goods_id = pid where user_id = '$uid'";
//             	exit ($sql);
               	$result = mysql_query($sql);
//             	echo $result;
			  	 while($row= mysql_fetch_array($result)){
			  	 	$name=$row['name'];
		            $price=$row['price'];
		            $thumb=$row['thumb'];
		            $num=$row['num'];
		  	 	 	$cid=$row['cid'];						           
               	?>
                <tr class="list">
                    <td class="cat-pic over"><input class="check fl" type="checkbox"> <img class="auto-img fl" src="./images/<?php echo $thumb; ?>"
                            alt=""></td>
                    <td class="cat-shop"><?php echo $name; ?></td>
                    <td class="cat-unit">￥<span><?php echo $price; ?></span></td>
                    <td class="cat-num">
                        <span class="cat-btn subtract">-</span>
                        <input type="text" value="<?php echo $num; ?>" class="num " readonly = "readonly" />
                        <span class="cat-btn plus">+</span>
                    </td>
                    <td class="cat-sum">￥<span><?php echo $price; ?></span> </td>
                    <td class="cat-handle"><a onclick="del(<?php echo $cid;?>)"> 移除</a></td>
                </tr>
             <?php } 
             	?>        
            </table>
            <div class="box-foot over">
                <div class="fl">
                    <input type="checkbox" class="allselect">
                    <span class="allCheck">全选</span>
                    <span class="sh-Clear">删除所有商品</span>
                </div>  
                <div class="fr total">合计： <span class="suns">￥<u>0</u></span><strong>结算</strong></div>
                
            </div>
        </div>
    </section>
	</center>

    <!-- 尾部固定结束部分 -->
   <?php
		require_once('bottom.php');
	?>
    
</body>
</html>
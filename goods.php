<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/logo-icon.png" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/details.css" />
    <title>RWS-FruitShop>商品详情</title>
</head>

<body>
	<?php
		include_once('top.php');
	?>

    <!--<center>-->
    <!--粘性定位按钮-->
    <?php
	include_once('top.php');
	echo'<center>';
	include_once('right.php');		
	?>        

    <!-- 编辑部分开始 -->
    <section class="details">
        <div class="headline">
            <a href="index.php">网站首页</a><span>>></span><a href="list.php">商品列表</a><span>>></span><span>商品详情</span>
        </div>
      	<?php
		    $pid=$_GET['pid'];
		   require_once('functions.php');
		    
		    if($pid==""){
		    	goto('index.php');
		    }
		    //1.连接数据库
		   require_once('connect.php');
		    //2.操作数据库表(查询 select,修改update，插入 insert ，删除 delete)
		    $sql="SELECT * FROM shop_goods WHERE pid=$pid";
//				    exit($sql);
		    $result=mysql_query($sql);
		    
		    //3.读取结果数据
		    $row= mysql_fetch_array($result); 
		    $sn=$row['sn'];
		    $name=$row['name'];
		    $price=$row['price'];
		    $stock=$row['stock'];
		    $thumb=$row['thumb'];
		    $album=$row['album'];
		    $cost=$row['cost'];
		   // echo "{$id} {$sn} {$name} {$price} {$stock} {$thumb} {$desc} <br>";
	    ?>
	    <form action="addgoods.php" method="post">
	        <div class="shop over">
	            <div class="shop-pic fl"><img class="auto-img" src="images/<?php echo $thumb; ?>" alt=""></div>
	            <div class="tab fr">
	                <h3><?php echo $name;?></h3>
	                <table>
	                    <tr class="col">
	                        <th>售 价：</th>
	                        <td>￥<?php echo $price;?><span class="price">￥<?php echo $cost;?></span>
	                        </td>
	                    </tr>
	                    <tr class="col">
	                        <th>商品编号：</th>
	                        <td><?php echo $sn?></td>
	                        <input type="hidden" name="pid" value="<?php echo $pid;?>" />
	                    </tr>
	                    <tr class="col">
	                        <th>累计销量：</th>
	                        <td>1000</td>
	                    </tr>
	                    <tr class="col">
	                        <th>评 价：</th>
	                        <td>1000</td>
	                    </tr>
	                    <tr class="col">
	                        <th>配 送 至：</th>
	                        <td>汕头（免运费）</td>
	                    </tr>
	                    <tr>
	                        <th>购买数量：</th>
	                        <td>
	                            <input type="button" value="-" class="cnt-btn minus" />
	                            <input type="text" value="1" name="num"  class="num-btn"/>
	                            <input type="button" value="+" class="cnt-btn plus"  />（库存：<?php echo $stock;?>）</td>
	                    </tr>
	                    <tr>
	                        <td colspan="2" class="button">
	                            <a href="#"  class="btn">立即购买</a>
	                            <button type="submit"  class="btn" style="width: 120px;">加入购物车</button></td>
	                    </tr>
	                </table>
	            </div>
            </div>
		</form>
            <!-- 详情内容  -->
        <div class="matter">
            <h3>商品详情 :</h3>
            <div class="matter-pic">
                <img class="auto-img" src="./images/<?php echo $album;?>" alt="">                        
            </div>
        </div>        
    	</section>
    	</center>
    <!-- 尾部固定结束部分 -->
   <?php
		require_once('bottom.php');
	?>
</body>
<script type="text/javascript">
	var num = document.querySelector('.num-btn');
	var plus = document.querySelector('.plus');
	var minus = document.querySelector('.minus');
	console.log(plus)
	plus.onclick = function(){
		num.value = +num.value +1;
	}
	minus.onclick = function(){
		num.value = num.value <= 1 ? 1 : num.value - 1;
	}
</script>
</html>
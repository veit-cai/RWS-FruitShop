<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/logo-icon.png" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/list.css">
    <script src="js/renji.js"></script>
    <title>RWS-FruitShop>商品列表</title>
</head>

<body>
   	<?php
		include_once('top.php');
		echo"<center>";
		include_once('right.php');
	?>
    <!-- 编辑部分开始 -->
    <section class="list">
            <div class="headline">
                    <a href="index.php">网站首页</a><span>>></span><a href="list.php">商品列表</a><span></span>
            </div>
            <div class="boxnin">
                <div class="fl advertising"><img class="auto-img" src="./images/ad1.jpg" alt=""></div>
                <div class="fr merchandise">
                	<?php						        
			    	 require_once('connect.php');					       
			        $sql="SELECT * FROM shop_goods WHERE on_sale='yes';";
			        $result=mysql_query($sql);			        
			        //3.读取结果数据
			        while($row= mysql_fetch_array($result)){
			            $pid=$row['pid'];
			            $name=$row['name'];
			            $price=$row['price'];
			            $thumb=$row['thumb'];
		             	$cost=$row['cost'];
			          // echo "{$id} {$name} {$price} {$thumb} <br>";
			         ?>
                    <ul>
                        <li>
                            <div>
                                <a  href="goods.php?pid=<?php echo $pid; ?>"><div class="pic"><img class="auto-img" src="images/<?php echo $thumb; ?>" alt=""></div></a>
                                <i class="node"><?php echo $name;?></i>
                                <div class="text">现价<span>￥</span><i class="moneny"><?php echo $price; ?></i><span class="no">￥<i><?php echo $cost; ?></i> </span></div>
                            </div>
                        </li>
                         <?php
				        }
				        ?> 
                    </ul>                       
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
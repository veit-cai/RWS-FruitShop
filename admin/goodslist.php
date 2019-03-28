<?php
     require_once('../connect.php');
      require_once('isadmin.php');
     //2.操作数据库表(查询 select,修改update，插入 insert ，删除 delete)
    $page=isset($_GET['page'])?$_GET['page']:1;
    $categoryid= isset($_GET['categoryid'])?$_GET['categoryid']:0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="./images/admin-icon.png" />
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
	        <div class="title">商品列表</div>
	        <div class="top-button">
	            <a href="goodsadd.php" class="light">添加商品</a>
	        </div>           
	        <div class="list-goods">
	            <table>
	                <tr>
	                    <th width="600" >商品名称</th>
	                    <th width="100">库存</th>
	                    <th width="100">上架</th>	                 
	                    <th width="100">操作</th>
	                </tr>
					 <?php
	
	                $psize=5;
	                $start=($page-1)*$psize;
	                $pre=$page>1?$page-1:1; 
	                
	                $selectcount="select count(pid) from shop_goods";
	                $resultcount=  mysql_query($selectcount);
	                $rowcount=mysql_fetch_row($resultcount);
	                $total=$rowcount[0];
	                $maxpage=ceil($total/$psize);
	                $next=$page<$maxpage?$page+1:$maxpage;  
	                if($pid>0){
	                   $selectsql="SELECT *  FROM shop_goods where pid=$pid  limit $start,$psize;"; 
	                }else{
	                   $selectsql="SELECT *  FROM shop_goods  limit $start,$psize;"; 
	                }
	               $result0=mysql_query($selectsql);
	                //3.读取结果数据
	               while($row=  mysql_fetch_array($result0)){
	                $pid=$row['pid'];
	                $good_name=$row['name'];
	                $stock=$row['stock'];
	                $on_sale=$row['on_sale'];
	                $recommend=$row['recommend'];
	//                  exit($pid);
	               ?>
	            <tr>
					<td  width="600"><?php echo $good_name;?></td>
	                <td width="100"><?php echo $stock;?></td>
					<td width="100"><?php echo $on_sale;?></td>
	                <td ><a class="alter" href="goodsedit.php?pid=<?php echo $pid;?>">修改</a>
	                    <a class="del" href="goodsdel.php?pid=<?php echo $pid;?>" class="act-del" data-id="52">删除</a>
	                </td>
	            </tr>	            
	                <?php
	                }
	                ?>	
	            </table>
	        </div>
	        <div class="pagelist">
			     <a class="num" href="goodslist.php?page=1&categoryid=<?php echo $pid;?>">首页</a> 
			     <a class="num" href="goodslist.php?page=<?php echo($pre);?>&categoryid=<?php echo $pid;?>">上一页</a> 
			     <a class="num" href="goodslist.php?page=<?php echo($next);?>&categoryid=<?php echo $pid;?>">下一页</a> 
			     <a class="num" href="goodslist.php?page=<?php echo($maxpage);?>&categoryid=<?php echo $pid;?>">末页</a> 
			</div>
	 	</div>
    </div>
</body>
</html>
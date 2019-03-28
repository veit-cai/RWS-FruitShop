<?php
	 require_once('../connect.php');
      require_once('isadmin.php');  
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
	<style type="text/css">
		img{
			max-width: 250px;
			max-height: 250px;
		}
	</style>
</head>

<body>
 	<?php
      	require_once('top.php');
    ?>
    <div class="main">    	
  	<?php
      	require_once('left.php');
    ?>
        <form action="goodsmodify.php" method="post"  enctype="multipart/form-data">            
            <div class="big item">
                <div class="title">修改商品</div>
                <div class="top-button">
                    <a href="goodslist.php" class="light">返回商品列表</a>
                </div>
                <div class="list">
				  	<?php
				  		$pid=$_GET['pid'];
				  		if($pid==""||$pid<=0){
				  			echo '<script type="text/javascript">window.location.href="index.php"</script>';
				  		}else{
				  			$cgsql="select * from shop_goods where pid=$pid";
//				            exit($cgsql);
				            $result1=  mysql_query($cgsql);
				            if(!$result1){
				            	header("Location:index.php");
				            }else{
				            	$row1= mysql_fetch_array($result1);
					            $name=$row1['name'];
					            $sn=$row1['sn'];
					            $price=$row1['price'];
					            $stock=$row1['stock'];
					            $on_sale=$row1['on_sale'];					       
					            $thumb=$row1['thumb'];
					            $cost=$row1['cost'];
			            	}
			  			}
			        ?>
                    <table>
                        <tbody>
                            <tr>
                                <td>商品名称：</td>
                                <td>
                                	<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                                    <input type="text" name="name" value="<?php echo $name; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>商品编号：</td>
                                <td>
                                    <input type="text" name="sn" value="<?php echo $sn; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>商品价格：</td>
                                <td>
                                    <input type="text" name="price"  value="<?php echo $price; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>商品库存：</td>
                                <td>
                                    <input type="text" name="stock" value="<?php echo $stock; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>原价：</td>
                                <td>
                                    <input type="text" name="cost" value="<?php echo $cost; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>是否上架：</td>
                                <td>
                                    <select name="on_sale">
                                        <option value="yes">是</option>
                                        <option value="no">否</option>
                                    </select>
                                </td>
                            </tr>
                         	<tr><td>修改图片：</td><td><input type="file" name="thumb"  /></td></tr>
                         	<input type="hidden" name="pic" value="<?php echo $thumb; ?>" />
							<tr><td>当前图片：</td>
								<td><img src="../images/<?php echo $thumb; ?>"></td>									
							<tr>							
                        </tbody>
                   </table>                    
                    <div class="btn"><input type="submit" value="保存修改"></div>
                </div>               
            </div>
        </form>
    </div>
</body>

</html>
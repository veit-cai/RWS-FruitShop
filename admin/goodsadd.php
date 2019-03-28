<?php
require_once ('isadmin.php');
require_once ('../connect.php')
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
	    <form action="goodsinse.php" method="post"  enctype="multipart/form-data">            
	        <div class="big item">
	            <div class="title">商品添加</div>
	            <div class="top-button">
	                <a href="goodslist.php" class="light">商品列表</a>
	            </div>
	            <div class="list">
			  	<?php
					$uptypes = array(
					    'image/jpg',
					    'image/jpeg',
					    'image/png',
					    'image/pjpeg',
					    'image/gif',
					    'image/bmp',
					    'image/x-png'
					);				  
				?>
		            <table>
		                <tbody>
		                    <tr>
		                        <th>商品名称：</th>
		                        <td>
		                            <input type="text" name="name">
		                        </td>
		                    </tr>
		                    <tr>
		                        <th>商品编号：</th>
		                        <td>
		                            <input type="text" name="sn">
		                        </td>
		                    </tr>
		                    <tr>
		                        <th>商品价格：</th>
		                        <td>
		                            <input type="text" name="price">
		                        </td>
		                    </tr>
		                    <tr>
		                        <th>商品库存：</th>
		                        <td>
		                            <input type="text" name="stock">
		                        </td>
		                    </tr>
		                     <tr>
		                        <th>原价：</th>
		                        <td>
		                            <input type="text" name="cost">
		                        </td>
		                    </tr>
		                    <tr>
		                        <th>是否上架：</th>
		                        <td>
		                            <select name="on_sale">
		                                <option value="yes">是</option>
		                                <option value="no">否</option>
		                            </select>
		                        </td>
		                    </tr>
		                    <tr>
		                        <th>上传图片：</th>
		                        <td>
		                           <input type="file" name="thumb">
		                           	<br>上传类型为:<?= implode(', ', $uptypes) ?>  
		                        </td>
		                    </tr>		                     
		                </tbody>
		            </table>                    
	            	<div class="btn"><input type="submit" value="添加商品"></div>
	            </div>               
	        </div>
	    </form>
	</div>
</body>
</html>
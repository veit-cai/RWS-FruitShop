<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>RWS-FruitShop>首页</title>
    <script src="https://cdn.bootcss.com/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="icon" href="./images/logo-icon.png" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/register.css" />    
</head>

<body>
     <?php
		include_once('top.php');
		echo'<center>';
		include_once('right.php');
	?>
		<div class="bg"></div>
		<div class="banner">
			<div class="banner-pic">
				<div class="pic">
					<img class="auto-img cennt" src="images/pic1.jpg"/>
					<img class="auto-img imge" src="images/pic2.jpg"/>
					<img class="auto-img imge" src="images/pic3.jpg"/>
				</div>
			</div>
			<div class="banner-txt">
				<div class="text fl">来杯鲜榨果汁，清爽一夏。</div>
				<div class="tu fr tuu1"><img class="auto-img" src="images/pic1.jpg"/></div>
				<div class="tu fr tuu2"><img class="auto-img" src="images/pic2.jpg"/></div>
				<div class="tu fr tuu3"><img class="auto-img" src="images/pic3.jpg"/></div>
			</div>
		</div>      

        <!--新鲜水果分类-->
        <section class="zc">
            <div class="zc-hear">
                <div class="user"> <b>会员注册页</b></div>
            </div>
            <div class="mesbox">
                <h3>会员注册!</h3>
                <form action="adduser.php" method="post">
                    <table class="register">
                        <tr>
                            <th>用户名 <i>*</i></th>
                            <td><input type="text" name="uname"  required /></td>
                            <td class="p">用户名请用 英文字母 下划线或数字</td>
                        </tr>
                        <tr>
                            <th>密码 <i>*</i></th>
                            <td><input type="password" name="upwd" id="pwd" required/></td>
                            <td class="p">不少于6字符，建议用英文加数字或符号</td>
                        </tr>
                        <tr>
                            <th>确认密码 <i>*</i></th>
                            <td><input type="password" name="Rupwd" required /></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><input class="button" type="submit" value="提  交" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

    </center>

	<?php
		require_once('bottom.php');
	?>
	<script type="text/javascript">
			//轮播图			
		var bannerpic = document.querySelector('.banner-pic')
		var pic = document.querySelectorAll('.pic>img');
		var btn = document.querySelectorAll('.banner-txt>.tu');
		var zore = 0;
	
		var timers = window.setInterval(chang,2000);
		function chang(){
			var par = zore;
			zore++
			if (zore == pic.length) {
				zore = 0;
			}
			pic[zore].className = 'cennt auto-img';
			pic[par].className = 'imge auto-img';
		}
	
		for(var i=0;i<btn.length;i++){
			btn[i].onmouseover=function(){
				window.clearInterval(timers);
				for(var i=0;i<btn.length;i++){
					if(btn[i]==this){
						console.log(this)
						zero=i;
					    pic[i].className="cennt auto-img";
					}else{
						pic[i].className='imge auto-img';
					}
		        }
		   }
		   btn[i].onmouseout = function(){
				timers = window.setInterval(chang,2000)
			}
		}            
	</script>
</body>

</html>
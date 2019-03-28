<!--粘性定位按钮-->
<div class="icon">
	<li><a href="cart.php">购物车</a></li>
	<li class="login">
		<?php
			 if(isset($_COOKIE['uid'])){
		?>
		<span class="reg">
			<p>用户名:<?php echo $_COOKIE['uname'];?></p>
			<a href="logout.php">[注销]</a>						
		</span>
		<?php
		}else{
		?>
		<span>
			<p>终于等到您了~赶紧登录吧！</p>
			<button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">

				<img src="images/login.png" style="padding-right: 30px"/>
		</span>
		<?php
		}
		?>
		
	</li>
	<li><a href="register.php">注册</a></li>
	<li><a id="service" style="cursor: pointer;">在线服务</a></li>
	<a href="#gotop"></a>
</div>
<!-- 客服弹窗 -->
<div class="chat-box" id="chat">
	<strong class="str"> 在线客服</strong>
	<div id="chatMsg" class="chat-msg">
	</div>
	<div class="user-info">
		<textarea id="userInfo" class="txt"></textarea>
	</div>
	<div id="send" class="btn">发送</div>
	<div id="ends" class="btn">关闭</div>
</div>
<!-- 登录弹窗 -->
<div id="id01" class="modal">
	<form class="modal-content animate" action="checkuser.php" method="post"> 
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<div class="move">
			</div>
		</div>
		<div class="container">
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="upwd" required>

			<button type="submit">登陆</button>
			<input type="checkbox" checked="checked"> 记住我
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

		</div>
	</form>
</div>
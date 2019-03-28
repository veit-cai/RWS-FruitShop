<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>RWS-FruitShop>首页</title>
	<script src="https://cdn.bootcss.com/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link rel="icon" href="./images/logo-icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/index.css" />
	<link rel="stylesheet" href="./css/reset.css" />
	<link rel="stylesheet" href="./css/reset.css" />
	<script src="./js/renji.js"></script>
</head>

<body>
	<!-- 头部导航条 -->
	<?php
		include_once('top.php');
	?>
	<center>		

		<!--中部轮播图-->
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
	<?php
		include_once('right.php');
	?>
	<!--新鲜水果分类-->
	<section class="fresh">
		<div class="fbox">
			<h3>
				<span>鲜果分类 /</span>
				<span>Fresh fruit classification</span>
			</h3>
			<p>一天一苹果，医生远离我！最好的季节 遇见最好的水果，健康水果，美味到家！</p>
			<ul class="fruit-Fresh">
				<li><a href="">
						<p>葡萄</p>
						<p>Grape</p>
					</a></li>
				<li><a href="">
						<p>山竹</p>
						<p>Mangosteen</p>
					</a></li>
				<li><a href="">
						<p>牛油果</p>
						<p>Avocado</p>
					</a></li>
				<li><a href="">
						<p>猕猴桃</p>
						<p>Kiwifruit</p>
					</a></li>
				<li><a href="">
						<p>百香果</p>
						<p>Passion fruit</p>
					</a></li>
			</ul>
		</div>
	</section>
	<!-- 当季鲜果 -->
	<section class="fresh colorb">
		<div class="fbox">
			<h3>
				<span>当季鲜果 /</span>
				<span>Seasonal fresh fruit</span>
			</h3>
			<p>以下推荐产品都是今天刚采摘的最新水果，保证产品新鲜，欢迎大家前来选购！</p>
			<div class="product">
				<div class="one">
					<div class="on apple">
						<div class="fl"><a href="list.php"><img src="./images/big1.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果苹果</span>
							<em>鲜</em>
							<strong><b>￥20</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a> </div>
							</div>
						</div>
					</div>
					<div class="on passion">
						<div class="fl"><a href="list.php"><img src="./images/big2.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果百香果</span>
							<em>鲜</em>
							<strong><b>￥10</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a></div>
							</div>
						</div>
					</div>
					<div class="on kiwi">
						<div class="fl"><a href="list.php"><img src="./images/big3.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果奇异果</span>
							<em>鲜</em>
							<strong><b>￥15</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="two">
					<em>鲜</em>
					<a href="list.php"><img src="./images/big4.png" alt=""></a>
					<span>当季鲜果牛油果</span>
					<strong><b>￥20</b>/kg</strong>
					<div class="b-icon">
						<ul class="fl">
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="fr"><a href="list.php"></a></div>
					</div>

				</div>
				<div class="three one">
					<div class="on kiwi">
						<div class="fl"><a href="list.php"><img src="./images/big5.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果柠檬</span>
							<em>鲜</em>
							<strong><b>￥12</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a></div>
							</div>
						</div>
					</div>
					<div class="on kiwi">
						<div class="fl"><a href="list.php"><img src="./images/big6.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果石榴</span>
							<em>鲜</em>
							<strong><b>￥18</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a></div>
							</div>
						</div>
					</div>
					<div class="on kiwi">
						<div class="fl"><a href="list.php"><img src="./images/big7.png" alt=""></a></div>
						<div class="fr smafr">
							<span>当季鲜果葡萄</span>
							<em>鲜</em>
							<strong><b>￥26</b>/kg</strong>
							<div class="b-icon">
								<ul class="fl">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="fr"><a href="list.php"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<!-- 相关介绍、我们是谁、优势 -->
	<section class="introduce">
		<!-- 我们是谁 -->
		<div class="ours over">
			<span class="our-pic fl">
				<img class="auto-img" src="./images/mango.jpg" alt="">
				<img class="auto-img frame" src="./images/frame.png" alt="">
			</span>
			<div class="our-text fr">
				<h3>我们是谁 ？</h3>
				<p>xx品连锁有限公司自1997年创立以来，
					始终秉承“新鲜才好吃”的经营理念，致力于打造专业的水果供应链公司、专业的水果品牌运营商。
					目前已拥有以江、浙、沪、皖、渝为中心1100余家门店，5大运营品牌，6大恒温、冷藏配送中心。
					通过优质的果品质量，一流的客户服务，积极承担社会责任，争创世界水果第一连锁。
				</p>
				<a href="#">查看详情 ></a>
			</div>
		</div>
		<!-- 我们的优势 -->
		<div class="advantage over">
			<span class="age-pic fl">
				<img class="auto-img" src="./images/litchi.jpg" alt="">
			</span>
			<div class="age-text fr">
				<h3>我们的优势</h3>
				<p>
					围绕向越来越多的人提供最好吃的和性价比极高的水果，
					致力于水果产业链和水果专营连锁业态的发展，致力于水果善知识和文化的创造与传播。
					到2030年发展成为在全球拥有百万亩以上种植基地世界第一的果业公司！
				</p>
				<img class="age-frame" src="./images/frame1.png" alt="">
			</div>
			<div class="age-icon fr">
				<div class="label fl">
					<span>全球精选</span>
					<span>一站式新鲜购物方案</span>
				</div>
				<div class="label fl">
					<span>多仓直发</span>
					<span>有次日送达配送服务</span>
				</div>
				<div class="label fl">
					<span>源头直采</span>
					<span>精选正宗品质好蔬果</span>
				</div>
				<div class="label fl">
					<span>天天低价</span>
					<span>会员专属优惠购不停</span>
				</div>
			</div>
		</div>
	</section>

		<!-- 健康资讯 -->
	<section class="fresh">
		<div class="fbox">
			<h3>
				<span>健康资讯 /</span>
				<span>Health information</span>
			</h3>
			<p>科学的食物搭配能使营养更全面,味道更鲜美,更有利于健康</p>
			<div class="health over">
				<div class="health-pic fl"><img class="auto-img" src="./images/kiwi.jpg" alt=""></div>
				<div class="health-text fr">
					<div class="inner">
						<a href="#">水果入菜有营养吗？看看营养专家怎么说</a>
						<p>凡是好吃的水果，必须有一个先决条件：自然生长至充分成熟！
							只有这样的果实，其积累的营养成分才足够，其固有的风味才会形成，才会好吃！自然生长至充分...
						</p>
					</div>
					<div class="inner">
						<a href="#">国人人均水果摄入量低这样吃水果防癌还减肥</a>
						<p>国人人均水果摄入量低这样吃水果防癌还减肥国人人均水果摄入量低这样吃水果防癌
							还减肥国人人均水果摄入量低这样吃水果防癌还减肥国人人均水果摄入量低这样....
						</p>
					</div>
					<div class="inner">
						<a href="#">免疫力差怎么办？可多吃这6种水果</a>
						<p>免疫力差怎么办？可多吃这6种水果免疫力差怎么办？可多吃这6种水果免疫力差怎么办？
							可多吃这6种水果免疫力差怎么办？可多吃这6种水果免疫力差怎么办？可多....
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	</center>
	<!-- 尾部结束 -->
	<?php
		require_once('bottom.php');
	?>
</body>

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
</html>
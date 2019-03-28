<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="./images/logo-icon.png"  />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/reset.css" />
    <script src="js/renji.js"></script>
    <title>RWS-FruitShop>关于我们</title>
</head>

<body>
    <?php
		include_once('top.php');
		echo'<center>';
		include_once('right.php');
	?>
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

    <section>
        <div class="about">
            <h2>
                <span class="zw">关于我们 /</span>
                <span class="yw">About us</span>
            </h2>
            <h3>一天一苹果，医生远离我！最好的季节 遇见最好的水果，健康水果，美味到家！</h3>
            <div class="text">
                <p>xx品连锁有限公司自1997年创立以来，始终秉承“新鲜才好吃”的经营理念，致力于打造专业的水果供应链公司、专业的水果品牌运营商。目前已拥有以江、浙、沪、皖、渝为中心1100余家门店，5大运营品牌，6大恒温、冷藏配送中心。通过优质的果品质量，一流的客户服务，积极承担社会责任，争创世界水果第一连锁。</p>
                <p>xx已与全球38个水果种植基地深度合作，直接参与基地优培、水果优选、精细储运各环节。成熟采摘、冷链配送，“从枝头鲜到舌头”，为消费者提供最新鲜、最好吃的全球果品。全程冷链，数控6大储运仓。现已拥有：华中、华东、上海、西南、华中二仓、华东二仓6大水果专业储运仓</p>
            </div>
            <div class="pic-box">
                <div class="pic"><img src="images/351795_1505282894.jpg" alt=""></div>
                <div class="box">
                    <strong>企业宗旨</strong>
                    <p>以精品服务赢取后勤社会化无限商机以服务创新开启现代 服务业崭新模式 </p>
                    <strong>核心宗旨</strong>
                    <p>诚信、责任、优质、创新</p>
                    <strong>经营理念</strong>
                    <p>以诚信赢取客户，以精品树品牌，以管理出效益，以创新促发展</p>
                    <strong>企业价值观</strong>
                    <p>让天下人享受水果好生活；提高员工生活品质，创造更大发展平台</p>
                </div>
            </div>
        </div>
    </section>
    
    </center>
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
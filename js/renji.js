window.onload = function () {



	var data = [
		{
			user: '你好',
			robot: '亲！您好，欢迎光临本店'
		},
		{
			user: '包邮么',
			robot: '本店多有商品都是免邮费的哦'
		}
	];

	//输入文本框
	var userInfo = document.getElementById('userInfo');

	//获取信息盒子
	var chatMsg = document.getElementById('chatMsg');

	//为发送按钮绑定点击事件
	var send = document.getElementById('send');
	send.onclick = function () {

		//获取用户输入的内容
		var userInfoText = userInfo.value;

		if (userInfoText == undefined || userInfoText.trim() == '') {
			return;
		}

		//创建用户信息盒子
		var rightBox = document.createElement('div');
		rightBox.className = 'right';
		var rightBoxMsg = document.createElement('div');
		rightBoxMsg.className = 'right-msg msg';
		rightBoxMsg.textContent = userInfoText;

		rightBox.appendChild(rightBoxMsg);

		chatMsg.appendChild(rightBox);


		//创建机器人信息盒子
		var robotBox = document.createElement('div');
		robotBox.className = 'left';
		var robotBoxMsg = document.createElement('div');
		robotBoxMsg.className = 'left-msg msg';
		//内容
		for (var i = 0; i < data.length; i++) {
			if (data[i].user == userInfoText) {
				robotBoxMsg.textContent = data[i].robot;
				break; //打断循环
			}
		}

		if (!robotBoxMsg.textContent) {
			robotBoxMsg.textContent = '请骚等片刻，店家正在回复';
		}

		robotBox.appendChild(robotBoxMsg);

		setTimeout(function () {
			chatMsg.appendChild(robotBox);

		}, 1000)

		//清除用户输入的信息
		userInfo.value = '';
	}

	var ends = this.document.getElementById('ends');
	ends.onclick = function(){
		this.parentNode.style.display = 'none'
	}

	var service = this.document.getElementById('service');
	service.onclick = function(){
		var chat = document.getElementById('chat')
		chat.style.display = 'block'
	}
	
	
	

}
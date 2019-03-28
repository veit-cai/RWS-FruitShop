 function del(data) {
		if(confirm('确定要删除吗？')){
			window.location.href="cartdel.php?cid="+data;  
		}
}
 window.onload = function (){
    // 获取数量
    // var num = document.querySelector('.num');
    
    function calculate (parent, num){
        // 获取单价
        var price = parent.querySelector('.cat-unit>span');
        // 获取总价
        var total = parent.querySelector('.cat-sum>span');
        // 计算总价
        total.textContent = price.textContent * num.value;
    }
    
    //页面加载完成后计算单件物品总价
    var cc = document.querySelectorAll('.list')
    var shu = document.querySelectorAll('.num');
    for (var v = 0; v < cc.length; v++){
    	calculate (cc[v], shu[v])
    }
   
    // 点击添加数量
    var plus = document.querySelectorAll('.plus')
    for (var i = 0 ; i < plus.length ; i++){
        plus[i].onclick = function(){
            var parent = this.parentNode.parentNode;
            console.log(parent)
            var num = parent.querySelector('.num');
            num.value = +num.value + 1;
            //计算当前商品总价
            calculate(parent, num);
            // 计算最后总价
            sunes();
        }
    }
    // 点击减少数量
    var subtract = this.document.querySelectorAll('.subtract')
    for (var j = 0 ; j < subtract.length ; j++){
        subtract[j].onclick = function(){
            var parent = this.parentNode.parentNode;
            var num = parent.querySelector('.num');
            num.value = num.value <= 1 ? 1 : num.value - 1;
            //计算当前商品总价
            calculate(parent, num);
            // 计算最后总价
            sunes();
        }
    }

    // 删除商品
    var deleat = document.querySelectorAll('.cat-handle');
//  for( var k = 0 ; k < deleat.length; k++){
//      deleat[k].onclick = function(){
//          this.parentNode.remove();
//
//          // 计算最后总价
//          sunes();
//      }
//  }




    // 删除所有商品
    var allList = document.querySelectorAll('.list');
    var clears = document.querySelector('.sh-Clear');
    clears.onclick = function(){
        for(var g = 0 ; g < allList.length ; g++){
            allList[g].remove ();
        }
        var gif = document.createElement('div');
        gif.className = 'nullcat';
        gif.textContent = '您的购物车空间如也'
        document.querySelector('.thead').appendChild(gif);

        // 计算最后总价
        sunes();
    }

    //获取所有单选复选框
	var simpl = document.querySelectorAll('.check');
	for (var m = 0; m < simpl.length; m++) {
		simpl[m].onchange = function () {
	         // 计算最后总价
	         sunes();
		}
	}

    // 全选
    var allselect = document.querySelector('.allselect');
    allselect.onchange = function () {
        //获取所有单选复选框
        var simples = document.querySelectorAll('.check');
        for (var a = 0; a < simples.length; a++) {
            simples[a].checked = this.checked;
        }
        // 计算最后总价
        sunes();
        // allselect.disabled = !this.checked;
    }

 
    // 计算总价
    function sunes (){
        var zore = 0;
        var allList = document.querySelectorAll('.list')
        for (var g = 0; g < allList.length; g++){
            var checkee = allList[g].querySelector('.check') ;
        //     console.log(check)
            if(checkee.checked){
                var currentTotal = allList[g].querySelector('.cat-sum>span');
                console.log(currentTotal)
				zore += Number(currentTotal.textContent);
            }
        }
        document.querySelector('.suns>u').textContent = zore;
    }
}
/****************************根据据您挑选的商品，当当为您推荐部分的显示和隐藏*************************/
function shopping_commend_show(imgObj)
{
	//获取id=shopping_commend_sort的对象
	var divObj = document.getElementById("shopping_commend_sort");
	//条件判断：判断display的值，如果为block，则改为none；如果为none，改为block
	if(divObj.style.display=="block")
	{
		divObj.style.display = "none";
		imgObj.src = "images/shopping_arrow_down.gif";
	}else
	{
		divObj.style.display = "block";
		imgObj.src = "images/shopping_arrow_up.gif";
	}
}

/**************************************购物车模块****************************************/
//表格中行的背景色：鼠标放上变#FFF，鼠标移出变#fefbf2
function productOver(trObj)
{
	trObj.style.backgroundColor = "yellow";
}
function productOut(trObj)
{
	trObj.style.backgroundColor = "white";
}

//删除商品：删除行
function deleteProduct(id)
{
	//是否真的要删除该产品
	if(window.confirm("你确定要删除吗？"))
	{
		//父节点.removeChild(子节点)
		//获取当前行的id值
		var trObj = document.getElementById(id);
		//删除tr节点
		trObj.parentNode.removeChild(trObj);
		//商品统计
		productCount();
	}
}



//商品计算：商品总金额、商品总积分、共节省的总金额
function productCount()
{
	//变量初始化
	var total = 0;
	var jiesheng = 0;
	var jifen = 0;
	//获取id=shopList的表格对象
	var tableObj = document.getElementById("shopList");
	//获取所有<tr>构成的数组对象
	var trArr = tableObj.rows;
	//循环所有的行
	for(var i=0;i<trArr.length;i++)
	{
		//获取每一行中的所有单元格
		var tdArr = trArr[i].cells;
		//取出市场价和当当价
		var price1 = tdArr[2].innerHTML.substr(1); //市场价
		// ￥32.00——>substr(1)——> "32.00"
		var price2 = parseFloat(tdArr[3].innerHTML.substr(1)); //当当价
		//￥18.90 (59折)——>substr(1)——>"18.90(59折)"——>parseFloat("18.90(59折)")——>18.9
		//取出数量
		var count = tdArr[4].firstChild.value;
		//商品总计：当当价 * 数量
		total += price2 * count;
		//总节省：(市场价-当当价)*数量
		jiesheng += (price1-price2)*count;
		//总积分：单品积分*数量
		jifen += tdArr[1].innerHTML * count;
	}
	//将结果写入到对应的id元素中去
	document.getElementById("total").innerHTML = "&yen;"+total.toFixed(2);
	document.getElementById("jiesheng").innerHTML = "&yen;"+jiesheng.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
}
//网页加载完成，调用价格统计函数，该函数不能带括号，因为是传地址，而不是传数值
window.onload = productCount;

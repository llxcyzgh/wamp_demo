/****************************���ݾ�����ѡ����Ʒ������Ϊ���Ƽ����ֵ���ʾ������*************************/
function shopping_commend_show(imgObj)
{
	//��ȡid=shopping_commend_sort�Ķ���
	var divObj = document.getElementById("shopping_commend_sort");
	//�����жϣ��ж�display��ֵ�����Ϊblock�����Ϊnone�����Ϊnone����Ϊblock
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

/**************************************���ﳵģ��****************************************/
//������еı���ɫ�������ϱ�#FFF������Ƴ���#fefbf2
function productOver(trObj)
{
	trObj.style.backgroundColor = "yellow";
}
function productOut(trObj)
{
	trObj.style.backgroundColor = "white";
}

//ɾ����Ʒ��ɾ����
function deleteProduct(id)
{
	//�Ƿ����Ҫɾ���ò�Ʒ
	if(window.confirm("��ȷ��Ҫɾ����"))
	{
		//���ڵ�.removeChild(�ӽڵ�)
		//��ȡ��ǰ�е�idֵ
		var trObj = document.getElementById(id);
		//ɾ��tr�ڵ�
		trObj.parentNode.removeChild(trObj);
		//��Ʒͳ��
		productCount();
	}
}



//��Ʒ���㣺��Ʒ�ܽ���Ʒ�ܻ��֡�����ʡ���ܽ��
function productCount()
{
	//������ʼ��
	var total = 0;
	var jiesheng = 0;
	var jifen = 0;
	//��ȡid=shopList�ı�����
	var tableObj = document.getElementById("shopList");
	//��ȡ����<tr>���ɵ��������
	var trArr = tableObj.rows;
	//ѭ�����е���
	for(var i=0;i<trArr.length;i++)
	{
		//��ȡÿһ���е����е�Ԫ��
		var tdArr = trArr[i].cells;
		//ȡ���г��ۺ͵�����
		var price1 = tdArr[2].innerHTML.substr(1); //�г���
		// ��32.00����>substr(1)����> "32.00"
		var price2 = parseFloat(tdArr[3].innerHTML.substr(1)); //������
		//��18.90 (59��)����>substr(1)����>"18.90(59��)"����>parseFloat("18.90(59��)")����>18.9
		//ȡ������
		var count = tdArr[4].firstChild.value;
		//��Ʒ�ܼƣ������� * ����
		total += price2 * count;
		//�ܽ�ʡ��(�г���-������)*����
		jiesheng += (price1-price2)*count;
		//�ܻ��֣���Ʒ����*����
		jifen += tdArr[1].innerHTML * count;
	}
	//�����д�뵽��Ӧ��idԪ����ȥ
	document.getElementById("total").innerHTML = "&yen;"+total.toFixed(2);
	document.getElementById("jiesheng").innerHTML = "&yen;"+jiesheng.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
}
//��ҳ������ɣ����ü۸�ͳ�ƺ������ú������ܴ����ţ���Ϊ�Ǵ���ַ�������Ǵ���ֵ
window.onload = productCount;

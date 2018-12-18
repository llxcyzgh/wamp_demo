/*****************************************��Ѷ���***********************************************/
//��1��ȡ�����������id
//��2������DIV�ĸ߶�һ��
//��3��dome2�е�������dome1������һ��
//��4��dome��scrollTop������ʵ�ֹ���
//��5��������domeֹͣ����������ƿ�dome��������

//��1����ȡ����<div>�Ķ���
var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
//��2��������<div>�ĸ߶���Ϊһ��
dome1.style.height = dome.offsetHeight + "px";
dome2.style.height = dome.offsetHeight + "px";
//dome1.style.backgroundColor = "#ff0000";
//dome2.style.backgroundColor = "#ffff00";
//��3����dome1�����ݸ��Ƶ�dome2��
dome2.innerHTML = dome1.innerHTML;
//��4����ʱ������dome�����scrollTop���Խ����޸ģ�ʵ�ֶ���
var timer1 = window.setInterval("startScroll()",40);
function startScroll()
{
	dome.scrollTop++;
	//���������ȥ�ľ������domeԪ�صĸ߶ȣ����ͷ��ʼ����
	if(dome.scrollTop==dome.offsetHeight)
	{
		dome.scrollTop = 0;
	}
}
//��5���¼�����
dome.onmouseover = function(){
						window.clearInterval(timer1);
					}
dome.onmouseout = function(){
						timer1 = window.setInterval("startScroll()",40);
					}


/*************************************����ͼ*****************************************/
/*
���������
	��1������ͼƬ�ֻ�����
	��2���¼������ŵ�ͼƬ��ֹͣ�ֻ�������ƿ�����
	��3�����ҲҪ���ű䱳������ǰ����ɫΪorange����������ɫΪ��
	��4���¼������ŵ������ֹͣ�ֻ���ͼƬҲ�л�����Ӧ����ͼ���Ƴ������ֻ�
*/

//��һ������ͼƬ�ֻ�����
//��ȡid=dd_scrollͼƬ����
var imgObj = document.getElementById("dd_scroll");
var num = 1;//��ǰͼƬ��ȫ�ֱ���
var timer2 = window.setInterval("imgSwap()",1000);
function imgSwap()
{
	//�޸�imgObj��src���Ե�ֵ
	imgObj.src = "images/dd_scroll_"+num+".jpg";
	//������ű���ɫ
	changeBgColor();
	//���num=7����num=1
	num++;
	if(num==7)
	{
		num = 1;
	}
}
//��ͼƬ����onMouseOver�¼���onMouseOut�¼�
imgObj.onmouseover = function(){
							window.clearInterval(timer2);
						}
imgObj.onmouseout = function(){
							timer2 = window.setInterval("imgSwap()",1000);
						}

//����������ŵı���ɫ�����ŵ�ǰͼƬ�ߡ�
function changeBgColor()
{
	//��ȡid=scroll_number��div����
	var divObj = document.getElementById("scroll_number");
	//��ȡ���е�<li>��ǩ���ɵĶ�������
	var arr_lis = divObj.getElementsByTagName("li");
	//ѭ�������е�<li>��ǩ�ı���ɫ���
	for(var i=0;i<arr_lis.length;i++)
	{
		arr_lis[i].style.backgroundColor = "";
	}
	//����ǰͼƬ��ţ����ı���ɫΪorange
	arr_lis[num-1].style.backgroundColor = "orange";
}
//���������ŵ������ʱ������ֹͣ��ͼƬҪ�л������Ӧ��ͼƬ�ϣ�
//����ƿ�����������
function scrollStop(index)
{
	//�����ʱ��
	window.clearInterval(timer2);
	//����ǰͼƬ��Ż���index
	num = index;
	//���¸���ͼƬ��src���Ե�ֵ
	imgObj.src = "images/dd_scroll_"+num+".jpg";
	//���ĵ�ǰli��ŵı���ɫ
	changeBgColor();
}
//����ƿ�����������
function scrollStart()
{
	timer2 = window.setInterval("imgSwap()",1000);
}

/***********************************************��ҳѡ��л�Ч��*********************************************/
function showMe(index)
{
	//book_type_out�Ǳ�ǩ�ĵ�ǰ��ʽ
	//book_type ���Ǳ�ǩ�ĵ�ǰ��ʽ
	//book_show �����ݵĵ�ǰ��ʽ
	//book_none ���ǵ�ǰ���ݵ���ʽ
	var arr = ["history","family","culture","novel"];
	//ѭ�����ĸ���ǩ����ʽ����Ϊ�ǵ�ǰ��ʽ
	for(var i=0;i<arr.length;i++)
	{
		document.getElementById(arr[i]).className = "book_type";
	}
	//����ǰ��ǩ����ʽ�޸�Ϊbook_type_out
	document.getElementById(arr[index]).className = "book_type_out";
	//ѭ�����ĸ����ݱ�ǩ����ʽ����Ϊ���� book_none
	for(var i=0;i<arr.length;i++)
	{
		document.getElementById("book_"+arr[i]).className = "book_none";
	}
	//����ǰ������ʽ�޸�Ϊbook_show
	document.getElementById("book_"+arr[index]).className = "book_show";
}

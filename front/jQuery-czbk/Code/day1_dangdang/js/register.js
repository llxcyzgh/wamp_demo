// JavaScript Document
/*
���õ�����ʽ
	register_input �ı����ʼ״̬����ʽ
	register_input_Focus �ı����ý���ʱ����ʽ
	register_input_Blur �ı���ʧȥ����ʱ����ʽ
	register_prompt ��ʾ��Ϣ��Ĭ����ʽ
	register_prompt_error ��ʾ��Ϣ����ʱ����ʽ
	register_prompt_ok ��ʾ��Ϣ��ȷʱ����ʽ
*/
/***********************************************email��֤***********************************************/
/*�����email�ı�����ʱ*/
function emailFocus()
{
	var obj = document.getElementById("email");
	var msg = document.getElementById("emailMsg");
	obj.className = "register_input register_input_Focus";
	msg.className = "register_prompt";
	msg.innerHTML = "�����佫������¼���������˺ţ���������������֤�ʼ�";
}
/*����뿪email�ı���ʱ*/
function emailBlur()
{
	var obj = document.getElementById("email");
	var msg = document.getElementById("emailMsg");
	msg.innerHTML = "";
	if(obj.value=="")
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "�����ʼ��Ǳ��������������Email��ַ";
		msg.className = "register_prompt_error";
		return false;
	}else if(!isEmail(obj.value))
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "�����ʼ���ʽ����ȷ������������";
		msg.className = "register_prompt_error";
		return false;
	}else
	{
	  	obj.className="register_input";
	  	msg.className="register_prompt_ok";
		return true;
	}
}
function isEmail(str)
{
	if(str.indexOf("@")==-1)
	{
		return false;
	}else
	{
		return true;
	}
}


/**************************************�ǳ���֤**************************************/
/*�����nickName�ı�����ʱ*/
function nickFocus()
{
	var obj = document.getElementById("nickName");
	var msg = document.getElementById("nickMsg");
	obj.className = "register_input register_input_Focus";
	msg.className = "register_prompt";
	msg.innerHTML = "�ǳƿ��ɴ�СдӢ����ĸ��������ɣ�����Ϊ4-20���ַ�";
}
/*����뿪nickName�ı���ʱ*/
function nickBlur()
{
	var obj = document.getElementById("nickName");
	var msg = document.getElementById("nickMsg");
	msg.innerHTML = "";
	if(obj.value=="")
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "�ǳ�Ϊ����������������ǳ�";
		msg.className = "register_prompt_error";
		return false;
	}else if(obj.value.length<4 || obj.value.length>20)
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "�ǳƳ���Ϊ4-20���ַ�";
		msg.className = "register_prompt_error";
		return false;
	}else
	{
	  	obj.className="register_input";
	  	msg.className="register_prompt_ok";
		return true;
	}
}
/******************************************������֤***************************************/
/*�����pwd�ı�����ʱ*/
function pwdFocus()
{
	var obj = document.getElementById("pwd");
	var msg = document.getElementById("pwdMsg");
	obj.className = "register_input register_input_Focus";
	msg.className = "register_prompt";
	msg.innerHTML = "������ɴ�СдӢ����ĸ��������ɣ�����6��20���ַ�";
}
/*����뿪pwd�ı���ʱ*/
function pwdBlur()
{
	var obj = document.getElementById("pwd");
	var msg = document.getElementById("pwdMsg");
	msg.innerHTML = "";
	if(obj.value=="")
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "����Ϊ�������������������";
		msg.className = "register_prompt_error";
		return false;
	}else if(obj.value.length<6 || obj.value.length>20)
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "���볤��Ϊ6-20���ַ�";
		msg.className = "register_prompt_error";
		return false;
	}else
	{
	  	obj.className="register_input";
	  	msg.className="register_prompt_ok";
		return true;
	}
}
/*******************************************ȷ���������֤*************************************/
/*�����repwd�ı�����ʱ*/
function repwdFocus()
{
	var obj = document.getElementById("repwd");
	var msg = document.getElementById("repwdMsg");
	obj.className = "register_input register_input_Focus";
	msg.className = "register_prompt";
	msg.innerHTML = "������ɴ�СдӢ����ĸ��������ɣ�����6��20���ַ�";
}
/*����뿪repwd�ı���ʱ*/
function repwdBlur()
{
	var obj2 = document.getElementById("pwd");
	var obj = document.getElementById("repwd");
	var msg = document.getElementById("repwdMsg");
	msg.innerHTML = "";
	if(obj.value=="")
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "����Ϊ�������������������";
		msg.className = "register_prompt_error";
		return false;
	}else if(obj2.value != obj.value)
	{
		obj.className="register_input register_input_Blur";
		msg.innerHTML = "������������벻һ��";
		msg.className = "register_prompt_error";
		return false;
	}else
	{
	  	obj.className="register_input";
	  	msg.className="register_prompt_ok";
		return true;
	}
}

/*�����ύע��ҳ��ʱ����ҳ�����ݽ�����֤*/
function checkForm()
{
	//�����ύʱ�����ø�����֤����������֤
	var flagEmail = emailBlur();
	var flagNickName = nickBlur();
	var flagPwd = pwdBlur();
	var flagRepwd = repwdBlur();
	if(flagEmail && flagNickName && flagPwd && flagRepwd)
	{
		//�����֤ͨ��������ʾ��Ϣ
		window.alert("����֤ͨ��");
		return true;
	}else
	{
		//�����֤ʧ�ܣ�����ʾ��Ϣ
		window.alert("����֤ʧ��");
		return false;
	}
}
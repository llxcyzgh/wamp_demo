//根据id获得节点对象的操作
//自定义函数的名字为了方便记忆，使用$作为函数名
function $(id) {
    return document.getElementById(id);
}

//针对上面的代码，封装一个函数，提高代码的重用性
//参数1：监视的html标签对象
//参数2：监视的事件类型
//参数3：事件发生时执行的函数
function bindEvent(obj, eventType, fn) {
    //如果是主流浏览器(360、chrome、firefox、猎豹)
    if (window.addEventListener) {
        obj.addEventListener(eventType, fn, false);
    } else {
        obj.attachEvent('on' + eventType, fn);
    }
}

/*
 	执行动画javascript动画效果
	参数1:执行动画的元素
	参数2：执行动画的css属性
	参数3：到达目的地之后执行的代码，传递的是函数
*/
function animate(obj, json, fn) {
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        //定义一个标记（签到）
        var flag = true;
        //obj.offsetLeft = 500+'px';
        //先遍历每一个属性，获得该属性到达的目的地
        for (var attr in json) {
            //获得每一个属性到达的目的地
            var mudidi = parseInt(json[attr]);

            //获得现在的位置
            if (attr == 'opacity') {
                var now = parseInt(getStyle(obj, attr) * 100);			//100px      opacity:0-1之间的小数    0.1+0.2
            } else {
                var now = parseInt(getStyle(obj, attr));
            }

            //根据目的地的值、和起点的值，计算每次移动的距离
            var speed = (mudidi - now) / 10;
            // speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
            //speed = Math.ceil(speed);
            document.title = speed;
            // document.title = now;
            //开始移动
            if (attr == 'opacity') {
                obj.style[attr] = (now + speed) / 100;
            } else {
                obj.style[attr] = now + speed + 'px';
            }
            //如果任何一个属性还没有到达目的地，就改为false，也就是大家都等着
            if (now != mudidi) {
                flag = false;
            }
        }
        if (flag) {
            //说明都到齐，说明都打对勾了
            clearInterval(obj.timer);
            if (fn) {
                fn();
            }
        }
    }, 100)
}

//自定义函数获得任意css属性的值
//参数1：元素对象
//参数2: css属性名
function getStyle(obj, attr) {
    //IE
    if (obj.currentStyle) {
        return obj.currentStyle[attr];
        //return obj.currentStyle.fontSize
    } else {
        return getComputedStyle(obj, false)[attr];
    }
}


//删除某个元素身上的class属性,例如：<div class="page show active">
//删除show类，最终结果：<div class="page">
//参数1：DOM节点，哪个html元素
//参数2：待删除的类名：show
function removeClass(element, clsName) {
    //1. 先拿到该元素身上的所有class属性的值
    var cName = element.className;		//page show active

    //2. 将字符串分割成数组
    var arr = cName.split(' ');			//['page','show','active']

    //3. 遍历数组
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == clsName) {
            //把该元素删除即可
            arr.splice(i, 1);		  //['page','active']
        }
    }
    //4. 将数组拼接成字符串并赋值给标签的class属性
    cName = arr.join(' ');			 //page active
    element.className = cName;		 //class="page active"
}


//给某个元素增加class属性，例如：div class="page"
//添加某个类之后：div class="page show"
//参数1：操作的html元素对象
//参数2: 待添加的类名
function addClass(element, clsName) {
    //1. 先获得该元素身上的class属性的值
    var cName = element.className;
    //2. 标签可能没有class属性
    if (!cName) {
        element.className = clsName;		//div class="show"
        return;
    }
    //3. 执行到这里说明身上有class属性：div class="page"
    var arr = cName.split(' ');			//['page']
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == clsName) {
            //说明已经存在class类，就不用再添加了
            return;
        }
    }
    //4. 执行到这里说明：没有class类
    cName = arr.join(' ');		//page

    element.className += ' ' + clsName;
    // console.log(arr);
}


//封装ajax操作
var $$ = {
    request: function (options) {
        //兼容各个浏览器的XMLHttpRequest对象
        var xhr;
        try {
            //尝试执行
            xhr = new XMLHttpRequest();
        } catch (e) {
            //尝试使用IE6
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                //尝试使用IE5.5
                try {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    alert('你的浏览器太破了，不值得拥有,去百度下载一个吧');
                    location.href = "http://www.baidu.com";
                }
            }
        }

        //判断get还是post请求
        if (options.method == 'GET') {
            //url地址栏传递中文、特殊符号
            var content = encodeURIComponent(options.data);
            //缓存怎么解决
            var url = options.url + '?' + Math.random() + '&' + content;   //1.php?1234&name=zhangsan
            xhr.open(options.method, url, true);
            xhr.send();
        } else if (options.method == 'POST') {
            xhr.open(options.method, options.url, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(options.data);
        }

        //监视xhr请求的状态、以及服务器的状态
        xhr.onreadystatechange = function () {
            //只需要监视请求成功的时候，接收服务器返回的数据接口
            if (xhr.readyState == 4 && xhr.status == 200) {
                if (options.dataType == 'text') {
                    var result = xhr.responseText;
                } else if (options.dataType == 'xml') {
                    var result = xhr.responseXML;
                } else if (options.dataType == 'json') {
                    eval('var result =' + xhr.responseText);//{"name":"张三"}

                }
                //拿到数据之后，怎么处理？传递到回调函数中
                options.success(result);
            }
        }
    }
}


// //将来可能会变的数据使用参数传递，以对象的格式传递
// $$.request({
// 	method:'get',	//请求的方式
// 	url:'1.php',	//请求的地址
// 	data:'',		//请求时携带的数据
// 	//期望服务器返回什么类型的数据: text字符串、xml文档、json:JavaScript对象
// 	dataType:'json',
// 	success:function(result){	//请求成功时的函数
// 		console.log(result);
// 		//成功之后的业务处理
// 	}
// });


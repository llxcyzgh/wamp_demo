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
            }
            //拿到数据之后，怎么处理？传递到回调函数中
            options.success(result);
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


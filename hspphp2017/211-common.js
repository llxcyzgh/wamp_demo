// 封装ajax操作
var $$ = {
    request: function (options) {
        var xhr;
        // 1.兼容各个浏览器的XMLHttpRequest对象
        try {
            // 尝试执行
            xhr = new XMLHttpRequest();
        } catch (e) {
            // 尝试使用IE6
            try {
                xhr = new ActiveXObject("MSxml2.XMLHTTP");
            } catch (e) {
                try {
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    alert('你的浏览器版本太低了,请使用最新的浏览器版本');
                    location.href = "http://www.baidu.com";
                }
            }
        }

        // 2.判断get还是post请求
        if (options.method.toUpperCase() == 'GET') {
            // url地址栏传递中文、特殊符号
            var content = encodeURIComponent(options.data);
            //  缓存怎么解决
            var url = options.url + '?' + Math.random() + '&' + content;
            xhr.open('GET', url, true);
            xhr.send(null);
        } else if (options.method.toUpperCase() == 'POST') {
            xhr.open('POST', options.url, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(options.data);
        }

        // 3.监视xhr请求的状态以及服务器的状态
        xhr.onreadystatechange = function () {
            // 只需要监视请求成功的时候,接收服务器返回的数据接口
            if (xhr.readyState == 4 && xhr.status == 200) {
                if (options.dataType == 'text') {
                    var result = xhr.responseText;
                } else if (options.dataType == 'xml') {
                    var result = xhr.responseXML;
                } else if (options.dataType == 'json') {
                    // alert(xhr.responseText);
                    eval('var result = ' + xhr.responseText);
                }
            }
            // 4.拿到数据之后,怎么处理? 传递到回调函数中
            options.success(result);
        };
    }
};


/*
// 将来要调用的时候,以对象的格式传递
$$.request({
    method: 'POST', // 请求的方式
    url: '211-ajax.php', // 请求的地址
    data: '', // 请求时携带的数据 name=love&hate
    // 期望服务器返回什么类型的数据:text字符串,xml文档,json:javascript对象
    dataType: 'json',
    success: function (result) {
        console.log(result);
    } // 请求成功时的函数
});
*/
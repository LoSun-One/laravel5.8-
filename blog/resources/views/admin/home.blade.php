<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>{{ $data->name }}的主页</title>
    <style>
        .myHead{
            height: 150px;
            width: 100%;
            background: rgba(100, 100, 200, .5);
        }
        .left{
            margin：0;
            height: 450px;
            width: 250px;
            background: rgba(30, 144, 255, .2);
        }
        .right{
            position: absolute;
            left: 270px;
            top: 170px; 
            height: 77%;
            width: 69%; 
            background: rgba(30, 144, 255, .2);
        }
        .content{
            height: 100%;
            width: 100%;
        }
    </style> 
</head> 
<body>
    
    <div class="myHead"> 
        <ul>
            <li>昵称：{{ $data->name }}</li>
            <li>个人签名：{{ $data ->pen }}</li>
            
            <li><button onclick="set()">设置</button></li>
            <li><button onclick="write()">写一篇</button></li>
            <li>
            <button> 退出</button></li>
            <form>
                <input type="text" value="{{ $data->root }}">
            </form>
        </ul>  
    </div>
    <div class="left">  
        <ul>
            <li>文章（{{ $data->article }}篇）</li>
            <li>访问量</li>
            <li>留言</li>
            <li>收件箱</li>
            <li>海洋区</li>
        </ul> 
    </div> 
    <div class="right">  
        <iframe class="content" id='content' src="/api/admin/login/" frameborder="0">

        </iframe>
    </div> 
</body>
<script>
    function set(){
        $.ajax({
            type:'GET',
            url:'/api/admin/setself/' ,
            data:{user:'{{ $data->root }}'},  
            async: false,  
            error: function(request) {  
                alert("Connection error");  
            },  
            success: function(data) {  
                //接收后台返回的结果 
                document.getElementById("content").src=this.url;     
            },
        })

    }

    function write(){
        $.ajax({
            type:'GET',
            url:'/api/admin/write/' ,
            data:{user:'{{ $data->root }}'},  
            async: false,  
            error: function(request) {  
                alert("Connection error");  
            },  
            success: function(data) {  
                //接收后台返回的结果 
                document.getElementById("content").src=this.url;     
            },
        })
    }

</script>
</html> 
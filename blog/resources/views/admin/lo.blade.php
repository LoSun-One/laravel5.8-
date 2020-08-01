<!doctype html>
<html  class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>账号登录</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/admin/css/font.css">
    <link rel="stylesheet" href="/admin/css/login.css">
    <link rel="stylesheet" href="/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/admin/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">

<div class="login layui-anim layui-anim-up">
    <div class="message">用户登录</div>
    <div id="darkbannerwrap"></div>

    <form method="post" class="layui-form" id="form" action="/api/admin/login/">
        <input name="user" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input name="validation" lay-verify="required" placeholder="验证码"  type="text" class="layui-input">
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit" onclick="send()">
        <hr class="hr20" >
    </form>
</div>

<script>
    function send()
    {
        // $.post('/api/admin/login/',
        //     {
        //         user:''
        //     }
        // ,function (data,status){
        //         接收后台返回的结果
        //         if (data['status']=='0'){
        //             document.getElementById("myDiv").innerHTML=data['msg'];
        //         }else{
        //             window.location.assign('/api/admin/home/');
        //         }
        //     })

        // $.ajax({
        //     type: "POST",
        //     url:'/api/admin/login/',
        //     data:$('#form').serialize(),
        //     async: false,
        //     error: function(request) {
        //         alert("Connection error");
        //     },
        //     success: function(data) {
        //         //接收后台返回的结果
        //         if (data['status']=='0'){
        //             document.getElementById("myDiv").innerHTML=data['msg'];
        //         }else{
        //             window.location.assign('/api/admin/home/?user='+data['root']);
        //         }
        //
        //     }
        // })
    }
</script>


</body>
</html>

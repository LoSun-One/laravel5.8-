<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<title>修改{{ $data->root }}信息</title>
</head>
<body>
    <form action="" id='form'>
        <h3>信息修改</h3>
        <input type="hidden" name="root" value="{{ $data->root }}">
        <label >昵称：<input type="text" name="name" value="{{ $data->name }}"></label>
        <label >我的签名：<input type="text" name="pen" value="{{ $data->pen }}"></label>
        <label >生日：<input type="date" name="birthday" value="{{ $data->birthday }}"></label>
        <input type="button" value="保存" onclick="save()">
    </form>
</body>
    <script>
        function save(){
            $.ajax({
                type:'POST',
                url:'/api/admin/save/',
                data:$('#form').serialize(),
                async: false,  
                error: function(request) {  
                    alert("Connection error");  
                },  
                success: function(data) {  
                    //接收后台返回的结果
                    alert('修改成功。'+data)
                    
                },
            })
        }
    </script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>子模板</title>
    <style>
        .header{height: 100px;background: darkred}
        .middle{
            height: 300px;background: lightblue}
        .footle{
            height: 100px;background: yellowgreen;
        }


    </style>
</head>

<body>
<div class="header">我是公共的头部</div>
{{--
//方法一
@yield('content')
--}}
{{--//方法二--}}
@section('content')
    <p>我是主模板里的内容</p>
    @show

<div class="footle">我是公共的底部</div>




</body>
</html>
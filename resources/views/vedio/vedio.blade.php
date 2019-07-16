<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="layui/css/layui.css">
    <link href="/layui/css/layui.css">
    <link href="/layui/css/layui.mobile.css">
    <style>

        #myDiv{
            width:70%;
            height:auto;
            background:#ccc;
        }
    </style>
</head>

<body>
<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item"><a href="">帮助</a></li>
    <li class="layui-nav-item layui-this"><a href="">最新电影</a></li>
    <li class="layui-nav-item"><a href="">最热电影</a></li>
    <li class="layui-nav-item">
        <a href="javascript:;">观看记录</a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a href="">电影</a></dd>
            <dd><a href="">添加电影</a></dd>
            <dd><a href="/vedio">提送线上</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item"><a href="">社区</a></li>
</ul>
    <div class="layui-carousel" id="test1">
        <div carousel-item>

            <div ><img src="/img/1.png" style="width: 100%;height: 290px;"></div>
            <div><img src="/img/2.png" alt="" style="width: 100%;height: 290px;"></div>
            <div><img src="/img/3.png" alt=""style="width: 100%;height: 290px;"></div>
            <div><img src="/img/4.png" alt=""style="width: 100%;height: 290px;"></div>
            <div><img src="/img/5.png" alt=""style="width: 100%;height: 290px;"></div>
            <div><img src="/img/6.png" alt=""style="width: 100%;height: 290px;"></div>
        </div>
    </div>
<table class="layui-table">
    <colgroup>
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>电影名称</th>
        <th>加入时间</th>
        <th>点击观看</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cc as $k=>$v)
        <tr>
            <td>{{$v->title}}</td>
            <td>2019</td>
            <td><a href="list?pid={{$v->fid}}"><i class="layui-icon layui-icon-face-smile"  style="font-size: 30px; color: #1E9FFF;"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
<script src="/layui/layui.all.js"></script>
<script src="/layui/layui.js"></script>
<script src="/js/jquery-3.2.1.min.js"></script>
<div class="layui-bg-red"></div>
<script>
    $(function(){
        layui.use(['layer','element','carousel'], function(){
            var layer = layui.layer;
            var element = layui.element;
            var carousel = layui.carousel;
            carousel.render({
                elem: '#test1'
                ,width: '100%' //设置容器宽度
                ,arrow: 'always' //始终显示箭头
                // ,anim: 'updown' //切换动画方式
            });
        });
    })

</script>

#第几章示例
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>添加文字标签</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <style>
    body,
    html,
    #container {
        overflow: hidden;
        width: 100%;
        height: 100%;
        margin: 0;
        font-family: "微软雅黑";
    }
    </style>
    <script src="//api.map.baidu.com/api?type=webgl&v=1.0&ak=n7RE9mHv2ahNewcKzrXXEUogtibaH6vi"></script>
</head>
<body>
    <div id="container"></div>
</body>
</html>
<script>
var map = new BMapGL.Map('container');
map.centerAndZoom(new BMapGL.Point(118.913121, 32.108220), 16);
map.enableScrollWheelZoom(true);
var opts = {
    position: new BMapGL.Point(118.913121, 32.108220), // 指定文本标注所在的地理位置
    offset: new BMapGL.Size(30, -30) // 设置文本偏移量
};
// 创建文本标注对象
var label = new BMapGL.Label('西区食堂：二楼烤翅不错！', opts);
// 自定义文本标注样式
label.setStyle({
    color: 'red',
    borderRadius: '5px',
    borderColor: '#ccc',
    padding: '0px',
    fontSize: '16px',
    height: '20px',
    lineHeight: '15px',
    fontFamily: '微软雅黑'
});
map.addOverlay(label);
var opts = {
    position: new BMapGL.Point(118.916821, 32.109220), // 指定文本标注所在的地理位置
    offset: new BMapGL.Size(30, -30) // 设置文本偏移量
};
// 创建文本标注对象
var label = new BMapGL.Label('图书馆7楼！人很少', opts);
// 自定义文本标注样式
label.setStyle({
    color: 'red',
    borderRadius: '5px',
    borderColor: '#ccc',
    padding: '0px',
    fontSize: '16px',
    height: '20px',
    lineHeight: '15px',
    fontFamily: '微软雅黑'
});
map.addOverlay(label);
</script>

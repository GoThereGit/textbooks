<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>全唐诗检索系统</title>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <script type="text/javascript" src="//api.map.baidu.com/api?type=webgl8v=1.88ak=您的密钥">
    </script>
    <style>
        #container {
            width: 800px; /*设定宽度*/
            height: 600px; /*设定高度*/
        }
    </style>
</head>
<body>
    <div id="container"></div>
    <script type="text/javascript">
        var map = new BMapGL.Map("container"); //创建地图实例
        var point = new BMapGL.Point(118.916683, 32.112189); //创建点坐标
        map.centerAndZoom(point, 16); //初始化地图，设置中心点坐标和地图级别
        map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放
        var scaleCtrl = new BMapGL.ScaleControl(); //添加比例尺控件（步骤1）
        map.addControl(scaleCtrl); //添加比例尺控件（步骤2）
        var zoomCtrl = new BMapGL.ZoomControl(); //添加缩放控件（步骤1）
        map.addControl(zoomCtrl); //添加缩放控件（步骤2）

        var point = new BMapGL.Point(118.916683, 32.112189); //添加点坐标
        var marker = new BMapGL.Marker(point); //创建标注
        map.addOverlay(marker); //将标注添加到地图中

        var point = new BMapGL.Point(118.916683, 32.112189); //添加点坐标
        var content = "南京师范大学仙林校区";
        var label = new BMapGL.Label(content, { //创建文本标注
            position: point, //设置标注的地理位置
            offset: new BMapGL.Size(10, 20) //设置标注的偏移量
        })
        map.addOverlay(label); //将标注添加到地图中

        label.setStyle({  //设置label的样式
            color: '#000', //字体颜色
            fontSize: '18px', //字体大小
            border: '2px solid #1E90FF' //字体标签边框粗细、类型、颜色
        })

        function addmypoint(pos, labeltext) {
            pos_x = pos.split(",")[0];
            pos_y = pos.split(",")[1];

            //添加标注点
            var mypoint = new BMapGL.Point(pos_x, pos_y);
            var marker = new BMapGL.Marker(mypoint); //创建标注
            map.addOverlay(marker); //将标注添加到地图中

            //添加标注标签
            var content = labeltext;
            var label = newBMapGL.Label(content, { //创建文本标注
                position: mypoint, //设置标注的地理位置
                offset: new BMapGL.Size(4, 4) //设置标注的偏移量
            })
            map.addOverlay(label); //将标注添加到地图中
            label.setStyle({ //设置label的样式
                color: '#000', //字体颜色
                fontSize: '20px', //字体大小
                border: '2px solid #1E90FF' //字体标签边框粗细、类型、颜色
            })

            //创建信息窗口
            var opts = {
                width: 200, //信息窗口宽度
                height: 100, //信息窗口高度
                title: infotitle //信息窗口标题
            }
            var infoWindow = new BMapGL.InfoWindow(infotext, opts); //创建信息窗口对象
            marker.addEventListener("click", function () {
                map.openInfoWindow(infoWindow, mypoint); //开启信息窗口
            })
        }

        <?php
            $conn = mysqli_connect("127.0.0.1", "root", ""); //链接MySQL
            $condb = mysqli_select_db($conn, "tangshi") or die("无法链接服务器"); //选择数据库
            mysqli_query($conn, "set names'utf8'"); //设置字符集

            //查询
            $sqla_co = "SELECT * FROM `gis`";
            $query_co = mysqli_query($conn, $sqla_co);
            while ($row = mysqli_fetch_array($query_co)) {
                echo "addmypoint('" . $row['xy'] . "','" . $row['name'] . "','" . $row['name'] . "','" . $row['note'] . "');";
            }
        ?>

    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{width:100%;height:500px;}
		p
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=604b64983587b7b3e678f81a2f5c700c"></script>
	<title>地名检索</title>
	<form name="f" action="map2.php" method="post">
</head>
<body><body background=bg3.png>
	<p><br><font size=6 face="微软雅黑"><center>《左传》诸侯国检索<br>
				<font face="微软雅黑" size=4>在此输入要检索的诸侯国
	<input type="text" name="wd" id="kw" maxlength="100" style = "width:80px">
	<input type="submit" value="确定" id="kw1">
	<input type="reset"  value="重置" id="kw2">
	<input type="button" value="返回首页" onclick=javascript:window.location.href="index.html"><br>
	</p>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	var map = new BMap.Map("allmap");
	map.centerAndZoom('郑州',6);
	map.addControl(new BMap.NavigationControl());        // 添加平移缩放控件
	map.addControl(new BMap.ScaleControl());             // 添加比例尺控件
	map.addControl(new BMap.OverviewMapControl());       //添加缩略地图控件
	map.enableScrollWheelZoom();                         //启用滚轮放大缩小
<?php
	include "cx1.php";
	for($j=0;$j<$i;$j++){
		$xy=$arr[$j][1];
		echo "var point = new BMap.Point(".$xy.");";
		echo "var marker = new BMap.Marker(point);";
		echo "map.addOverlay(marker);";
	}
?>
</script>
<?php
	$a=$_POST["wd"];
	
	$con1=mysql_connect("localhost", "cognitiv_zz", "M~v1Ka?b@tI6")  or die ("连接失败");
	mysql_query("set names 'UTF8'");		//控制字符集
	mysql_select_db("cognitiv_zz") or die ("连接失败");
	//$con1=mysql_connect("localhost", "root", "") or die ("连接失败");
	//mysql_query("set names 'UTF8'");		//控制字符集
	//mysql_select_db("z") or die ("连接失败");

	$sql="select * from dmb where type like '%$a%'";

	$result1=@mysql_query($sql,$con1);	//执行sql循环
	$i=0;$arr[0][0]=0;
	while($row=@mysql_fetch_array($result1)){
		$arr[$i][1]=$row[4];//xy
		$arr[$i][2]=$row[2];//n
		$arr[$i][3]=$row[0];//name
		//echo $arr[$i][1];
		$i++;
	}
?>
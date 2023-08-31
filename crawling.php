<?php
	$f1=fopen("http://www.nnu.edu.cn/ ", "r");
	$f2=fopen("re.txt" , "w");
	echo $f1;
	while(!feof($f1)){
		$s=fgets($f1,1000000);
		echo $s;
		fwrite($f2,$s);
	}
	fclose($f1);
?>



<?php
	$f1=fopen("http://www.baidu.com/", "r");
	$f2=fopen("re.txt" , "w");
	echo $f1;
	while(!feof($f1)){
		$s=fgets($f1,1000000);
		echo $s;
		fwrite($f2,$s);
	}
	fclose($f1);
?>



function DownloadURL($url)
	{//下载指定网址的网页
		echo $url;
		$content="";
		$handle=fopen($url,"r") or die("无法打开网页"); 
      //打开网页文件
		while($line=fgets($handle,10000)){
	      //echo $line;
			$content.=$line;						
		}
		fclose($handle);
		return $content;
	}

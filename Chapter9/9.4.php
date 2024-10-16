<?php
    // 9.4 网络爬虫

    $url = "http://news.njnu.edu.cn/whjs/tzgg.htm";
    $web = fopen($url,"r");
    $result = fopen("news.html","w");
    while(!feof($web)) {
        $line = fgets($web);
        fwrite($result,$line);
    }
    fclose($web);
    fclose($result);
?>
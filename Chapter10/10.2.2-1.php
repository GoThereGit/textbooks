<?php
    // 10.2.2 连接MySQL获取数据，并直接输出到页面上
    $searchword = $_GET["searchword"];

    // 第一步
    $conn = mysqli_connect("127.0.0.1", "root", ""); //连接MySQL

    // 第二步
    $condb = mysqli_select_db($conn, "tangshi") or die("无法连接服务器"); //选择数据库

    // 第三步
    mysqli_query($conn, "set names'utf8'"); //设置字符集

    // 第四步
    $sql = "SELECT * FROM `ts` WHERE `poem` LIKE '%$searchword%'"; //检索诗文中包含检索词的诗文

    // 第五步
    $result = mysqli_query($conn, $sql); //执行SQL语句

    // 第六步
    while ($row = mysqli_fetch_array($result)) {
        echo $row["title"]; //标题
        echo $row["author"]; //作者
        echo $row["poem"]; //诗文
    }
?>
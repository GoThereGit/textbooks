<?php
    // 10.2.2 连接MySQL获取数据，并以表格形式呈现
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
    $resultHtml = "";
    while ($row = mysqli_fetch_array($result)) {
        $title = $row["title"]; //标题
        $author = $row["author"]; //作者
        $text = $row["poem"]; //诗文
        $resultHtml .= "<tr><td>$title</td><td>$author</td><td>$text</td></tr>"; //输出表格内容
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>全唐诗检索系统</title>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>

    <table>
        <?php
            echo $resultHtml;
        ?>
    </table>

</body>
</html>

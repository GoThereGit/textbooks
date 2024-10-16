<?php
    // 7.2.4 数组

    $poem = array("床前明月光，", "疑是地上霜。", "举头望明月，", "低头思故乡。", "");
    print_r($poem);
    echo $poem[0];
    $poem[0] = "无";
    echo $poem[0];

    $shiji = array("author" => "司马迁", "dynasty" => "西汉", "chars_len" => 526500);

    $fourclassic = array(
        "hongloumeng" => array("author" => "曹雪芹", "publish" => "1791年", "chars_len" => 800000),
        "xiyouji" => array("author" => "吴承恩", "publish" => "1592年", "chars_len" => 800000),
        "shuihuzhuan" => array("author" => "施耐庵", "publish" => "1594年", "chars_len" => 800000),
        "sanguoyanyi" => array("author" => "罗贯中", "publish" => "1522年", "chars_len" => 800000),
    );


?>
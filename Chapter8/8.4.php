<?php
    $poem = " 床前明月光，";
    echo $poem;

    $poem = " 床前明月光，";
    echo trim($poem, "，");

    $poem = "床前明月光，疑是地上霜。举头望明月，低头思故乡。";
    echo mb_strlen($poem, "utf-8");

    $poem = "静夜思Toughts on a Quiet Night";
    echo mb_strlen($poem, "utf-8");

    $poem = "静夜思Toughts on a Quiet Night";
    echo mb_strpos($poem, "T", 0, "utf-8");

    $poem = "静夜思Toughts on a Quiet Night";
    echo mb_substr($poem, 3, 25, "utf-8");


    $poem = "静夜思Toughts on a Quiet Night";
    echo mb_substr($poem, mb_strpos($poem, "T", 0, "utf-8"), 25, "utf-8");


    $poem = "静夜思Toughts on a Quiet Night";
    echo mb_substr($poem, mb_strpos($poem, "T", 0, "utf-8"), mb_strlen($poem, "utf-8"), "utf-8");


    $poem = array(array("title" => "秋夕", "author" => "杜牧"),
        array("title" => "静夜思", "author" => "李白"),
        array("title" => "江雪", "author" => "柳宗元"),
        array("title" => "早发白帝城", "author" => "李白"));
    if ($poem[0]["author"] == $poem[1]["author"]) {
        echo "第一首诗和第二首诗作者相同";
    } else {
        echo "第一首诗和第二首诗作者不同";
    }


    $s = "寻寻觅觅，冷冷清清，凄凄惨惨戚戚。乍暖还寒时候，最难将息。三杯两盏淡酒，怎敌他、晚来风急？雁过也，正伤心，却是旧时相识。满地黄花堆积。憔悴损，如今有谁堪摘？守着窗儿，独自怎生得黑？梧桐更兼细雨，到黄昏、点点滴滴。这次第，怎一个愁字了得！";
    $len = mb_strlen($s, "utf-8");
    for ($i = 0; $i <= $len - 5; $i++) {
        $word = mb_substr($s, $i, 4, "utf-8");
        $char1 = mb_substr($word, 0, 1, "utf-8");
        $char2 = mb_substr($word, 1, 1, "utf-8");
        $char3 = mb_substr($word, 2, 1, "utf-8");
        $char4 = mb_substr($word, 3, 1, "utf-8");
        if ($char1 == $char2 && $char3 == $char4 && $char1 != $char3) {
            echo $word . "<br>";
        }

    }

?>
<?php
    $a=array(1,2,3,4,5,6,7);
    echo $a[2];
?>



<?php
    $a=array(1,2,3,4,5,6,7);
    print_r($a);
?>



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    print_r($a);
?>



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    v$a[6]="php真有趣";
    print_r($a);
?>
 


<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    $a[10]="php真有趣";
    print_r($a);
?>



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    $a["汉语言"]="php真有趣";
    print_r($a);
?>



<?php
    $a1="2001-2002-2003-2004";
    $a2=explode("-",$a1);
    print_r($a2);
?>



for($i=1;;$i++){
    if($i>10){
        break;
    }
    echo $i;
}



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    $a["汉语言"]="php真有趣";
    print_r($a);
    foreach($a as $k=>$v){
        echo$k,$v,"<br>";
    }
        //foreach($array as $key=>$value)
?>



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    $a["汉语言"]="php真有趣";
    print_r($a);
    foreach($a as $k=>$v){
        echo$k,"键(元素)的值为",$v,"<br>";
    }
        //foreach($array as $key=>$value)
?>



<?php
    $a=array(1,2,3.1415,"数字人文",5,6,7);
    $a["汉语言"]=array("数据库与数字人文","语言统计概论","应用语言学",'中文信息处理');
    print_r($a);
    foreach($a as $k=>$v){
        echo$k,"键(元素)的值为",$v,"<br>";
    }
        //foreach($array as $key=>$value)
?>


<?php
    $x=0;
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
        $b[$i][$j]=$x;
        $x++;
        }
    }
    print_r($b); 
?>



<?php
    $x=0;
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            if($j==5)break;
        $b[$i][$j]=$x;
        $x++;
        }
    }
    print_r($b);
?>



<?php
    $x=0;
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            if($j==5)continue;
        $b[$i][$j]=$x;
        $x++;
        }
    }
    print_r($b); 
?>



<?php
    $y=1;
    while($y<100){
        echo$y++; 
    }
?>








<?php
    $s="今天 小明 超级不想学习";
    echo $s,"<br>";
    echo trim($s,"不 ");
?>


<?php
    $s="今天小明超级想学习";
    echo strlen($s);
?>



<?php
    $s="今天小明超级想学习";
    echo mb_strlen($s,"utf8");
?>



<?php
    $s="今天小明超级想学习";
    echo mb_substr($s,7,2,"utf8");
?>



<?php
    $s="今天小明超级想学习";
    echo mb_strpos($s,"学",0,"utf8");
?>



<?php
    echo "a"=="a";
    echo "a"=="b";
    echo "b"=="a";
?>



<?php
    echo strcmp("abc","abc");
    echo strcmp("abc","cba");
    echo strcmp("cba","abc");
?>





for($i=0;$i<10000;$i++){
	$c="&#".$i;
	echo $c," ";
}
//$s="今天 小明 超级不想学习";
//	echo $s,"<br>";
//	echo trim($s,"不 ");
	echo"&#x597D";
	$s="张三上厕所";
	echo strlen($s);
	echo mb_strlen($s,"utf8");
	echo trim($s,"厕所");
	echo mb_substr($s,1,2,"utf8");
	echo mb_strlen($s,"utf8");
	echo mb_strpos($s,"上",0,"utf8");

	$s2="寻寻觅觅，冷冷清清，凄凄惨惨戚戚。乍暖还寒时候，最难将息。三杯两盏淡酒，怎敌他、晚来风急！雁过也，正伤心，却是旧时相识。满地黄花堆积，憔悴损，如今有谁堪摘？守着窗儿，独自怎生得黑！梧桐更兼细雨，到黄昏、点点滴滴。这次第，怎一个愁字了得";

function findAA($s){
	$len=mb_strlen($s,"utf8");
	$n=0;
	for($j=0;$j<$len;$j++){ 
		$c1=mb_substr($s,$j,1,"utf8");
		$c2=mb_substr($s,$j+1,1,"utf8");
		if($c1==$c2){
			echo $c1,$c2,"<br>";
			$n++;
		}
	}
	echo"一共找到重叠式".$n."个<br>";
}
	findAA($s2);
	
?>



<?php
for($i=0;$i<50000;$i++){
	$c="&#".$i;
	echo $c," ";
}
?>



<?php
	echo"&#x597D";
	$s="张三上厕所";
	echo strlen($s);
	echo mb_strlen($s,"utf8");
	echo trim($s,"厕所");
	echo mb_substr($s,1,2,"utf8");
	echo mb_strlen($s,"utf8");
	echo mb_strpos($s,"上",0,"utf8");
?>

	
<?php
function findAA($t){
	$t="寻寻觅觅，冷冷清清，凄凄惨惨戚戚。乍暖还寒时候，最难将息。三杯两盏淡酒，怎敌他、晚来风急！雁过也，正伤心，却是旧时相识。满地黄花堆积，憔悴损，如今有谁堪摘？守着窗儿，独自怎生得黑！梧桐更兼细雨，到黄昏、点点滴滴。这次第，怎一个愁字了得";
	$len=mb_strlen($t,"utf8");
	$n=0;
	for($j=0;$j<$len;$j++){ 
		$c1=mb_substr($t,$j,1,"utf8");
		$c2=mb_substr($t,$j+1,1,"utf8");
		if($c1==$c2){
			echo $c1,$c2,"<br>";
			$n++;
		}
	}
	echo"一共找到重叠式".$n."个<br>";
}
	findAA($t);
	
?>
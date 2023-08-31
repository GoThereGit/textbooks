<?php
echo$_POST["wd"];
?>



<?php
function print_pd($start,$level){
    $n=$level;
    for($i=$start;$i<=$n;$i++){
        for($k=$n-$i;$k>=0;$k--){
            echo"&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
        echo chr($j+64);
        }
        echo"<br>";
    }
}
        $x=$_POST["wd"];
        print_pd(0,$x);
?>



<title>生成一下，你就知道</title>
    <!--标题格式-->
    您好，请输入一个整数，范围为1~20
<form name="f" action="baidu0427.php" method="post"> 
<input type="text" name="wd" id="kw" maxlength="100">
    <!--引入文本标签-->
<input type="submit" value="百度一下" id="su">
    <!--引入按钮标签-->
</form>



<title>生成一下，你就知道</title>
    <!--标题格式-->
    您好，请在第一个交互框中输入生成开始层数，
    在第二个交互框中输入生成结束层数，范围为1~20
<form name="f" action="baidu0427.php" method="post"> 
<input type="text" name="wd1" id="kw" maxlength="100"> 
    <!--引入第一个参数，表示生成开始层数-->
<input type="submit" value="开始层数" id="su1">
    <!--引入第一个按钮标签，表示生成开始层数-->
<input type="text" name="wd2" id="kw" maxlength="100"> 
    <!--引入第二个参数，表示生成结束层数-->
<input type="submit" value="结束层数" id="su2">
    <!--引入第二个按钮标签，表示生成结束层数-->
</form>



<?php
function print_pd($start,$level){
    $n=$level;
    for($i=$start;$i<=$n;$i++){
        for($k=$n-$i;$k>=0;$k--){
            echo"&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo chr($j+64);
        }
        echo"<br>"; 
    }
}
        $x=$_POST["wd1"];
        $y=$_POST["wd2"];
        print_pd($x,$y);
? >













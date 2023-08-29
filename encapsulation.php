<?php
#封装函数
function addn(){
    echo 5+7;
}
    echo"<br>";
addn();
?>



<?php
function addn($m,$a){
    return$m+$a;
}
    echo"<br>";
    echo addn(5,7);
?>



<?php
function print_pd($start,$level){
    $n=$level;
    for($i=$start;$i<=10;$i++){
        for($k=10-$i;$k>=O;$k--){
            echo"&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i*2-1;$j++){
            echo chr($j+64);
        }
        echo"<br>";
    }
}
print_pd(3,10);
?>

<?php
function addn($m,$a){
    return$m+$a;
}
    echo"<br>";
    addn(10,7);
?>
</body>



function_pr3($val){
    return"这是一个自定义函数$val";
}
echo_pr3("你好");

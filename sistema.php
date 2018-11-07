<?php

function from10to2($num){
    $numx = $num % 2;
    $str2 = (string)$numx;


    while ((($num - $numx) / 2)>1){
        $num = ($num-$numx) / 2;
        $numx = $num % 2;
        $str2 = $str2 . (string)$numx;
    }

    $num = ($num-$numx) / 2;
    $str2 = $str2 . (string)$num;
    return strrev($str2);
}

function from2to10($str){
    $arr1 = str_split($str);
    $count = count($arr1);
    $result=0;
    for ($i=0; $i < $count; $i++){
        $x=$count - $i - 1;
        $result=$result+$arr1[$i]*(2**$x);

    }

    return $result;
}


echo 'Из десятичной в двоичную: <br/>';

$num = 5 ;

echo from10to2($num) . '<br />';



echo 'Из двоичной в десятичную: <br/>';
$str = "111";
echo from2to10($str) . '<br />';

?>

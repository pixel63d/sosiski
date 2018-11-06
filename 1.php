<?php

$str = "111010001101";

$arr1 = str_split($str);
$count = count($arr1);
$result=0;
for ($i=0; $i < $count; $i++){
    $x=$count - $i - 1;
    $result=$result+$arr1[$i]*(2**$x);

}
echo $result;



?>


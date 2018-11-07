<?php

function goToStepen($num, $temp_stepen)
{

    if($temp_stepen == 0)
    {
        return 1;
    }
    if($temp_stepen == 1)
    {
        return $num;
    }

    $res = $num;
    for($i = 1; $i < $temp_stepen;$i++)
    {
        $res = $res * $num;
    }
    return $res;
}
function convert_three_to_ten($num3)
{
    $from_system = 3;
    $temp_number = $num3;
    $result = 0;
    $stepen = 0;
    while($temp_number)
    {
        $result += $temp_number % 10 * goToStepen($from_system, $stepen);
        $stepen++;
        $temp_num = $temp_number;
        $temp_number = ceil($temp_number/10);
        if($temp_number*10 != $temp_num)
            $temp_number--;
    }
    return $result;
}
function convert_ten_to_seventeen($num10)
{
    $to_system = 17;
    $temp_number = $num10;
    $result = "";
    $iterator = 0;
    $ost = array();
    while($temp_number)
    {
        $temp_num = $temp_number;
        $temp_zz = ceil($temp_number/$to_system);
        if($temp_zz*$to_system != $temp_num)
            $temp_zz--;

        if($temp_zz == -1) // случай 17/17
        {
            $ost[$iterator] = 0;
            $ost[$iterator+1] = 1;
            break;
        }

        $ost[$iterator] = $temp_number - $temp_zz*$to_system;
        $temp_number =  $temp_zz;
        $iterator++;
    }
    $startpointer = 0;
    for($z = 0; $z<999;$z++)
    {
        if(!$ost[$z])
        {
            $startpointer = $z;
            break;
        }
    }
    for($i=$startpointer;$i>-1;$i--)
    {

        switch($ost[$i])
        {
            case 10: $ost[$i] = "A"; break;
            case 11: $ost[$i] = "B"; break;
            case 12: $ost[$i] = "C"; break;
            case 13: $ost[$i] = "D"; break;
            case 14: $ost[$i] = "E"; break;
            case 15: $ost[$i] = "F"; break;
            case 16: $ost[$i] = "G"; break;
        }

        $result .= $ost[$i];
    }

    return $result;
}
function three_to_seventeen($number)
{
    return convert_ten_to_seventeen(convert_three_to_ten($number));
}

$three = 22;
$seventeen = three_to_seventeen($three);
echo $seventeen;

?>
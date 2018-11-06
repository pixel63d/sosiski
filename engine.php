<?php



$stokeOne = 'induction'; // впуск
$stokeTwo = 'compression'; // сжатие
$stokeThree = 'power'; // рабочий ход
$stokeFour = 'exhaust'; // выпуск
$inletValve = ['open', 'closed'];// впускной клапан
$exhaustValve = ['open', 'closed']; // выпускной клапан

function doEngineStroke($number)
{
    doCylinder(1,$number);
    doCylinder(2,($number+1)%4);
    doCylinder(3,($number+2)%4);
    doCylinder(4,($number+3)%4);

}

$i = 0;
while (true) {
    $i++;
    if ($i>10){ die();}
    $number = $i%4;
    doEngineStroke($number);
    echo '------------------------------------'."\n";
}
function doCylinder($number, $stroke){
    if ($stroke == 1 || $stroke == 3)  {
        echo 'piston '.$number.' up' . "\n";
    }
    if ($stroke == 1) {
        echo 'flash ' . $number . "\n";
    }
    if ($stroke == 0 || $stroke == 2) {
        echo 'piston ' . $number . ' down'."\n";
    }

}
?>


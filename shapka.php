if (($tempTudey - $tempTomorrow) > 3){
echo ' и шарф';


if ( $isDown || $count>=1){
echo 'ты хорошо оделся?';
}

if ($isRain == true){
echo ' и возьми с собой зонтик';

}
}


else{

if ( $isDown || $count>=1){
echo 'ты хорошо оделся?';
}

elseif ($isRain == true) {
echo ' и возьми с собой зонтик';
if (($tempTudey - $tempTomorrow) > 3) {
echo ' и шарф';
}
}
}



elseif ($tempTudey < 13) {
if ($tempYesterday >= 11 && $tempTomorrow >= 11){
echo 'Одень шапкку ';
}
elseif ($tempYesterday < 11 || $tempTomorrow < 11){
echo 'одень зимнюю шапку ';
}
}
else {

if ($isDown || $count >= 1) {
echo 'ты хорошо оделся?';
} elseif ($isRain == true) {
echo ' и возьми с собой зонтик';
if (($tempTudey - $tempTomorrow) > 3) {
echo ' и шарф';
}
}

}
}